<?php
/**
 * Part of ihealth project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

$tpl = \TplLyrasoft\LyrasoftTemplate::getInstance();
?>
<div class="house">
	<script>
		jQuery(document).ready(function($)
		{
			/**
			 * Class of driving cars.
			 *
			 * Put this class in html because we can just remove this layout if we don't need it.
			 *
			 * @param car
			 * @param duration
			 * @param wait
			 * @constructor
			 */
			var Drive = function(car, duration, wait)
			{
				this.duration = duration || 15000;
				this.wait = wait || 0;
				this.car = car;
			};

			/**
			 * Drive the car.
			 */
			Drive.prototype.drive = function()
			{
				var self = this;

				setTimeout(
					function()
					{
						self.doDrive();
					},
					this.wait
				);
			};

			/**
			 * Do he drive action.
			 */
			Drive.prototype.doDrive = function()
			{
				var self = this;

				this.car.stop();
				this.car.css({left: '-150px'});
				this.car.animate({left: '1300px'}, this.duration);

				setTimeout(
					function()
					{
						self.doDrive();
					},
					this.duration
				);
			};

			var car1 = $('.house .car1');
			var car2 = $('.house .car2');

			(new Drive(car1, 30000, 0)).drive();
			(new Drive(car2, 25000, 18000)).drive();
		});
	</script>

	<div class="windmill-wrap">
		<div class="windmill windmill-1">
			<img class="padel" style="width: 160px;" src="<?php echo $tpl->getPath('images/windmill/windmill-padel.png'); ?>" alt="padel" />
			<img class="body" style="width: 160px;" src="<?php echo $tpl->getPath('images/windmill/windmill-body.png'); ?>" alt="body" />
		</div>

		<div class="windmill windmill-2">
			<img class="padel" style="width: 120px;" src="<?php echo $tpl->getPath('images/windmill/windmill-padel.png'); ?>" alt="padel" />
			<img class="body" style="width: 120px;" src="<?php echo $tpl->getPath('images/windmill/windmill-body.png'); ?>" alt="body" />
		</div>

		<div class="windmill windmill-3">
			<img class="padel" style="width: 140px;" src="<?php echo $tpl->getPath('images/windmill/windmill-padel.png'); ?>" alt="padel" />
			<img class="body" style="width: 140px;" src="<?php echo $tpl->getPath('images/windmill/windmill-body.png'); ?>" alt="body" />
		</div>
	</div>
	<div class="house-pattern">
		<!--House-->
	</div>
	<div class="house-cars">
		<div class="car car1"><img src="<?php echo $tpl->getPath('images/ihealth-car.png'); ?>" alt="padel"/></div>
		<div class="car car2"><img src="<?php echo $tpl->getPath('images/ihealth-car-2.png'); ?>" alt="padel"/></div>
	</div>
</div>
