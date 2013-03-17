<?php
/* @var $this BlogController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	'标签 : '.$name
);

foreach( $model as $key)
{
	$blogModel = Blog::model()->findByPk($key->blog_id);
	echo "<a href=\"".Yii::app()->createUrl("blog/view", array('id'=>$blogModel->blog_id))."\"><h1>$blogModel->blog_title</h1></a>";
}
?>
