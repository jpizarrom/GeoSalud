<?php $this->beginContent('//layouts/geosalud_main'); ?>

			<div class="twoColumnLayout">
				<div>
					<div id="" class="csTopContent">
						<?php echo $content; ?>
					</div>
					<div id="" class="csLeftContent">
			<?php $this->widget('EspecialidadTagCloud', array(
//				'maxTags'=>Yii::app()->params['tagCloudCount'],
			)); ?>
					</div>
					<div id="" class="csMiddleContent">
			<?php $this->widget('LugarTagCloud', array(
//				'maxTags'=>Yii::app()->params['tagCloudCount'],
			)); ?>			
					</div>
				</div>

			</div>

			<div id="widget_panel_left">

				
			</div>
<?php $this->endContent(); ?>
