<?php
/* @var $this SpeakVideoController */
/* @var $model SpeakVideo */
?>

<?php
$this->breadcrumbs=array(
	'Speak Videos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SpeakVideo', 'url'=>array('index')),
	array('label'=>'Create SpeakVideo', 'url'=>array('create')),
	array('label'=>'Update SpeakVideo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SpeakVideo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpeakVideo', 'url'=>array('admin')),
);
?>

<h1>View SpeakVideo #<?php echo $model->id; ?></h1>

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