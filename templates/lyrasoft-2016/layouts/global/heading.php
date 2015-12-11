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
		<h1><span class="heading-icon"></span> <?php echo $ezset->data->get('originTitle') ?></h1>

        <?php if ($this->tpl->countModules('heading-content')): ?>
            <div class="heading-content lead row inner-top-xs">
                <div class="col-md-6 col-md-offset-3">
                    <jdoc:include type="modules" name="heading-content" style="raw" />
                </div>
            </div>
        <?php endif; ?>
	</div>
</section>
