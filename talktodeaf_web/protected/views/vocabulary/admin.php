<?php
/* @var $this VocabularyController */
/* @var $model Vocabulary */


/*$this->breadcrumbs=array(
	'Vocabularies'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'List Vocabulary', 'url'=>array('index')),
	array('label'=>'เพิ่มคำศัพท์', 'url'=>array('create')),
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

<h1>คำศัพท์</h1>

<p>
    ท่านสามารถดูรายละเอียดของคำศัพท์ รวมถึงสามารถแก้ไขข้อมูลและลบคำศัพท์ได้จากหน้านี้
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
            'htmlOptions'=>array('style'=>'width: 45px')),
        array('name'=>'voc_name',
            'htmlOptions'=>array('style'=>'width: 65px')),
        array('name'=>'voc_engname',
            'htmlOptions'=>array('style'=>'width: 140px')),
        array('name'=>'category.cat_name',
            'htmlOptions'=>array('style'=>'width: 80px')),
        array('name'=>'type.type_name',
            'htmlOptions'=>array('style'=>'width: 50px')),
        array('name'=>'description.des_name',
            'htmlOptions'=>array('style'=>'width: 200px')),
        array('name'=>'example.exam',
            'htmlOptions'=>array('style'=>'width: 200px')),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>