<?php 
/**
 * Part of ihealth project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

$tpl = include_once __DIR__ . '/src/init.php';

$layout = $tpl::isHome() ? 'landing' : $this->params->get('layout', 'default');

\Windwalker\Helper\ProfilerHelper::mark('Template Layout: ' . $layout, 'Application');
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<!--[if lt IE 9]>
	<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	<script src="media/com_ihealth/js/modernizr.custom.97401.js"></script>
	<script src="media/com_ihealth/js/BrowserDetect.js"></script>
</head>
<body class="<?php echo \TplLyrasoft\LyrasoftTemplate::getOs(); ?>">
<jdoc:include type="component" />
</body>
</html>
