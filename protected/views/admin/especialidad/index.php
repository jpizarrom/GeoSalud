<?php
$this->breadcrumbs=array(
	'Especialidads',
);

$this->menu=array(
	array('label'=>'Create Especialidad', 'url'=>array('create')),
	array('label'=>'Manage Especialidad', 'url'=>array('admin')),
);
?>

<h1>Especialidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
