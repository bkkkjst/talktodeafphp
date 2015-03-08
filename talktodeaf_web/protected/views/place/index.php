<?php
/* @var $this PlaceController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Places',
);

$this->menu=array(
	array('label'=>'Create Place','url'=>array('create')),
	array('label'=>'Manage Place','url'=>array('admin')),
);
?>

<h1>Places</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>