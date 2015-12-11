<?php
/**
 * Part of ihealth project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

use Astra\Module\Position;

$tpl = $displayData['template'];
?>

<?php echo (new \Astra\Layout\FileLayout('global.heading', $this->tpl))->render(null); ?>
<!--MESSAGE-->
	<div id="message">
		<jdoc:include type="message" />
	</div>

<!--MAIN BODY-->
<section id="body" class="inner-md">
	<div class="container">
		<!-- Breadcrumbs -->
		<?php if ($tpl->countModules('breadcrumbs')): ?>
			<section id="breadcrumbs">
				<jdoc:include type="module" name="breadcrumbs" />
			</section>
		<?php endif; ?>

		<?php if (Position::getBlockPositions('main-top')): ?>
			<div id="main-top">
				<div class="row-fluid">
					<?php echo Position::render('main-top'); ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="main-content row">

            <div class="col-md-offset-2 col-md-8">

                <!--LEFT-->
                <div class="col-left">
                    <div class="col-left-inner">
                        <jdoc:include type="modules" name="left" style="xhtml" />
                    </div>
                </div>

                <!--MAIN CONTENT-->
                <div id="main-content" class="">
                    <div id="main-content-inner">
                        <jdoc:include type="component" />
                    </div>
                </div>

                <!--RIGHT-->
                <div class="col-right">
                    <div class="col-right-inner">
                        <jdoc:include type="modules" name="right" style="xhtml" />
                    </div>
                </div>

            </div>

		</div>

		<?php if (Position::getBlockPositions('main-bottom')): ?>
			<div id="main-top">
				<div class="row-fluid">
					<?php echo Position::render('main-bottom'); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php if (Position::getBlockPositions('info-top')): ?>
<!--INFO TOP-->
<section id="ly-info-top" class="main-block">
	<div class="container">
		<div class="row-fluid">
			<?php echo Position::render('info-top'); ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if (Position::getBlockPositions('info-mid')): ?>
<!--INFO MIDDLE-->
<section id="ly-info-mid" class="main-block">
	<div class="container">
		<div class="row-fluid">
			<?php echo Position::render('info-mid'); ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if (Position::getBlockPositions('info-bottom')): ?>
<!--INFO BOTTOM-->
<section id="ly-info-bottom" class="main-block">
	<div class="container">
		<div class="row-fluid">
			<?php echo Position::render('info-bottom'); ?>
		</div>
	</div>
</section>
<?php endif; ?>
