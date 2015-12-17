<?php
/**
 * Part of ihealth project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace TplLyrasoft;

use Astra\Application\Template;

/**
 * Class CarejobTemplate
 *
 * @since 1.0
 */
class LyrasoftTemplate extends Template
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected static $name = 'lyrasoft';

	/**
	 * getInstance
	 *
	 * @param   string $name
	 *
	 * @return  Template
	 */
	public static function getInstance($name = 'ihealth')
	{
		return parent::getInstance($name);
	}

	/**
	 * windwalkerPath
	 *
	 * @return  string
	 */
	protected static function windwalkerPath()
	{
		return JPATH_LIBRARIES . '/windwalker/src/init.php';
	}

	/**
	 * init
	 *
	 * @param \JDocument $template JDcoument object.
	 * @param \JRegistry $params   Template params.
	 *
	 * @return  LyrasoftTemplate
	 */
	public function init(\JDocument $template, \JRegistry $params = null)
	{
		$params = $params ? : new \JRegistry;

		return parent::init($template, $params);
	}

	/**
	 * registerScript
	 *
	 * @param \JDocument $template
	 *
	 * @return  void
	 */
	protected static function registerScript(\JDocument $template)
	{
		parent::registerScript($template);

		static::$asset->addJs('template.js');
		static::$asset->getDoc()->addScriptVersion('https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.3.0/mobile-detect.min.js');

		static::$asset->internalJS(<<<JS
var md = new MobileDetect(window.navigator.userAgent);
console.log(window.navigator.userAgent);

jQuery(document).ready(function($) {
	if (md.mobile())
	{
		$('body').addClass('mobile');
	}
});
JS
);

		// static::$asset->addJs('libraries/owl.carousel.js');
	}

	/**
	 * registerStylesheet
	 *
	 * @param \JDocument $template
	 *
	 * @return  void
	 */
	protected static function registerStylesheet(\JDocument $template)
	{
		static::$asset->addCSS('bootstrap.min.css');
		static::$asset->addCSS('bootstrap3-adapter.min.css');
		static::$asset->addCSS('bootstrap-extend.css');
		static::$asset->addCSS('template.css');
	}

	/**
	 * registerGoogleFont
	 *
	 * @param \JDocument $template
	 *
	 * @return  void
	 */
	protected static function registerGoogleFont(\JDocument $template)
	{
	}
}
