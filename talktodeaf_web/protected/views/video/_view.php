<?php
/* @var $this VideoController */
/* @var $data Video */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vid_name')); ?>:</b>
	<?php echo CHtml::encode($data->vid_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vid_path')); ?>:</b>
	<?php echo CHtml::encode($data->vid_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />


</div>