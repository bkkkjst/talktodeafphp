<?php
/* @var $this BookController */
/* @var $model Book */


/* $this->breadcrumbs=array(
	'Books'=>array('index'),
	'Manage',
); */

$this->menu=array(
	//array('label'=>'List Book', 'url'=>array('index')),
	array('label'=>'เพิ่มหนังสือ', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#book-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>หนังสือที่เกี่ยวกับภาษามือ</h1>

<p>
    ท่านสามารถดูรายละเอียดหนังสือ รวมถึงสามารถแก้ไขและลบข้อมูลหนังสือได้จากหน้านี้
</p>


<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'book-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'book_name',
		'book_description',
		'book_page_number',
		'book_price',
		'book_author',
		/*
		'book_publisher',
		'book_image',
		'create_time',
		'update_time',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>