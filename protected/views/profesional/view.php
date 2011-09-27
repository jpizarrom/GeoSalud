<?php
$this->breadcrumbs=array(
	'Profesionals'=>array('index'),
	$model->Nombre,
);

$this->menu=array(
//	array('label'=>'List Profesional', 'url'=>array('index')),
//	array('label'=>'Create Profesional', 'url'=>array('create')),
//	array('label'=>'Update Profesional', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Profesional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Profesional', 'url'=>array('admin')),
);
?>

<h1>View Profesional #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'cssFile' => Yii::app()->baseUrl . '/css/detailview/styles.css',
	'attributes'=>array(
		'id',
		'Nombre',
	),
)); ?>
