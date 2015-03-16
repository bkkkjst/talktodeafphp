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
	//array('label'=>'List Vocabulary', 'url'=>array('index')),
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
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>
    
	<?php echo $form->errorSummary($description); ?>
	
    <?php echo $form->errorSummary($vocabulary); ?>
    
    <?php echo $form->errorSummary($example); ?>
    
    <?php echo $form->errorSummary($actionvideo); ?>
    
    <?php echo $form->errorSummary($speakvideo); ?>
	
            <?php echo $form->textFieldControlGroup($vocabulary,'voc_name',array('span'=>5,'maxlength'=>56)); ?>

            <?php echo $form->textFieldControlGroup($vocabulary,'voc_engname',array('span'=>5)); ?>

            <?php echo $form->textAreaControlGroup($description,'des_name',array('span'=>5)); ?>

            
            
            
    <?php echo $form->labelEx($vocabulary,'category_id'); ?>
    
    <?php echo $form->dropdownList($vocabulary,'category_id', 
    		CHtml::listData(Category::model()->findAll(),'id','cat_name'), 
    		array('prompt'=>'กรุณาเลือกหมวด')); ?>
    <?php echo $form->error($vocabulary,'category.cat_name'); ?>
    
    
    <?php echo $form->labelEx($vocabulary,'type_id'); ?>
             <?php echo $form->dropdownList($vocabulary,'type_id', 
    		CHtml::listData(Type::model()->findAll(),'id','type_name'), 
    		array('prompt'=>'กรุณาเลือกประเภท')); ?>
    <?php echo $form->error($vocabulary,'type.type_name'); ?>
		
			
            <?php echo $form->textAreaControlGroup($example,'exam',array('span'=>5)); ?>
            
            <?php 	echo $form->labelEx($actionvideo, 'vid_name');
					echo $form->fileField($actionvideo, 'vid_name');
					echo $form->error($actionvideo, 'vid_name'); 
					?>
					
			<?php 	
					echo $form->labelEx($speakvideo, 'vid_name');
					echo $form->fileField($speakvideo, 'vid_name');
					echo $form->error($speakvideo, 'vid_name');  
					?>
					

        <div class="form-actions">
        <?php  echo TbHtml::submitButton($vocabulary->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->