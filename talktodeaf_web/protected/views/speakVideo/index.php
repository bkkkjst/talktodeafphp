<?php
/* @var $this SpeakVideoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Speak Videos',
);

$this->menu=array(
	array('label'=>'Create SpeakVideo','url'=>array('create')),
	array('label'=>'Manage SpeakVideo','url'=>array('admin')),
);
?>

<h1>Speak Videos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>