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

<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>

<!-- Everything you want hidden at 940px or less, place within here -->
<div class="nav-collapse-bak collapse-bak pull-right-bak navbar-nav navbar-right">
	<?php echo Menu::render($this->tpl->params->get('menutype', 'mainmenu')); ?>
</div>
