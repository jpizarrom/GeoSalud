<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lugaratencion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fono'); ?>
		<?php echo $form->textField($model,'Fono',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>13,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lon'); ?>
		<?php echo $form->textField($model,'lon',array('size'=>13,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php

// import the library
Yii::import('ext.gmaps.*');

$gMap = new EGMap();
//$gMap->setZoom(13);
$gMap->setWidth(500);
$gMap->setHeight(400);
$gMap->zoom = 14;
$gMap->setCenter(-35.422753, -71.657266);

// Saving coordinates after user dragged our marker.
$dragevent = new EGMapEvent('dragend', 
	'
function (event) { 
	alert();
}
	', 
	false, EGMapEvent::TYPE_EVENT_DEFAULT);

$gMap->addEvent(new EGMapEvent('click',
	'
function (event) { 
//	alert(event.latLng);
	$("#Lugaratencion_lat").val(event.latLng.lat());
	$("#Lugaratencion_lon").val(event.latLng.lng());
}
	', 
	false, EGMapEvent::TYPE_EVENT_DEFAULT));


$gMap->renderMap();
?>

