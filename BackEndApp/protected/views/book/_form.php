<?php
/* @var $this BookController */
/* @var $model Book */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'book-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'book_name'); ?>
		<?php echo $form->textField($model,'book_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'book_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_description'); ?>
		<?php echo $form->textField($model,'book_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'book_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_page_number'); ?>
		<?php echo $form->textField($model,'book_page_number'); ?>
		<?php echo $form->error($model,'book_page_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_price'); ?>
		<?php echo $form->textField($model,'book_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'book_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_author'); ?>
		<?php echo $form->textField($model,'book_author',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'book_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_publisher'); ?>
		<?php echo $form->textField($model,'book_publisher',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'book_publisher'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_image'); ?>
		<?php echo $form->textField($model,'book_image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'book_image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->