<?php

//$data = CHtml::listData(Especialidad::model()->findAll(), 'especialidadid', 'Nombre'));

return array(
	//'title'=>'Please provide your login credential',

	'elements'=>array(
		'profesional'=>array(
			'label'=>false,
			'type'=>'text',
			'maxlength'=>32,
			'class'=>'largeTextField homePageSearchTextBox',
		),
		'especialidad'=>array(
			'label'=>false,
			'type'=>'dropdownlist',
			'items'=>Especialidad::model()->getOptions(),
//			'items'=>$data,
			'prompt'=>'Selecione:',
			'class'=>'largeTextField styled-select',
		),
		'convenio'=>array(
			'label'=>false,
			'type'=>'dropdownlist',
			'items'=>Convenio::model()->getOptions(),
			'prompt'=>'Selecione:',
			'class'=>'largeTextField styled-select'

		)
	),

	'buttons'=>array(
		'find'=>array(
		'type'=>'submit',
		'label'=>'Buscar',
		),
	),
);
