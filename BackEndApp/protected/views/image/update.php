<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Image', 'url'=>array('index')),
	array('label'=>'Create Image', 'url'=>array('create')),
	array('label'=>'View Image', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>

<h1>Update Image <?php echo $model->id; ?></h1>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'image-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
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
		<?php echo $form->fileField($model,'img_path',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'img_path'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->