<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'voc_name',array('span'=>5,'maxlength'=>56)); ?>

                    <?php echo $form->textFieldControlGroup($model,'des_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'video_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'category_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'type_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'example_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'img_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'create_time',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'update_time',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->