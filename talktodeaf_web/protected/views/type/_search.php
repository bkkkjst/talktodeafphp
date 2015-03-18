<?php
/* @var $this TypeController */
/* @var $model Type */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


                    <?php echo $form->textFieldControlGroup($model,'type_name',array('span'=>5,'maxlength'=>255));
                          echo TbHtml::submitButton('search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,))
                          ;?>


    <?php $this->endWidget(); ?>

</div><!-- search-form -->