<?php
$this->breadcrumbs=array(
	'Profesional Especialidad'=>array('index'),
	'Admin',
);
$this->menu=array(
	array('label'=>'List Atencion', 'url'=>array('index')),
	array('label'=>'Create Atencion', 'url'=>array('create')),
);
?>

<h1>Manage Profesional Especialidad</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atencion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'especialidadid',
		/*array(
			'class'=>'CButtonColumn',
		),*/
		array(
			'class'=>'CButtonColumn',
			'viewButtonUrl'=>'Yii::app()->createUrl("/controllername/view", array("id" => $data["id"]))',
			'deleteButtonUrl'=>'Yii::app()->createUrl("/admin/profesional_especialidad/delete", array("id" =>  $data["id"], "especialidadid" =>  $data["especialidadid"] ))',
			'updateButtonUrl'=>'Yii::app()->createUrl("/controllername/update", array("id" =>  $data["id"]))',
		),
	),
)); ?>
