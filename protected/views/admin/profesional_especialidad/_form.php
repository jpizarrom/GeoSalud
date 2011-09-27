<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'atencion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->dropDownList($model,'id', Profesional::model()->getOptions()); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidadid'); ?>
		<?php echo $form->dropDownList($model,'especialidadid', Especialidad::model()->getOptions()); ?>
		<?php echo $form->error($model,'especialidadid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
