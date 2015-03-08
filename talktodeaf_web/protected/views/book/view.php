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
	array('label'=>'List Book', 'url'=>array('index')),
	array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'Update Book', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Book', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);
?>

<h1>View Book #<?php echo $model->id; ?></h1>

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