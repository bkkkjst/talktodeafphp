<?php
/* @var $this ActionVideoController */
/* @var $data ActionVideo */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vid_name')); ?>:</b>
	<?php echo CHtml::encode($data->vid_name); ?>
	<br />


</div>