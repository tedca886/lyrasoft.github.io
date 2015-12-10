<?php
/**
 * Part of lyrasoft project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Astra\Menu\Menu;

?>
<section id="banner">
	<div class="banner-top-menu">
		<nav class="navbar navbar-default">
			<div class="navbar-inner">
				<div class="container">
					<div class="navbar-nav navbar-center text-center">
						<?php echo Menu::render($this->tpl->params->get('menutype', 'mainmenu')); ?>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<div class="banner-inner text-center">
		<div class="banner-text row">
			<div class="col-md-8 col-md-offset-2">
				<h1>
					LYRASOFT
				</h1>
				<p>
					Lorem
				</p>
			</div>
		</div>
	</div>
</section>
