<?php
/**
 * Part of ihealth project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

?>
<script>
	function slider() {
		if (document.body.scrollTop > 20) //Show the slider after scrolling down 100px
			jQuery('header > .navbar').stop().animate({"top": '0'});
		else
			jQuery('header > .navbar').stop().animate({"top": '-70'}); //200 matches the width of the slider
	}

	jQuery(window).scroll(function () {
		slider();
	});

	jQuery(document).ready(function () {
		slider();
	});
</script>
<style>
	header > .navbar {
		top: -70px;
	}
</style>
<?php echo (new \Astra\Layout\FileLayout('home.banner'))->render(null); ?>

<?php echo (new \Astra\Layout\FileLayout('home.who-we-are'))->render(null); ?>

<?php echo (new \Astra\Layout\FileLayout('home.what-we-made'))->render(null); ?>

<?php echo (new \Astra\Layout\FileLayout('home.our-works'))->render(null); ?>
