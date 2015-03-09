<?php
/* @var $this ActionVideoController */
/* @var $model ActionVideo */
?>

<?php
$this->breadcrumbs=array(
	'Action Videos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ActionVideo', 'url'=>array('index')),
	array('label'=>'Manage ActionVideo', 'url'=>array('admin')),
);
?>

<h1>Create ActionVideo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>