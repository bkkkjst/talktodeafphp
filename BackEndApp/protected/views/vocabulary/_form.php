<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vocabulary-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'voc_name'); ?>
		<?php echo $form->textField($model,'voc_name',array('size'=>56,'maxlength'=>56)); ?>
		<?php echo $form->error($model,'voc_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'voc_des'); ?>
		<?php echo $form->textField($model,'voc_des',array('size'=>60,'maxlength'=>402)); ?>
		<?php echo $form->error($model,'voc_des'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_id'); ?>
		<?php echo $form->textField($model,'video_id'); ?>
		<?php echo $form->error($model,'video_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'example_id'); ?>
		<?php echo $form->textField($model,'example_id'); ?>
		<?php echo $form->error($model,'example_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_id'); ?>
		<?php echo $form->textField($model,'image_id'); ?>
		<?php echo $form->error($model,'image_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->