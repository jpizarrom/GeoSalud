<?php
$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	$model->especialidadid=>array('view','id'=>$model->especialidadid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Especialidad', 'url'=>array('index')),
	array('label'=>'Create Especialidad', 'url'=>array('create')),
	array('label'=>'View Especialidad', 'url'=>array('view', 'id'=>$model->especialidadid)),
	array('label'=>'Manage Especialidad', 'url'=>array('admin')),
);
?>

<h1>Update Especialidad <?php echo $model->especialidadid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>