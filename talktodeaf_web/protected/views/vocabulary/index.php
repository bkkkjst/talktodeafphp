<?php
/* @var $this VocabularyController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
/* $this->breadcrumbs=array(
	'Vocabularies',
); */

$this->menu=array(
	array('label'=>'Create Vocabulary','url'=>array('create')),
	array('label'=>'Manage Vocabulary','url'=>array('admin')),
);
?>

<h1>Vocabularies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>