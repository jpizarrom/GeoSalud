<div class="view full_list">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->
	<div class="item_list_img">
		<img alt="<?php echo CHtml::encode($data->Nombre); ?>" src="<?php echo Yii::app()->request->baseUrl; ?>/images/stock_people.png">
	</div>
	<div class="item_list_title">
		<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
		<!--<?php echo CHtml::encode($data->Nombre); ?>-->
		<?php echo CHtml::link(CHtml::encode($data->Nombre), array('view', 'id'=>$data->id)); ?>
		<br />
	</div>
	<div class="item_list_content">
		<b><?php echo CHtml::encode('Especialidad'); ?>:</b>
		<?php 
		foreach($data->especialidads as $especialidad)
			echo CHtml::encode($especialidad->Nombre).', ';
		?>
		<br />
	</div>
	<!--<b><?php echo CHtml::encode('Mapa'); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('map', 'id'=>$data->id)); ?>
	<br />-->
<script type="text/javascript">
/*<![CDATA[*/
//alert('gg');
/*]]>*/
</script>

<?php
/*Yii::app()->clientScript->registerScript('helloscript_'+$data->id,"
        alert('hello');
    ",CClientScript::POS_READY);*/
?>
</div>
