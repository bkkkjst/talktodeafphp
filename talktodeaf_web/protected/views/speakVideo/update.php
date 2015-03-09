<?php
/* @var $this SpeakVideoController */
/* @var $model SpeakVideo */
?>

<?php
$this->breadcrumbs=array(
	'Speak Videos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpeakVideo', 'url'=>array('index')),
	array('label'=>'Create SpeakVideo', 'url'=>array('create')),
	array('label'=>'View SpeakVideo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SpeakVideo', 'url'=>array('admin')),
);
?>

    <h1>Update SpeakVideo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>