<?php
/* @var $this CatalogController */
/* @var $data Catalog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('catalog_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->catalog_id), array('view', 'id'=>$data->catalog_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catalog_father_id')); ?>:</b>
	<?php echo CHtml::encode($data->catalog_father_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catalog_name')); ?>:</b>
	<?php echo CHtml::encode($data->catalog_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catalog_title')); ?>:</b>
	<?php echo CHtml::encode($data->catalog_title); ?>
	<br />


</div>