<?php
$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Especialidad', 'url'=>array('index')),
	array('label'=>'Manage Especialidad', 'url'=>array('admin')),
);
?>

<h1>Create Especialidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>