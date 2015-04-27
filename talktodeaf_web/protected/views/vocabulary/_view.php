<?php
/* @var $this VocabularyController */
/* @var $data Vocabulary */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voc_name')); ?>:</b>
	<?php echo CHtml::encode($data->voc_name); ?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('voc_engname')); */?><!--:</b>
	--><?php /*echo CHtml::encode($data->voc_engname); */?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_id')); ?>:</b>
	<?php echo CHtml::encode($data->des_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action_video_id')); ?>:</b>
	<?php echo CHtml::encode($data->action_video_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('speak_video_id')); ?>:</b>
	<?php echo CHtml::encode($data->speak_video_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('example_id')); ?>:</b>
	<?php echo CHtml::encode($data->example_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_id')); ?>:</b>
	<?php echo CHtml::encode($data->img_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>