<?php
/* @var $this SpeakVideoController */
/* @var $model SpeakVideo */
?>

<?php
$this->breadcrumbs=array(
	'Speak Videos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpeakVideo', 'url'=>array('index')),
	array('label'=>'Manage SpeakVideo', 'url'=>array('admin')),
);
?>

<h1>Create SpeakVideo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>