<?php
$this->breadcrumbs=array(
	'Facilidadpagos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facilidadpago', 'url'=>array('index')),
	array('label'=>'Create Facilidadpago', 'url'=>array('create')),
	array('label'=>'View Facilidadpago', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Facilidadpago', 'url'=>array('admin')),
);
?>

<h1>Update Facilidadpago <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>