<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */

$this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Vocabulary', 'url'=>array('index')),
	array('label'=>'Create Vocabulary', 'url'=>array('create')),
	array('label'=>'Update Vocabulary', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vocabulary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vocabulary', 'url'=>array('admin')),
);
?>

<h1>View Vocabulary #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'voc_name',
		'voc_des',
		'video_id',
		'category_id',
		'type_id',
		'example_id',
		'image_id',
	),
)); ?>
