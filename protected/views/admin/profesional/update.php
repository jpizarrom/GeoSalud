<?php
$this->breadcrumbs=array(
	'Profesionals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profesional', 'url'=>array('index')),
	array('label'=>'Create Profesional', 'url'=>array('create')),
	array('label'=>'View Profesional', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Profesional', 'url'=>array('admin')),
);
?>

<h1>Update Profesional <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>