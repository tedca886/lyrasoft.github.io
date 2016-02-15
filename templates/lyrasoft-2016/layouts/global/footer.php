<?php 
/**
 * Part of lyrasoft project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Astra\Module\Position;

?>
<?php if (Position::getBlockPositions('footer')): ?>
    <footer id="footer">
        <div class="container inner-md">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="row-fluid">
                        <?php echo Position::render('footer'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<aside id="copyright">
	<div class="container inner-sm text-center">
        © <?php echo gmdate('Y'); ?> LYRASOFT - <a target="_blank" href="http://megamount.tw">MegaMount, inc.</a>
	</div>
</aside>
