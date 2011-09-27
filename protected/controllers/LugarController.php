<?php

class LugarController extends Controller
{
	public $layout='//layouts/geosalud_column1';
	public function actionIndex()
	{
		//$this->render('index');
		$this->redirect(array('/profesional'));
	}

	public function actionList()
	{
		$this->render('list');
	}

	public function actionMap()
	{
		$this->render('map');
	}

	public function actionSearch()
	{
		$this->render('search');
	}

	public function actionView($id)
	{
		$model = $this->loadModel($id);

		$criteria = new CDbCriteria;
		$criteria->condition = "lugarid=:keyword";
		$criteria->params = array (	
			':keyword'=>$id,
		);
		$dataProvider=new CActiveDataProvider('Atencion', array(
					/*'pagination'=>array(
						'pageSize'=>Yii::app()->params['postsPerPage'],
					),*/
					'criteria'=>$criteria,
				));

		$this->render('view',array(
			'model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	public function loadModel($id)
	{
		$model=Lugaratencion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
