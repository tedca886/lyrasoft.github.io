<?php
/**
 * Part of ihealth project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

$tpl = \TplLyrasoft\LyrasoftTemplate::getInstance();
$document = $tpl->getTemplate();
$layout = $displayData['layout'];
?>
<div id="outer-wrap">

	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">

					<a class="navbar-brand" href="<?php echo JUri::root(); ?>">
						LYRASOFT
<!--						<img src="--><?php //echo $tpl::getPath('images/logo-white-subtitle.png'); ?><!--" alt="LYRASOFT" />-->
					</a>

					<?php echo (new \Astra\Layout\FileLayout('global.menu'))->render(null); ?>
				</div>
			</div>
		</nav>
	</header>

	<?php
	echo (new \Astra\Layout\FileLayout($layout, $document))->render(array('template' => $document, 'params' => $this->tpl->params));
	?>
</div>