<?php
$this->breadcrumbs=array(
	'Atencion Convenio'=>array('/admin/atencion_convenio'),
	'Create',
);?>
<?php
$this->menu=array(
	array('label'=>'List Atencion Convenio', 'url'=>array('index')),
	array('label'=>'Manage Atencion Convenio', 'url'=>array('admin')),
);
?>

<h1>Create Atencion Convenio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
