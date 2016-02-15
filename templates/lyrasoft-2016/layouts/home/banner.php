<?php 
/**
 * Part of lyrasoft project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Astra\Menu\Menu;

JFactory::getDocument()->addScript('https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.7.2/jquery.smooth-scroll.min.js');

?>
<script>
    jQuery(document).ready(function ($) {

        var nav = $('.banner-navbar-collapse');

        nav.hide();

        $("a.banner-navbar-toggle").click(function(event) {
            nav.toggle('slide', { direction: "up"}, 500);
        });

        $('#start-button').smoothScroll({
            easing: 'easeOutExpo',
            speed: 1500
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
                        <div class="navbar-nav navbar-center text-center banner-navbar-collapse navbar-collapse collapse in">
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
                        <a id="start-button" href="#who-we-are" style="color: white">
                            <span style="font-size: 50px" class="fa fa-angle-down"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
