<?php
/* @var $this ActionVideoController */
/* @var $model ActionVideo */
?>

<?php
$this->breadcrumbs=array(
	'Action Videos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ActionVideo', 'url'=>array('index')),
	array('label'=>'Create ActionVideo', 'url'=>array('create')),
	array('label'=>'Update ActionVideo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ActionVideo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ActionVideo', 'url'=>array('admin')),
);
?>

<h1>View ActionVideo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'vid_name',
	),
)); ?>