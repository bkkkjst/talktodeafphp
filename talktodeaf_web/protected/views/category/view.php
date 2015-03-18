<?php
/* @var $this CategoryController */
/* @var $model Category */
?>

<?php
/* $this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->id,
); */

$this->menu=array(
	//array('label'=>'List Category', 'url'=>array('index')),
	//array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'แก้ไขหมวดคำศัพท์', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'ลบหมวดคำศัพท์', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'ท่านแน่ใจหรือไม่ที่ต้องการลบหมวดของคำศัพท์นี้?')),
	array('label'=>'กลับสู่หน้าจัดการหมวดคำศัพท์', 'url'=>array('admin')),
);
?>

<h1>หมวดคำศัพท์ที่ #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'cat_name',
		'img_id',
	),
)); ?>