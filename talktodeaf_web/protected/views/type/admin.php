<?php
/* @var $this TypeController */
/* @var $model Type */


/* $this->breadcrumbs=array(
	'Types'=>array('index'),
	'Manage',
); */

$this->menu=array(
	//array('label'=>'List Type', 'url'=>array('index')),
	array('label'=>'เพิ่มประเภทคำศัพท์', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>ประเภทคำศัพท์</h1>

<p>
    ท่านสามารถดูรายละเอียดประเภทคำศัพท์ รวมถึงสามารถแก้ไขข้อมูลและลบประเภทคำศัพท์ได้จากหน้านี้
</p>

<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'type-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'type_name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>