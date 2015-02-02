<?php
/* @var $this VocabularyController */
/* @var $data Vocabulary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voc_name')); ?>:</b>
	<?php echo CHtml::encode($data->voc_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voc_des')); ?>:</b>
	<?php echo CHtml::encode($data->voc_des); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_id')); ?>:</b>
	<?php echo CHtml::encode($data->video_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('example_id')); ?>:</b>
	<?php echo CHtml::encode($data->example_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('image_id')); ?>:</b>
	<?php echo CHtml::encode($data->image_id); ?>
	<br />

	*/ ?>

</div>