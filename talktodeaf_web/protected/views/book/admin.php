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
        array('name'=>'id',
            'htmlOptions'=>array('style'=>'width: 35px')),
        array('name'=>'book_name',
            'htmlOptions'=>array('style'=>'width: 100px')),
        array('name'=>'book_description',
            'htmlOptions'=>array('style'=>'width: 400px')),
        array('name'=>'book_page_number',
            'htmlOptions'=>array('style'=>'width: 80px')),
        array('name'=>'book_price',
            'htmlOptions'=>array('style'=>'width: 95px')),
        array('name'=>'book_author',
            'htmlOptions'=>array('style'=>'width: 85px')),
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