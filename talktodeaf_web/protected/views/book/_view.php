<?php
/* @var $this BookController */
/* @var $data Book */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_name')); ?>:</b>
	<?php echo CHtml::encode($data->book_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_description')); ?>:</b>
	<?php echo CHtml::encode($data->book_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_page_number')); ?>:</b>
	<?php echo CHtml::encode($data->book_page_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_price')); ?>:</b>
	<?php echo CHtml::encode($data->book_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_author')); ?>:</b>
	<?php echo CHtml::encode($data->book_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_publisher')); ?>:</b>
	<?php echo CHtml::encode($data->book_publisher); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('book_image')); ?>:</b>
	<?php echo CHtml::encode($data->book_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>