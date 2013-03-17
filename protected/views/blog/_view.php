<?php
/* @var $this BlogController */
/* @var $data Blog */
?>

<div class="view">

	<h1> <a href="<?php echo Yii::app()->createUrl("blog/view", array('id'=>$data->blog_id))?>">
	<?php echo $data->blog_title; ?>
	</a></h1> <b>时间:</b> <?php echo $data->blog_create_time?>
	<br>
	<br>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('blog_text')); ?>:</b>
	<?php //echo CHtml::encode($data->blog_text); 
	echo $data->blog_text;
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blog_length')); ?>:</b>
	<?php echo CHtml::encode($data->blog_length); ?>
	<br />
	
	<b>评论条数 :</b>
	<?php $commentDate = Comment::model()->findAllByAttributes(array('comment_blog_id'=>$data->blog_id));
		echo count($commentDate);
	?>
</div>