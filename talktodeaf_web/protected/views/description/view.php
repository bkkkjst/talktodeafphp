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
	array('label'=>'Update Vocabulary', 'url'=>array('update', 'id'=>$description->id)),
	array('label'=>'Delete Vocabulary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$description->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vocabulary', 'url'=>array('admin')),
);
?>

<h1>View Vocabulary #<?php echo $description->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$description,
    'attributes'=>array(
		//'id',
		'vocabularys.voc_name',
		'vocabularys.des_id',
		//'vocabularys.video_id',
		//'vocabularys.category_id',
		//'vocabularys.type_id',
		//'vocabularys.example_id',
		//'vocabularys.img_id',
		//'vocabularys.create_time',
		//'vocabularys.update_time',
	),
)); ?>