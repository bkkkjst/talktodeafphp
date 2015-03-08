<?php
/* @var $this DescriptionController */
/* @var $data Description */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_name')); ?>:</b>
	<?php echo CHtml::encode($data->des_name); ?>
	<br />


</div>