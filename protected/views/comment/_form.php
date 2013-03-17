<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_id'); ?>
		<?php echo $form->textField($model,'comment_id'); ?>
		<?php echo $form->error($model,'comment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_status'); ?>
		<?php echo $form->textField($model,'comment_status'); ?>
		<?php echo $form->error($model,'comment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_create_time'); ?>
		<?php echo $form->textField($model,'comment_create_time'); ?>
		<?php echo $form->error($model,'comment_create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_author'); ?>
		<?php echo $form->textField($model,'comment_author',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'comment_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_email'); ?>
		<?php echo $form->textField($model,'comment_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'comment_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_url'); ?>
		<?php echo $form->textField($model,'comment_url',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'comment_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_blog_id'); ?>
		<?php echo $form->textField($model,'comment_blog_id'); ?>
		<?php echo $form->error($model,'comment_blog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_text'); ?>
		<?php echo $form->textArea($model,'comment_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment_text'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->