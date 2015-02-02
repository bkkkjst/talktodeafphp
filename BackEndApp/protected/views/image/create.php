<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Image', 'url'=>array('index')),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>

<h1>Create Image</h1>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'image-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array (
				'enctype' => 'multipart/form-data'
	)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'img_name'); ?>
		<?php echo $form->textField($model,'img_name',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'img_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_path'); ?>
		<?php echo $form->fileField($model,'img_path'); ?>
		<?php echo $form->error($model,'img_path'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->