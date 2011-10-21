<?php

class LugarController extends Controller
{
	public $layout='//layouts/geosalud_column1';
	public function actionIndex()
	{
		//$this->render('index');
		//$this->redirect(array('/profesional'));
        //$this->redirect(array('/lugar/search'));
        $this->redirect(array('search'));
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
		$model=new SearchProfesionalForm;
		$form = new CForm('application.views.profesional.SearchProfesionalForm', $model);
		$form->method = 'get';
		
		if(isset($_GET['SearchProfesionalForm']))
		    {
			// collects user input data
			$model->attributes=$_GET['SearchProfesionalForm'];
			// validates user input and redirect to previous page if validated
			if($model->validate()){
				//echo $model->attributes['profesional'];
				$keyword = $model->attributes['profesional'];
				$criteria = new CDbCriteria;
				$criteria->together = true;
				$criteria->with=array();
				$criteria->condition = '';
				$criteria->params = array ();

				$criteria->with[] = 'atencions';
				$criteria->condition .= "atencions.profesionalid is not null";
				
				if (!empty($model->attributes['especialidad']) ){
					if (!empty($criteria->condition) )
						$criteria->condition .= " and ";
                    $criteria->with[] = 'atencions.profesional.especialidads';
					$criteria->condition .= "especialidads.especialidadid=:especialidad";
					//$criteria->condition = "id=1";
					//$criteria->condition = "atencions.profesionalid IS NOT NULL";
					$criteria->params [':especialidad']=$model->attributes['especialidad'];
				}
				/*if (!empty($model->attributes['especialidad']) and !empty($model->attributes['convenio']) )
					$criteria->condition .= " and ";*/

				if (!empty($model->attributes['convenio']) ){
					if (!empty($criteria->condition) )
						$criteria->condition .= " and ";
					$criteria->with[] = 'atencions.convenios';
					$criteria->condition .= " convenios.id=:convenio";
					$criteria->params [':convenio']=$model->attributes['convenio'];
				}
				if (!empty($keyword))
					$criteria->addSearchCondition('t.Nombre',$keyword);

				$criteria->order='t.Nombre';
                $criteria->group = 't.lugarid';

				/*$criteria->with=array(
				    //'atencions',
				    'especialidads',
				);*/
				/*$criteria->with=array(
				    'atencions'=>array(
					'select'=>false,
					'condition'=>'atencions.profesionalid=1',
				    ),
				);*/
				//Especialidad::model()->findall();
				$dataProvider=new CActiveDataProvider('Lugaratencion', array(
					'pagination'=>array(
						'pageSize'=>3,
					),
					'criteria'=>$criteria,
				));
				//echo $dataProvider->getItemCount();
				//$this->render('_list',array('model'=>$model, 'form'=>$form));
				$this->render('list',array(
					'dataProvider'=>$dataProvider,
				));
				return;
//			    $this->redirect(Yii::app()->user->returnUrl);
//			    $this->redirect(array('site/index'));
//			    $this->redirect(array('view','id'=>$model->profesional));
			}
		    }

		$this->render('search',array('model'=>$model, 'form'=>$form));
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
