<?php
/* @var $this BlogController */
/* @var $model Blog */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'blog_id'); ?>
		<?php echo $form->textField($model,'blog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_title'); ?>
		<?php echo $form->textField($model,'blog_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_text'); ?>
		<?php echo $form->textArea($model,'blog_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_create_time'); ?>
		<?php echo $form->textField($model,'blog_create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_modify_time'); ?>
		<?php echo $form->textField($model,'blog_modify_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_user_id'); ?>
		<?php echo $form->textField($model,'blog_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_length'); ?>
		<?php echo $form->textField($model,'blog_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_type'); ?>
		<?php echo $form->textField($model,'blog_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catalog_id'); ?>
		<?php echo $form->textField($model,'catalog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tags'); ?>
		<?php echo $form->textArea($model,'tags',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->