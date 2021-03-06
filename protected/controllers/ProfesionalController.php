<?php

class ProfesionalController extends Controller implements IWebServiceProvider
{
	public $layout='//layouts/geosalud_column1';

	public function actionIndex()
	{
		$this->redirect(array('search'));
		/*$model=new SearchProfesionalForm;
		if(isset($_POST['SearchProfesionalForm']))
		    {
			// collects user input data
			$model->attributes=$_POST['SearchProfesionalForm'];
			// validates user input and redirect to previous page if validated
			if($model->validate())
			    $this->redirect(Yii::app()->user->returnUrl);
		    }

		$this->render('index',array('model'=>$model));*/
	}

	public function actionView($id)
	{
		//$this->redirect(array('search'));

		//$this->render('map');
		$model = $this->loadModel($id);

		$criteria = new CDbCriteria;
		$criteria->condition = "profesionalid=:keyword";
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

	public function actionMap($id)
	{
		//$this->redirect(array('search'));

		//$this->render('map');
		$model = $this->loadModel($id);

		$criteria = new CDbCriteria;
		$criteria->condition = "profesionalid=:keyword";
		$criteria->params = array (	
			':keyword'=>$id,
		);
		$dataProvider=new CActiveDataProvider('Atencion', array(
					/*'pagination'=>array(
						'pageSize'=>Yii::app()->params['postsPerPage'],
					),*/
					'criteria'=>$criteria,
				));
		$this->render('map',array(
			'model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionSearch()
	{
		$model=new SearchProfesionalForm;
		$form = new CForm('application.views.profesional.SearchProfesionalForm', $model);
		$form->method = 'get';

				$criteria = new CDbCriteria;
				$criteria->together = true;
				$criteria->with=array();
				$criteria->condition = '';
				$criteria->params = array ();

				$criteria->with[] = 'atencions';
				$criteria->condition .= "atencions.profesionalid is not null";


		if(isset($_GET['SearchProfesionalForm']))
		    {
			// collects user input data
			$model->attributes=$_GET['SearchProfesionalForm'];
			// validates user input and redirect to previous page if validated
			if($model->validate()){
				//echo $model->attributes['profesional'];
				$keyword = $model->attributes['profesional'];
				
				if (!empty($model->attributes['especialidad']) ){
					if (!empty($criteria->condition) )
						$criteria->condition .= " and ";
					$criteria->with[] = 'especialidads';
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

                $criteria->group = 't.id';
//                $criteria->group = 't.id,atencions.lugarid';

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
				$dataProvider=new CActiveDataProvider('Profesional', array(
					'pagination'=>array(
						'pageSize'=>3,
					),
					'criteria'=>$criteria,
				));
				//echo $dataProvider->getItemCount();
				//$this->render('_list',array('model'=>$model, 'form'=>$form));
                $data = array(
					    'dataProvider'=>$dataProvider,
				    );
                if(Yii::app()->request->isAjaxRequest) { 
                    $this->renderPartial('_list',$data); } 
                else { 
				    $this->render('list',$data);
                }
				return;
//			    $this->redirect(Yii::app()->user->returnUrl);
//			    $this->redirect(array('site/index'));
//			    $this->redirect(array('view','id'=>$model->profesional));
			}
		    } elseif(isset($_GET['especialidad']))
            {
					if (!empty($criteria->condition) )
						$criteria->condition .= " and ";
					$criteria->with[] = 'especialidads';
					$criteria->condition .= "especialidads.Nombre LIKE :especialidad";
					//$criteria->condition = "id=1";
					//$criteria->condition = "atencions.profesionalid IS NOT NULL";
					$criteria->params [':especialidad']=$_GET['especialidad'];

				$dataProvider=new CActiveDataProvider('Profesional', array(
					'pagination'=>array(
						'pageSize'=>3,
					),
					'criteria'=>$criteria,
				));
				//echo $dataProvider->getItemCount();
				//$this->render('_list',array('model'=>$model, 'form'=>$form));
                $data = array(
					    'dataProvider'=>$dataProvider,
				    );
                if(Yii::app()->request->isAjaxRequest) { 
                    $this->renderPartial('_list',$data); } 
                else { 
				    $this->render('list',$data);
                }
				return;
            }

		$this->render('search',array('model'=>$model, 'form'=>$form));
	}
	public function actionList()
	{
		$model=new SearchProfesionalForm;
		$form = new CForm('application.views.profesional.SearchProfesionalForm', $model);
		
		if(isset($_POST['SearchProfesionalForm']))
		    {
			// collects user input data
			$model->attributes=$_POST['SearchProfesionalForm'];
			// validates user input and redirect to previous page if validated
			if($model->validate())
			    $this->redirect(Yii::app()->user->returnUrl);
		    }

//		$this->render('_form2',array('model'=>$model, 'form'=>$form));
		$this->redirect(array('search'));
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
    public function actions()
	{
		return array(
			'ws'=>array(
				'class'=>'CWebServiceAction',
#				'classMap'=>array(
#					'Profesional',
#				),
			),
		);
	}
	/**
	 * This method is required by IWebServiceProvider.
	 * It makes sure the user is logged in before making changes to data.
	 * @param CWebService the currently requested Web service.
	 * @return boolean whether the remote method should be executed.
	 */
	public function beforeWebMethod($service)
	{
		/*$safeMethods=array(
			'login',
			'getContacts',
		);
		$pattern='/^('.implode('|',$safeMethods).')$/i';
		if(!Yii::app()->user->isGuest || preg_match($pattern,$service->methodName))
			return true;
		else
			throw new CException('Login required.');*/
	}

	/**
	 * This method is required by IWebServiceProvider.
	 * @param CWebService the currently requested Web service.
	 */
	public function afterWebMethod($service)
	{
	}
	/*** The following methods are Web service APIs ***/
    
	/**
	 * Returns all contact records.
	 * @return Profesional[] the contact records
	 * @soap
	 */
	public function getContacts()
	{
		return Profesional::model()->findAll();
	}

	public function loadModel($id)
	{
		$model=Profesional::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
