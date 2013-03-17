<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_password')); ?>:</b>
	<?php echo CHtml::encode($data->user_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_mail')); ?>:</b>
	<?php echo CHtml::encode($data->user_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_nickname')); ?>:</b>
	<?php echo CHtml::encode($data->user_nickname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_motto')); ?>:</b>
	<?php echo CHtml::encode($data->user_motto); ?>
	<br />


</div>