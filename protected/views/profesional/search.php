<?php
$this->breadcrumbs=array(
	'Profesional'=>array('/profesional'),
	'Search',
);

$this->menu=array(
//	array('label'=>'Create Profesional', 'url'=>array('create')),
//	array('label'=>'Manage Profesional', 'url'=>array('admin')),
//	array('label'=>'Search Profesional', 'url'=>array('search')),
);
?>

<!--<div class="widget_middle">
<div class="form">
<?php echo $form; ?>
</div>
</div>-->


					<div class="widget_top style1Frame ">
							<div class="Only"></div>
						</div>
						<div class="widget_middle">
							<div id="">

								<div id="content_top">
									<div class="title_content_top">
										<h1 class="h1Search">Buscar!!</h1>
									</div>
									<div id="searchWrapper">
										<?php echo $form; ?>
										<?php //echo $this->renderPartial('_search', array('model'=>$model)); ?>
										
									</div>
									<!--<div class="search_error">
										<span id="" class="whiteText"> Error!!</span>
									</div>-->
								</div>

							</div>
						</div>
						<!--<div class="widget_bottom style1Frame botSERPimg">
							<div class="Only"></div>
						</div>

						<div class="_HowToUse cms_howtouse:html">

							<img alt="" src="/Editor/assets/release/comofunciona.jpg" />
						</div>-->
