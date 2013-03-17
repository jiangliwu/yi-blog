<?php

class BlogController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
		array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','comment'),
				'users'=>array('*'),
		),
		array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
		),
		array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
		),
		array('deny',  // deny all users
				'users'=>array('*'),
		),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$commentModel = new Comment;
		$blogModel = $this->loadModel($id);
		Yii::getLogger()->log($blogModel->blog_text,'info','app.BlogController');
		
		$this->render('view',array(
			'model'=>$blogModel,
			'commentModel'=>$commentModel
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Blog;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Blog']))
		{
			$model->attributes=$_POST['Blog'];
			$model->blog_create_time = date('Y-m-d H:i:s');
			$model->blog_modify_time = date('Y-m-d H:i:s');
			$tmpUser = User::model()->findByAttributes(array('user_name'=>Yii::app()->user->name));
			$model->blog_user_id = $tmpUser->user_id;
			
			//这里去掉c++语言的 <的自动补全>
			Yii::log($model->blog_text,'info','app.BlogController');
			if($model->save())
			$this->redirect(array('view','id'=>$model->blog_id));
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Blog']))
		{
			$model->attributes=$_POST['Blog'];
			if($model->save())
			$this->redirect(array('view','id'=>$model->blog_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Blog');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Blog('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Blog']))
		$model->attributes=$_GET['Blog'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Blog::model()->findByPk($id);
		if($model===null)
		throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='blog-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function normalizeTags($attribute,$params){
		$this->tags=Tag::array2string(array_unique(Tag::string2array($this->tags)));
	}
	public static function string2array($tags)	{
		return preg_split('/\s*,\s*/', trim($tags),-1, PREG_SPLIT_NO_EMPTY);
	}
	public static function array2string($tags)	{
		return implode(',', $tags);
	}


	public static function fixCppCode($text)
	{
		$ret = "";
		return $ret;
	}

	//添加评论的action ,参数为blog的id
	public function actionComment($id)
	{
		$model=new Comment;
			
		if(isset($_POST['Comment']))
		{
			$model->attributes=$_POST['Comment'];
			$model->comment_status = 0;
			$model->comment_create_time = date('Y-m-d H:i:s');
			$model->comment_blog_id = $id;

			if(!$model->save())
			{
				echo CJSON::encode(array(
                    'status'=>'success', 
                    'div'=>'评论失败!',
				));
				exit;
			}


			if (Yii::app()->request->isAjaxRequest)
			{

				echo CJSON::encode(array(
                    'status'=>'success', 
                    'div'=>"评论添加成功,对话框在100毫秒后消失!"
                    ));
                    exit;
			}
			else
			$this->redirect(array('view','id'=>$this->id));
		}

		if (Yii::app()->request->isAjaxRequest)
		{
			echo CJSON::encode(array(
                'status'=>'failure', 
                'div'=>$this->renderPartial('comment_form', array('model'=>$model), true)));

			exit;
		}
		else
		{
			$this->render('commentcreate',array('model'=>$model));
		}
	}
}