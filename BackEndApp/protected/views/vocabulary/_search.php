<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'voc_name'); ?>
		<?php echo $form->textField($model,'voc_name',array('size'=>56,'maxlength'=>56)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'voc_des'); ?>
		<?php echo $form->textField($model,'voc_des',array('size'=>60,'maxlength'=>402)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_id'); ?>
		<?php echo $form->textField($model,'video_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'example_id'); ?>
		<?php echo $form->textField($model,'example_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_id'); ?>
		<?php echo $form->textField($model,'image_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->