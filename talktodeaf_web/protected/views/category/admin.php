<?php
/* @var $this CategoryController */
/* @var $model Category */


/* $this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Manage',
); */

$this->menu=array(
	//array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'เพิ่มหมวดคำศัพท์', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>หมวดของคำศัพท์</h1>

<p>
    ท่านสามารถดูรายละเอียดหมวดของคำศัพท์ รวมถึงสามารถแก้ไขข้อมูลหมวดของคำศัพท์ได้จากหน้านี้
</p>

<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
        'id',
		'cat_name',
		//'img_id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>