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

<!-- Main Body -->
<div id="body" class="container-fluid">
	<!-- Breadcrumbs -->
	<?php if (false && $tpl->countModules('breadcrumbs')): ?>
		<section id="breadcrumbs">
			<jdoc:include type="module" name="breadcrumbs" />
		</section>
	<?php endif; ?>

	<jdoc:include type="message" />

	<jdoc:include type="component" />
</div>

<?php if (Position::getBlockPositions('info-bottom')): ?>
	<!--INFO BOTTOM-->
	<section id="cj-info-bottom" class="main-block">
		<div class="container-fluid">
			<div class="row-fluid">
				<?php echo Position::render('info-bottom'); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
