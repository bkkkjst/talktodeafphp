<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Image', 'url'=>array('index')),
	array('label'=>'Create Image', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#image-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Images</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'image-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'img_name',
		array(
              'type' => 'raw',
              'value' => 'CHtml::image(Yii::app()->baseUrl . "/images/" . $data->img_path)',
			  //'value'=>html_entity_decode(CHtml::image($model->fileUrl,'alt',array('width'=>341,'height'=>232))),
			  'htmlOptions'=>array('width'=>'100','height'=>'100'),
			  //array("width"=>"150px","height"=>"150px")
		),
		'img_datetime',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
