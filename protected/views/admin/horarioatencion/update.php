<?php
$this->breadcrumbs=array(
	'Horarioatencions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Horarioatencion', 'url'=>array('index')),
	array('label'=>'Create Horarioatencion', 'url'=>array('create')),
	array('label'=>'View Horarioatencion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Horarioatencion', 'url'=>array('admin')),
);
?>

<h1>Update Horarioatencion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>