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
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">

					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo JUri::root(); ?>">
							LYRASOFT
							<!--						<img src="--><?php //echo $tpl::getPath('images/logo-white-subtitle.png'); ?><!--" alt="LYRASOFT" />-->
						</a>

						<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
						<a class="btn btn-navbar lyra-navbar-toggle">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</div>

					<?php echo (new \Astra\Layout\FileLayout('global.menu'))->render(null); ?>
				</div>
			</div>
		</nav>
	</header>

	<?php
	echo (new \Astra\Layout\FileLayout($layout, $document))->render(array('template' => $document, 'params' => $this->tpl->params));
	?>

	<?php echo (new \Astra\Layout\FileLayout('global.footer'))->render(null); ?>
</div>
