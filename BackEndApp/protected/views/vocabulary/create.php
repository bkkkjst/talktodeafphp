<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */

$this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vocabulary', 'url'=>array('index')),
	array('label'=>'Manage Vocabulary', 'url'=>array('admin')),
);
?>

<h1>Create Vocabulary</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>