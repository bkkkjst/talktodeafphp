<?php
/* @var $this PlaceController */
/* @var $model Place */


/* $this->breadcrumbs=array(
	'Places'=>array('index'),
	'Manage',
); */

$this->menu=array(
	//array('label'=>'List Place', 'url'=>array('index')),
	array('label'=>'เพิ่มสถานที่', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#place-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>สถานที่ที่มีการสอนภาษามือ</h1>

<p>
    ท่านสามารถดูรายละเอียดสถานที่ รวมถึงสามารถแก้ไขและลบข้อมูลสถานที่ได้จากหน้านี้
</p>

<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'place-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
        array('name'=>'id',
            'htmlOptions'=>array('style'=>'width: 35px')),
		'place_name',
		'address',
		'phone',
		'latitude',
		'longitude',
		/*
		'create_time',
		'update_time',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>