<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->comment_id), array('view', 'id'=>$data->comment_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_status')); ?>:</b>
	<?php echo CHtml::encode($data->comment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_create_time')); ?>:</b>
	<?php echo CHtml::encode($data->comment_create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_author')); ?>:</b>
	<?php echo CHtml::encode($data->comment_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_email')); ?>:</b>
	<?php echo CHtml::encode($data->comment_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_url')); ?>:</b>
	<?php echo CHtml::encode($data->comment_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_blog_id')); ?>:</b>
	<?php echo CHtml::encode($data->comment_blog_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_text')); ?>:</b>
	<?php echo CHtml::encode($data->comment_text); ?>
	<br />

	*/ ?>

</div>