<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */


/*$this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'List Vocabulary', 'url'=>array('index')),
	array('label'=>'Create Vocabulary', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vocabulary-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vocabularies</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>


<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'vocabulary-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
        array('name'=>'id',
            'htmlOptions'=>array('style'=>'width: 30px')),
        array('name'=>'voc_name',
            'htmlOptions'=>array('style'=>'width: 70px')),
        array('name'=>'voc_engname',
            'htmlOptions'=>array('style'=>'width: 70px')),
        array('name'=>'category.cat_name',
            'htmlOptions'=>array('style'=>'width: 50px')),
        array('name'=>'type.type_name',
            'htmlOptions'=>array('style'=>'width: 50px')),
        array('name'=>'description.des_name',
            'htmlOptions'=>array('style'=>'width: 250px')),
        array('name'=>'example.exam',
            'htmlOptions'=>array('style'=>'width: 250px')),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>