<?php
/**
 * Part of lyrasoft project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Astra\Menu\Menu;

?>
<script>
    jQuery(document).ready(function ($) {
        $("a.banner-navbar-toggle").click(function(event) {

            var nav = $('.banner-navbar-collapse');

            if (nav.hasClass('in'))
            {
                // nav.addClass('hide');
                nav.removeClass('in');
            }
            else
            {
                // nav.removeClass('hide');
                // nav.css('height', 'auto');
                nav.addClass('in');
            }
        });
    });
</script>
<section id="banner">
    <div class="banner-mask">
        <div class="banner-top-menu">
            <nav class="navbar navbar-default">
                <div class="navbar-inner">

                    <a class="btn btn-navbar banner-navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="container">
                        <div class="navbar-nav navbar-center text-center banner-navbar-collapse navbar-collapse collapse">
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
