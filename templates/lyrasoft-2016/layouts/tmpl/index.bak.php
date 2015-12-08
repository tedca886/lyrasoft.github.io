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
<!--TOP TOOLBAR-->
<section id="top-toolbar" class="container">

</section>

<div id="outer-wrap" class="container">

	<!--HEADER-->
	<section id="header">

		<div class="facebook-link-wrap">
			<a href="https://www.facebook.com/iHealthPharmacy" target="_blank">
				<span class="facebook-words"><img src="<?php echo $tpl::getPath('images/fb-like.png'); ?>" alt="facebook" /> 臉書粉絲專頁</span>
			</a>
		</div>

		<nav class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">

					<a class="brand" href="<?php echo JUri::root(); ?>">
						<img src="<?php echo $tpl::getPath('images/logo-white-subtitle.png'); ?>" alt="iHealth" />
					</a>

					<?php echo (new \Astra\Layout\FileLayout('global.menu'))->render(null); ?>
				</div>
			</div>
		</nav>

	</section>

	<?php
	echo (new \Astra\Layout\FileLayout($layout, $document))->render(array('template' => $document, 'params' => $this->tpl->params));
	?>

	<div class="dark-green-block bottom-blocks">
		<?php echo (new \Astra\Layout\FileLayout('global.footer', $document))->render(null); ?>

		<?php echo (new \Astra\Layout\FileLayout('global.copyright', $document))->render(null); ?>
	</div>
</div>
