<?php
/* @var $this ActionVideoController */
/* @var $model ActionVideo */
?>

<?php
$this->breadcrumbs=array(
	'Action Videos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ActionVideo', 'url'=>array('index')),
	array('label'=>'Create ActionVideo', 'url'=>array('create')),
	array('label'=>'View ActionVideo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ActionVideo', 'url'=>array('admin')),
);
?>

    <h1>Update ActionVideo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>