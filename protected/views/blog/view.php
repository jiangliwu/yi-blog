<?php
/* @var $this BlogController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	$model->blog_title,
);

$this->menu=array(
array('label'=>'List Blog', 'url'=>array('index')),
array('label'=>'Create Blog', 'url'=>array('create')),
array('label'=>'Update Blog', 'url'=>array('update', 'id'=>$model->blog_id)),
array('label'=>'Delete Blog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->blog_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<h1><a
	href="<?php echo Yii::app()->createUrl("blog/view",array('id'=>$model->blog_id));?>">
<?php echo $model->blog_title;?></a></h1>

<div><b>作者 :</b><?php 
$tmpUser = User::model()->findByAttributes(array('user_id'=>$model->blog_user_id));
echo $tmpUser->user_nickname;
?> <b>创作时间 :</b> <?php echo $model->blog_create_time?> <br>
<br>

<?php echo $model->blog_text?></div>



<br>
<br>
<div><b>评论:</b> <br>
<?php

$commentDate = Comment::model()->findAllByAttributes(array('comment_blog_id'=>$model->blog_id));
foreach ($commentDate as $key) {
	?>
	<b>用户昵称 :</b> <?php echo $key->comment_author?> 
	<b>时间 ： </b> 
	<?php echo $key->comment_create_time?>
	<br>
	<?php echo $key->comment_text?>
	<br>
	<br>
	<?php 
}

?></div>


<!-- dialog start-->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
	    'id'=>'commentDialog',
	    'options'=>array(
	        'title'=>'评论',
	        'autoOpen'=>false,
	        'modal'=>true,
	        'width'=>400,
	        'height'=>450,
			'id'=>$model->blog_id,
),
));?>
<div class="divForForm"></div>

<?php $this->endWidget();?>


<!--  dialog end-->


<!-- add problem js	 -->
<div class="info"></div>
<script type="text/javascript">
// here is the magic

function addComment()
{
    <?php echo CHtml::ajax(array(
            'url'=>array('blog/comment&id='.$model->blog_id),  //这里将blog的id传过去
            'data'=> "js:$(this).serialize()",			
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#commentDialog div.divForForm').html(data.div);
                          // Here is the trick: on submit-> once again this function!
                    $('#commentDialog div.divForForm form').submit(addComment);
                }
                else
                {
                    $('#commentDialog div.divForForm').html(data.div);
                    setTimeout(\"$('#commentDialog').dialog('close') \",1000);
                }
            } ",
            ))
            ?>;
    return false; 
}

</script>
<!--  -->

            <?php echo CHtml::link('留下你的评论', "",  // the link for open the dialog
            array(
        'style'=>'cursor: pointer; text-decoration: underline;',
        'onclick'=>"{ addComment();$('#commentDialog').dialog('open');}" ));?>