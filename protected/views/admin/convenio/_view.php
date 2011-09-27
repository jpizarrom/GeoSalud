<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Beneficio')); ?>:</b>
	<?php echo CHtml::encode($data->Beneficio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contacto')); ?>:</b>
	<?php echo CHtml::encode($data->Contacto); ?>
	<br />


</div>