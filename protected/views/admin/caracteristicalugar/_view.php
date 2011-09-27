<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('caracteristicaid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->caracteristicaid), array('view', 'id'=>$data->caracteristicaid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>