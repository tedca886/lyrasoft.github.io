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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<style>
	body {
		background-color: #ee6c64;
	}

	h1.page-header
	{
		border-bottom: none;
		font-size: 300px;
		text-align: center;
		margin-top: 60px;
		line-height: 100%;
		font-family: Roboto, sans-serif;
	}

	#body {
		color: white;
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

<div id="outer-wrap">

	<!--HEADER-->
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

	<section id="body" class="outer-md">
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
