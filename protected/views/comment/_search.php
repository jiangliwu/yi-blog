<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'comment_id'); ?>
		<?php echo $form->textField($model,'comment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_status'); ?>
		<?php echo $form->textField($model,'comment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_create_time'); ?>
		<?php echo $form->textField($model,'comment_create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author'); ?>
		<?php echo $form->textField($model,'comment_author',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_email'); ?>
		<?php echo $form->textField($model,'comment_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_url'); ?>
		<?php echo $form->textField($model,'comment_url',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_blog_id'); ?>
		<?php echo $form->textField($model,'comment_blog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_text'); ?>
		<?php echo $form->textArea($model,'comment_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->