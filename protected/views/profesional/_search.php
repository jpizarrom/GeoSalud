<div class="search_form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'search-profesional-form-_form-form',
	'enableAjaxValidation'=>false,
//	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input-area">
		<?php //echo $form->labelEx($model,'profesional'); ?>
		<?php echo $form->textField($model,'profesional', array ( 'class'=>'largeTextField homePageSearchTextBox' )); ?>
		<?php echo $form->error($model,'profesional'); ?>
	</div>

	<div class="input-area">
		<?php //echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->dropDownList($model,'especialidad', Especialidad::model()->getOptions(), array ( 'class'=>'largeTextField styled-select' )); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	<div class="input-area">
		<?php //echo $form->labelEx($model,'convenio'); ?>
		<?php echo $form->dropDownList($model,'convenio', Convenio::model()->getOptions(), array ( 'class'=>'largeTextField styled-select' )); ?>
		<?php echo $form->error($model,'convenio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
