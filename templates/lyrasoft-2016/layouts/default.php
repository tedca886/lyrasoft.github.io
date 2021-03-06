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
<section id="body" class="inner-md outer-bottom-md">
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

		<div class="main-content">

            <div class="row">

                <?php
                if ($this->tpl->countModules('left') && $this->tpl->countModules('right'))
                {
                    $cols = [3, 6, 3];
                }
                elseif ($this->tpl->countModules('left'))
                {
                    $cols = [3, 9, 0];
                }
                elseif ($this->tpl->countModules('right'))
                {
                    $cols = [0, 9, 3];
                }
                else
                {
                    $cols = [0, 12, 0];
                }
                ?>

                <?php if ($cols[0]): ?>
                <!--LEFT-->
                <div class="col-left col-md-<?php echo $cols[0]; ?>">
                    <div class="col-left-inner">
                        <jdoc:include type="modules" name="left" style="xhtml" />
                    </div>
                </div>
                <?php endif; ?>

                <!--MAIN CONTENT-->
                <div id="col-main" class="col-md-<?php echo $cols[1]; ?>">
                    <div id="main-content-inner">
                        <jdoc:include type="component" />
                    </div>
                </div>

                <?php if ($cols[2]): ?>
                <!--RIGHT-->
                <div class="col-right col-md-<?php echo $cols[2]; ?>">
                    <div class="col-right-inner">
                        <jdoc:include type="modules" name="right" style="xhtml" />
                    </div>
                </div>
                <?php endif; ?>

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
