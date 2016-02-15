<?php 
/**
 * Part of lyrasoft project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

$ezset = Ezset::getInstance();

?>
<section id="page-heading" class="inner-md">
	<div class="container text-center">
		<h1 class=""><span class="heading-icon"></span> <?php echo $ezset->data->get('originTitle') ?></h1>

        <?php if ($ezset->data->headingContent): ?>
            <div class="heading-content lead row inner-top-xs">
                <div class="col-md-8 col-md-offset-2">
                    <?php echo $ezset->data->headingContent; ?>
                </div>
            </div>
        <?php elseif ($this->tpl->countModules('heading-content')): ?>
            <div class="heading-content lead row inner-top-xs">
                <div class="col-md-8 col-md-offset-2">
                    <jdoc:include type="modules" name="heading-content" style="raw" />
                </div>
            </div>
        <?php endif; ?>
	</div>
</section>
