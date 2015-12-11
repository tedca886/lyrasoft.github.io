<?php
/**
 * Part of lyrasoft project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Astra\Helper;

/**
 * The StyleHelper class.
 *
 * @since  {DEPLOY_VERSION}
 */
class StyleHelper
{
	/**
	 * getBodyClass
	 *
	 * @return  string
	 *
	 * @throws \Exception
	 */
	public static function getBodyClass()
	{
		$input = \JFactory::getApplication()->input;

		$option = str_replace('com_', '', $input->get('option'));
		$view = $input->get('view');
		$layout = $input->get('layout', 'default');

		return "option-$option view-$view layout-$layout";
	}

	/**
	 * getPathClass
	 *
	 * @return  string
	 */
	public static function getPathClass()
	{
		$path = \JUri::getInstance()->getPath();

		$base = \JUri::root(true);

		$class = substr($path, strlen($base));

		$class = str_replace('.html', '', $class);

		return \JFilterOutput::stringURLSafe(trim($class, '/'));
	}
}
