<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */
?>

<?php
/* $this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
	'Create',
); */

$this->menu=array(
	array('label'=>'List Vocabulary', 'url'=>array('index')),
	array('label'=>'Manage Vocabulary', 'url'=>array('admin')),
);
?>

<h1>สร้าง คำศัพท์</h1>

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
    
	<?php echo $form->errorSummary($description); ?>
	
    <?php echo $form->errorSummary($vocabulary); ?>
    
	
            <?php echo $form->textFieldControlGroup($vocabulary,'voc_name',array('span'=>5,'maxlength'=>56)); ?>

            <?php echo $form->textAreaControlGroup($description,'des_name',array('span'=>5)); ?>

            <?php //echo $form->textFieldControlGroup($vocabulary,'video_id',array('span'=>5)); ?>
            
            
            
            <p>หมวด</p>
            <?php 
            		$records = Category::model()->findAll();
    			  	$list = CHtml::listData($records, 'id', 'cat_name');
    			  //echo CHtml::dropDownList('$vocabulary','category_id', $list, array('empty' => '(กรุณาเลือกหมวดของคำ)')); ?><BR>
			<p>ประเภท</p>
    		<?php 
            	$records = Type::model()->findAll();
    			  $list = CHtml::listData($records, 'id', 'type_name');
    			  //echo CHtml::dropDownList('$vocabulary','type_id', $list, array('empty' => '(กรุณาเลือกประเภทของคำ)')); ?>
    			  
		
			
            <?php //echo $form->textAreaControlGroup($vocabulary,'example_id',array('span'=>5)); ?>
            
			<?php //echo $form->hiddenField($vocabulary, 'create_time'); ?>
			
            <?php //echo $form->textFieldControlGroup($model,'img_id',array('span'=>5)); ?>

            <?php //echo $form->textFieldControlGroup($model,'create_time',array('span'=>5)); ?>

            <?php //echo $form->textFieldControlGroup($model,'update_time',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($vocabulary->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->