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
		<?php Yii::app() -> clientScript -> registerScriptFile(Yii::app()->request->baseUrl.'/assets/ckeditor/ckeditor.js');?>
		<?php Yii::app() -> clientScript -> registerScriptFile(Yii::app()->request->baseUrl.'/assets/ckfinder/ckfinder.js');?>
		<textarea name="Blog[blog_text]" id="blog_text"><?php echo $model->blog_text?></textarea>
		<script type="text/javascript">	CKEDITOR.replace( 'blog_text' ); </script>
		<?php echo $form->error($model,'blog_text'); ?>
	</div>
	
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'catalog_id'); ?>
		<?php echo $form->textField($model,'catalog_id'); ?>
		<?php echo $form->error($model,'catalog_id'); ?>
	</div>
	
	<script type="text/javascript">
	function addTags(event,obj)
	{
		 if (window.event)
             window.event.returnValue = false;
         else
        	 event.preventDefault();
         
		var str = obj.innerHTML;
		var input = document.getElementById('tag-input');
		input.value += str +',';
	}
	</script>
	
	
	<b>标签 :</b>
	<?php
	//这里显示出所有tag
	//点击tag之后，自动添加到输入框 
	$tags = Tag::model()->findAll();
	foreach ($tags as $key)
	{?>
	<b><a href="#" onclick="addTags(event,this)"><?php echo $key->tag_text?></a></b>
	<?php echo " | "?>
	<?php }?>
	
	
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'tags -- 多个tag用逗号分开'); ?>
		<input type="text" name="Blog[tags]" id="tag-input" style="width:600px;"> 
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->