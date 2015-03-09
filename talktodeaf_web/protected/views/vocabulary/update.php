<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */
?>

<?php
$this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vocabulary', 'url'=>array('index')),
	array('label'=>'Create Vocabulary', 'url'=>array('create')),
	array('label'=>'View Vocabulary', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vocabulary', 'url'=>array('admin')),
);
?>

    <h1>Update Vocabulary <?php echo $model->id; ?></h1>

<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'vocabulary-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'voc_name',array('span'=>5,'maxlength'=>56)); ?>

            <?php echo $form->textFieldControlGroup($model,'voc_engname',array('span'=>5,'maxlength'=>56)); ?>

            <?php echo $form->textFieldControlGroup($model,'des_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'action_video_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'speak_video_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'category_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'type_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'example_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'img_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'create_time',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'update_time',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->