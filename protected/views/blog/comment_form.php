<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'你的昵称'); ?>
		<?php echo $form->textField($model,'comment_author',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'你的email'); ?>
		<?php echo $form->textField($model,'comment_email',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'个人主页'); ?>
		<?php echo $form->textField($model,'comment_url',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment_url'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'评论内容'); ?>
		<?php echo $form->textArea($model,'comment_text',array('rows'=>5, 'cols'=>30)); ?>
		<?php echo $form->error($model,'comment_text'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->