<?php
/* @var $this ActionVideoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Action Videos',
);

$this->menu=array(
	array('label'=>'Create ActionVideo','url'=>array('create')),
	array('label'=>'Manage ActionVideo','url'=>array('admin')),
);
?>

<h1>Action Videos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>