<?php

//$data = CHtml::listData(Especialidad::model()->findAll(), 'especialidadid', 'Nombre'));

return array(
	'title'=>'Please provide your login credential',

	'elements'=>array(
		'profesional'=>array(
			'type'=>'text',
			'maxlength'=>32,
		),
		'especialidad'=>array(
			'type'=>'dropdownlist',
			'items'=>Especialidad::model()->getOptions(),
//			'items'=>$data,
			'prompt'=>'Please select:',
		),
		'convenio'=>array(
			'type'=>'dropdownlist',
			'items'=>Convenio::model()->getOptions(),
			'prompt'=>'Please select:',
		)
	),

	'buttons'=>array(
		'login'=>array(
		'type'=>'submit',
		'label'=>'Find',
		),
	),
);
