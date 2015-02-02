<?php
/* @var $this VideoController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'vid_name'); ?>
		<?php echo $form->textField($model,'vid_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'vid_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vid_path'); ?>
		<?php echo $form->textField($model,'vid_path',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'vid_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vid_datetime'); ?>
		<?php echo $form->textField($model,'vid_datetime'); ?>
		<?php echo $form->error($model,'vid_datetime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->