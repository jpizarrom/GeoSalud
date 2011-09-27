<?php
$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->atencionid=>array('view','id'=>$model->atencionid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atencion', 'url'=>array('index')),
	array('label'=>'Create Atencion', 'url'=>array('create')),
	array('label'=>'View Atencion', 'url'=>array('view', 'id'=>$model->atencionid)),
	array('label'=>'Manage Atencion', 'url'=>array('admin')),
);
?>

<h1>Update Atencion <?php echo $model->atencionid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>