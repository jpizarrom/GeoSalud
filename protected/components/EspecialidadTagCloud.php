<?php

Yii::import('zii.widgets.CPortlet');

class EspecialidadTagCloud extends CPortlet
{
	public $title='Tags';
	public $maxTags=20;

	protected function renderContent()
	{
		$tags=Especialidad::model()->findTagWeights($this->maxTags);

		foreach($tags as $tag)
		{
			$link=CHtml::link(CHtml::encode($tag['name']), array('profesional/search','especialidad'=>$tag['name']));
			echo CHtml::tag('span', array(
				'class'=>'tag',
				'style'=>"font-size:{$tag['weight']}pt",
			), $link)."\n";
		}
	}
}
