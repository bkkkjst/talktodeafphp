<?php
/* @var $this TypeController */
/* @var $model Type */
?>

<?php
/* $this->breadcrumbs=array(
	'Types'=>array('index'),
	$model->id,
); */

$this->menu=array(
	//array('label'=>'List Type', 'url'=>array('index')),
	//array('label'=>'Create Type', 'url'=>array('create')),
	array('label'=>'แก้ไขประเภทคำศัพท์', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'ลบประเภทคำศัพท์', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'ท่านแน่ใจหรือไม่ที่ต้องลบประเภทคำศัพท์นี้?')),
	array('label'=>'กลับสู่หน้าจัดการประเภทคำศัพท์', 'url'=>array('admin')),
);
?>

<h1>ประเภทคำศัพท์ที่ #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'type_name',
	),
)); ?>