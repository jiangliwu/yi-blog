<?php
/* @var $this CatalogController */
/* @var $model Catalog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'catalog-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'catalog_father_id'); ?>
		<?php echo $form->textField($model,'catalog_father_id'); ?>
		<?php echo $form->error($model,'catalog_father_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catalog_name'); ?>
		<?php echo $form->textField($model,'catalog_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'catalog_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catalog_title'); ?>
		<?php echo $form->textField($model,'catalog_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'catalog_title'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->