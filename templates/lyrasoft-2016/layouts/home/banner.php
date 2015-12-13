<?php
/**
 * Part of lyrasoft project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Astra\Menu\Menu;

?>
<section id="banner">
    <div class="banner-mask">
        <div class="banner-top-menu">
            <nav class="navbar navbar-default">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="navbar-nav navbar-center text-center">
                            <?php echo Menu::render($this->tpl->params->get('menutype', 'mainmenu')); ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="banner-inner text-center">
            <div class="banner-text row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>
                        LYRASOFT
                    </h1>
                    <p>
                        Web 雲端應用專家
                    </p>

                    <div class="angle-down" style="position:relative; top: 30vh;">
                        <span style="font-size: 50px" class="fa fa-angle-down"></span>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
