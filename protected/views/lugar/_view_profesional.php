<div class="view">

	<b><?php echo CHtml::encode($data->profesional->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->profesional->Nombre), array('profesional/view', 'id'=>$data->profesional->id)); ?>
	<br />

	<b><?php echo CHtml::encode('Especialidad'); ?>:</b>
	<?php 
	foreach($data->profesional->especialidads as $especialidad)
		echo CHtml::encode($especialidad->Nombre).', ';
	?>
	<br />
</div>
