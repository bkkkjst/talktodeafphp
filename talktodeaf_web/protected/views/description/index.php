<?php
/* @var $this DescriptionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Descriptions',
);

$this->menu=array(
	array('label'=>'Create Description','url'=>array('create')),
	array('label'=>'Manage Description','url'=>array('admin')),
);
?>

<h1>Descriptions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>