<?php
/**
 * Part of Astra project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Astra\Helper;

/**
 * Class DocumentHelper
 *
 * @since 1.0
 */
abstract class DocumentHelper
{
	/**
	 * getPureTitle
	 *
	 * @param   string $title
	 *
	 * @return  string
	 */
	public static function getPureTitle($title)
	{
		$title = explode('|', $title);

		return $title[0];
	}

	/**
	 * getMenuParams
	 *
	 * @return  \JRegistry
	 *
	 * @throws \Exception
	 */
	public static function getMenuParams()
	{
		$menu = \JFactory::getApplication()->getMenu();

		return $menu->getActive()->params;
	}
}
