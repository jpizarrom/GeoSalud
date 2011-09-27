<?php
$this->breadcrumbs=array(
	'Profesional Especialidad'=>array('index'),
	'Create',
);?>
<?php
$this->menu=array(
	array('label'=>'List Profesional Especialidad', 'url'=>array('index')),
	array('label'=>'Manage Profesional Especialidad', 'url'=>array('admin')),
);
?>

<h1>Create Profesional Especialidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
