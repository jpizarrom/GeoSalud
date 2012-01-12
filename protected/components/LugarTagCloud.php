<?php

Yii::import('zii.widgets.CPortlet');

class LugarTagCloud extends CPortlet
{
	public $title='Tags';
	public $maxTags=20;

	protected function renderContent()
	{
		$tags=Lugaratencion::model()->findTagWeights($this->maxTags);

		foreach($tags as $tag)
		{
			$link=CHtml::link(CHtml::encode($tag['name']), array('lugar/view','id'=>$tag['id']));
			echo CHtml::tag('span', array(
				'class'=>'tag',
				'style'=>"font-size:{$tag['weight']}pt",
			), $link)."\n";
		}
	}
}
