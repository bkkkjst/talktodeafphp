<?php
/* @var $this BookController */
/* @var $model Book */
?>

<?php
/* $this->breadcrumbs=array(
	'Books'=>array('index'),
	'Create',
); */

$this->menu=array(
	//array('label'=>'List Book', 'url'=>array('index')),
	array('label'=>'กลับสู่หน้าจัดการหนังสือ', 'url'=>array('admin')),
);
?>

<h1>เพิ่มหนังสือ</h1>

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
    'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

    <p>กรุณากรอกข้อมูลในช่องที่มีเครื่องหมาย( * )ให้ครบถ้วน</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'book_name',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_description',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_page_number',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_price',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_author',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'book_publisher',array('span'=>5,'maxlength'=>255)); ?>

            <?php 	echo $form->labelEx($model, 'book_image');
					echo $form->fileField($model, 'book_image');
					echo $form->error($model, 'book_image'); 
					?>
            
			<?php echo $form->hiddenField($model, 'create_time'); ?>
			
        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
