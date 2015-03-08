<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */
?>

<?php
/* $this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
	$model->id,
); */

$this->menu=array(
	array('label'=>'List Vocabulary', 'url'=>array('index')),
	array('label'=>'Create Vocabulary', 'url'=>array('create')),
	array('label'=>'Update Vocabulary', 'url'=>array('update', 'id'=>$vocabulary->id)),
	array('label'=>'Delete Vocabulary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$vocabulary->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vocabulary', 'url'=>array('admin')),
);
?>

<h1>View Vocabulary #<?php echo $vocabulary->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$vocabulary,
    'attributes'=>array(
		//'id',
		'voc_name',
		'des_id',
		//'video_id',
		//'category_id',
		//'type_id',
		//'example_id',
		//'img_id',
		//'create_time',
		//'update_time',
	),
)); ?>