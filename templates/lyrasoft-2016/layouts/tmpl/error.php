<?php
/**
 * Part of ihealth project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

$tpl = \TplLyrasoft\LyrasoftTemplate::getInstance();
$document = $tpl->getTemplate();

$layout = $document->params->get('layout');
?>
<style>
	h1.page-header
	{
		border-bottom: none;
		font-size: 300px;
		color: #88c425;
		text-align: center;
		margin-top: 60px;
		line-height: 100%;
	}

	.error-heading h3
	{
		text-align: center;
	}

	#backtrace table
	{
		font-size: 14px;
	}
</style>

<div id="outer-wrap" class="container">

	<!--HEADER-->
	<section id="header">

		<nav class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">

					<a class="brand" href="<?php echo JUri::root(); ?>">
						<!--<img src="--><?php //echo $tpl::getPath('images/logo.png'); ?><!--" alt="" />-->
						iHealth
					</a>

					<?php echo (new \Astra\Layout\FileLayout('global.menu'))->render(null); ?>
				</div>
			</div>
		</nav>

	</section>

	<section id="body">
		<div class="container-fluid main-block">
			<div class="row-fluid">
				<div id="content" class="span12">
					<!-- Begin Content -->
					<div class="error-heading">
						<h1 class="page-header"><?php echo $document->error->getCode(); ?></h1>
						<h3><?php echo $document->error->getMessage();?></h3>
					</div>

					<?php
					if ($document->debug)
					{
						echo (new \Astra\Layout\FileLayout('global.backtrace', $document))->render(null);
					}
					?>
					<!-- End Content -->
				</div>
			</div>
		</div>
	</section>

	<div class="dark-green-block bottom-blocks">
		<?php echo (new \Astra\Layout\FileLayout('global.footer', $document))->render(null); ?>

		<?php echo (new \Astra\Layout\FileLayout('global.copyright', $document))->render(null); ?>
	</div>
</div>
