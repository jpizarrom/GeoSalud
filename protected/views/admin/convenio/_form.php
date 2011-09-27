<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convenio-form',
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
		<?php echo $form->labelEx($model,'Beneficio'); ?>
		<?php echo $form->textField($model,'Beneficio',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Beneficio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contacto'); ?>
		<?php echo $form->textField($model,'Contacto',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Contacto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->