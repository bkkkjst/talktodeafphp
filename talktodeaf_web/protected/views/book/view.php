<?php
/* @var $this BookController */
/* @var $model Book */
?>

<?php
/* $this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->id,
); */

$this->menu=array(
	//array('label'=>'List Book', 'url'=>array('index')),
	//array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'แก้ไขข้อมูลหนังสือ', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'ลบหนังสือ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'ท่านแน่ใจหรือไม่ที่ต้องลบหนังสือเล่มนี้?')),
	array('label'=>'กลับสู่หน้าจัดการหนังสือ', 'url'=>array('admin')),
);
?>

<h1>รายละเอียดหนังสือเล่มที่ #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'book_name',
		'book_description',
		'book_page_number',
		'book_price',
		'book_author',
		'book_publisher',
		'book_image',
		'create_time',
		'update_time',
	),
)); ?>