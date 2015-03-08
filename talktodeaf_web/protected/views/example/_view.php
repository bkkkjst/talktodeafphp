<?php
/* @var $this ExampleController */
/* @var $data Example */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exam')); ?>:</b>
	<?php echo CHtml::encode($data->exam); ?>
	<br />


</div>