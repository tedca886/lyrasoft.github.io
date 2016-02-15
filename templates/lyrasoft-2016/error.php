<?php 
/**
 * Part of ihealth project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

$tpl = include_once __DIR__ . '/src/init.php';

echo (new \Astra\Layout\FileLayout('global.html', $this))->render(array('tmpl' => 'error'));
