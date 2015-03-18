<?php
/* @var $this PlaceController */
/* @var $model Place */
?>

<?php
$this->breadcrumbs=array(
	'Places'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Place', 'url'=>array('index')),
	//array('label'=>'Create Place', 'url'=>array('create')),
	array('label'=>'แก้ไขข้อมูลสถานที่', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'ลบสถานที่', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'ท่านแน่ใจหรือไม่ที่ต้องลบสถานที่นี้?')),
	array('label'=>'กลับสู่หน้าจัดการสถานที่', 'url'=>array('admin')),
);
?>

<h1>ดูข้อมูลสถานที่ ที่#<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'place_name',
		'address',
		'phone',
		'latitude',
		'longitude',
		'create_time',
		'update_time',
	),
)); ?>