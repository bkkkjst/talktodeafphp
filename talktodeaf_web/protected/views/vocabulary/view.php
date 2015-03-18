<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */
?>

<?php
/*$this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
    $vocabulary->id,
);*/

$this->menu=array(
	//array('label'=>'List Vocabulary', 'url'=>array('index')),
	//array('label'=>'Create Vocabulary', 'url'=>array('create')),
	array('label'=>'แก้ไขคำศัพท์', 'url'=>array('update', 'id'=>$vocabulary->id)),
	array('label'=>'ลบคำศัพท์', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$vocabulary->id),'confirm'=>'ท่านแน่ใจหรือไม่ที่ต้องลบคำศัพท์คำนี้?')),
	array('label'=>'กลับสู่หน้าจัดการคำศัพท์', 'url'=>array('admin')),
);
?>

<h1>คำศัพท์คำที่ #<?php echo $vocabulary->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(

    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$vocabulary,
    'attributes'=>array(
		'id',
		'voc_name',
		'voc_engname',
		'description.des_name',
		'actionvideo.vid_name',
		'speakvideo.vid_name',
		'category.cat_name',
		'type.type_name',
		'example.exam',
		//'img_id',
		'create_time',
		'update_time',
	),
)); ?>