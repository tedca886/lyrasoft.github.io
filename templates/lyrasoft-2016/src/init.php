<?php
/**
 * Part of ihealth project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

JLoader::registerNamespace('Astra', __DIR__);

JLoader::registerNamespace('TplLyrasoft', __DIR__);

return \TplLyrasoft\LyrasoftTemplate::getInstance()->init($this, $this->params);
