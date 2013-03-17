<?php
/* @var $this BlogController */
/* @var $model Blog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blog-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'blog_title'); ?>
		<?php echo $form->textField($model,'blog_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'blog_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blog_text'); ?>
		<?php
		$this->widget('application.extensions.editMe.widgets.ExtEditMe',array(
		'model'     =>  $model,
		'attribute' => 'blog_text',//属性的名字
		'height'    =>  '400',//高度
		'width'     =>  '100%',//宽度
	
		'toolbar'  => array(
        array(
                'Source','insertcode','-', 'Save', 'NewPage', 'DocProps', 'Preview', 'Print', '-', 'Templates',
        ),
        array(
                'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo',
        ),
        array(
                'Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt'
        ),
       
        '/',
        array(
                'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat',
        ),
        array(
                'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'BidiLtr', 'BidiRtl',
        ),
        array(
                'Link', 'Unlink', 'Anchor',
        ),
        array(
                'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe'
        ),
        '/',
        array(
                'Styles', 'Format', 'Font', 'FontSize',
        ),
        array(
                'TextColor', 'BGColor',
        ),
        array(
                'Maximize', 'ShowBlocks', '-', 'About',
        ),)
		)); 
?>
		<?php echo $form->error($model,'blog_text'); ?>
	</div>
	
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'catalog_id'); ?>
		<?php echo $form->textField($model,'catalog_id'); ?>
		<?php echo $form->error($model,'catalog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags -- 多个tag用逗号分开'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->