<?php
$this->breadcrumbs=array(
	'Lugaratencions'=>array('index'),
	$model->lugarid=>array('view','id'=>$model->lugarid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lugaratencion', 'url'=>array('index')),
	array('label'=>'Create Lugaratencion', 'url'=>array('create')),
	array('label'=>'View Lugaratencion', 'url'=>array('view', 'id'=>$model->lugarid)),
	array('label'=>'Manage Lugaratencion', 'url'=>array('admin')),
);
?>

<h1>Update Lugaratencion <?php echo $model->lugarid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>