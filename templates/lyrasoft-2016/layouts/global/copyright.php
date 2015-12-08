<?php
/**
 * Part of carejob project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

$tpl = \TplLyrasoft\LyrasoftTemplate::getInstance();
$params = new \Joomla\Registry\Registry;
$configData['0800'] = $params->get('ihealth_site.0800', '0800-088-336');
$configData['fax'] = $params->get('ihealth_site.fax', '(02) 2760-5895');
?>

<section id="copyright">
	<div class="row-fluid">
		<div class="span12 text-center">
			<div class="up-button">
				<a href="#">
					<img src="<?php echo $tpl::getPath('images/back-top.png'); ?>" alt="Back To Top" />
				</a>
			</div>

			<div class="bottom-logo">
				<a href="#">
					<h1><img width="200px" src="<?php echo $tpl::getPath('images/logo-white.png'); ?>" alt="iHealth" /></h1>
				</a>
			</div>
			<div class="copyright">
				政昇處方宅配藥局&nbsp;&nbsp;<img width="50px" src="<?php echo $tpl::getPath('images/health-bureau.png'); ?>" alt="iHealth" />&nbsp;&nbsp;拉近健康的距離&nbsp;&nbsp;&nbsp;&nbsp;<br />
				聯絡我們: <?php echo $configData['0800']; ?> | 傳真: <?php echo $configData['fax']; ?><br />
				© 2014 iHealth.com.tw All rights reserved.<br />
			</div>
		</div>
	</div>
</section>
