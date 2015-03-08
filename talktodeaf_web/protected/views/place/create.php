<?php
/* @var $this PlaceController */
/* @var $model Place */
?>

<?php
/* $this->breadcrumbs=array(
	'Places'=>array('index'),
	'Create',
); */

$this->menu=array(
	array('label'=>'List Place', 'url'=>array('index')),
	array('label'=>'Manage Place', 'url'=>array('admin')),
); 
?>

<h1>สร้าง ข้อมูลสถานที่</h1>

<?php
/* @var $this PlaceController */
/* @var $model Place */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'place-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'place_name',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'address',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'phone',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'latitude',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'longitude',array('span'=>5)); ?>

			<?php echo $form->hiddenField($model, 'create_time'); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->