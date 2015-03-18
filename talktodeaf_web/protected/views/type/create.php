<?php
/* @var $this TypeController */
/* @var $model Type */
?>

<?php
/* $this->breadcrumbs=array(
	'Types'=>array('index'),
	'Create',
); */

$this->menu=array(
	//array('label'=>'List Type', 'url'=>array('index')),
	array('label'=>'กลับสู่หน้าจัดการประเภทคำศัพท์', 'url'=>array('admin')),
);
?>

<h1>เพิ่มประเภทคำศัพท์</h1>

<?php
/* @var $this TypeController */
/* @var $model Type */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'type-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p>กรุณากรอกข้อมูลในช่องที่มีเครื่องหมาย( * )ให้ครบถ้วน</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'type_name',array('span'=>5,'maxlength'=>255)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
            'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
            'size'=>TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->