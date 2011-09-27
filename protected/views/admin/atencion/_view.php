<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('atencionid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->atencionid), array('view', 'id'=>$data->atencionid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugarid')); ?>:</b>
	<?php echo CHtml::encode($data->lugar->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesionalid')); ?>:</b>
	<?php echo CHtml::encode($data->profesional->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluacioncosteada')); ?>:</b>
	<?php echo CHtml::encode($data->evaluacioncosteada); ?>
	<br />


</div>
