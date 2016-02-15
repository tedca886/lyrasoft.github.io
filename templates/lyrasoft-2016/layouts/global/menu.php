<?php 
/**
 * Part of ihealth project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

use Astra\Menu\Menu;

$user = JFactory::getUser();
$tpl = \TplLyrasoft\LyrasoftTemplate::getInstance();
?>

<script>
	jQuery(document).ready(function ($) {
		$("a.lyra-navbar-toggle").click(function(event) {

			var nav = $('.navbar-collapse');

			if (nav.hasClass('in'))
			{
				// nav.addClass('hide');
				nav.removeClass('in');
			}
			else
			{
				// nav.removeClass('hide');
				// nav.css('height', 'auto');
				nav.addClass('in');
			}
		});
	});
</script>

<div class="navbar-collapse collapse" role="navigation">
	<!-- Everything you want hidden at 940px or less, place within here -->
	<div class="navbar-nav navbar-right">
		<?php echo Menu::render($this->tpl->params->get('menutype', 'mainmenu')); ?>
	</div>
</div>
