<?php
/* @var $this CatalogController */
/* @var $model Catalog */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'catalog_id'); ?>
		<?php echo $form->textField($model,'catalog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catalog_father_id'); ?>
		<?php echo $form->textField($model,'catalog_father_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catalog_name'); ?>
		<?php echo $form->textField($model,'catalog_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catalog_title'); ?>
		<?php echo $form->textField($model,'catalog_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->