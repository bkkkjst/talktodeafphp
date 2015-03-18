<?php
/* @var $this PlaceController */
/* @var $model Place */
?>

<?php
/* $this->breadcrumbs=array(
	'Places'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
); */

$this->menu=array(
	//array('label'=>'List Place', 'url'=>array('index')),
	//array('label'=>'Create Place', 'url'=>array('create')),
	//array('label'=>'View Place', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'ลบสถานที่', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'ท่านแน่ใจหรือไม่ที่ต้องลบหนังสือเล่มนี้?')),
	array('label'=>'กลับสู่หน้าจัดการสถานที่', 'url'=>array('admin')),
);
?>

    <h1>แก้ไขข้อมูลสถานที่ ที่#<?php echo $model->id; ?></h1>

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

            <?php echo $form->hiddenField($model, 'update_time'); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->