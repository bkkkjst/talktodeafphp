<?php
/* @var $this BookController */
/* @var $model Book */
?>

<?php
/* $this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
); */

$this->menu=array(
	array('label'=>'List Book', 'url'=>array('index')),
	array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'View Book', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);
?>

    <h1>อัพเดท หนังสือ <?php echo $model->id; ?></h1>

<?php
/* @var $this BookController */
/* @var $model Book */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'book-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'book_name',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_description',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_page_number',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_price',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_author',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_publisher',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_image',array('span'=>5,'maxlength'=>255)); ?>
            
			<?php echo $form->hiddenField($model, 'update_time'); ?>
			
        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
    