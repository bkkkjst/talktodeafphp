<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */

$this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vocabulary', 'url'=>array('index')),
	array('label'=>'Create Vocabulary', 'url'=>array('create')),
	array('label'=>'View Vocabulary', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vocabulary', 'url'=>array('admin')),
);
?>

<h1>Update Vocabulary <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>