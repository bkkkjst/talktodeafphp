<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->id_img,
);

$this->menu=array(
	array('label'=>'List Image', 'url'=>array('index')),
	array('label'=>'Create Image', 'url'=>array('create')),
	array('label'=>'Update Image', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Image', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>

<h1>View Image #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'img_name',
				array(
		'name'=>'img_path',
		'type'=>'html',
		'value'=>($model->img_path)?CHtml::image(
				Yii::app()->request->baseUrl.'/images/'
				.$model->img_path,'',
				array('width'=>200,'height'=>150)):CHtml::image(
						Yii::app()->request->baseUrl.'/images/noimage.jpg'
						,'',array('width'=>200,'height'=>150)),),
		'img_datetime',
	),
)); ?>
