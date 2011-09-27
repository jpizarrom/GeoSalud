<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<!--<?php echo CHtml::encode($data->Nombre); ?>-->
	<?php echo CHtml::link(CHtml::encode($data->Nombre), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode('Especialidad'); ?>:</b>
	<?php 
	foreach($data->especialidads as $especialidad)
		echo CHtml::encode($especialidad->Nombre).', ';
	?>
	<br />

	<!--<b><?php echo CHtml::encode('Mapa'); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('map', 'id'=>$data->id)); ?>
	<br />-->

</div>
