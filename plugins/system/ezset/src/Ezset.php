<?php
/**
 * Part of Ezset project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */
use Joomla\String\StringHelper;
use Windwalker\System\ExtensionHelper;

/**
 * Class Ezset
 *
 * @since 1.0
 */
class Ezset
{
	/**
	 * Get Easyset Instance.
	 *
	 * @return PlgSystemEzset
	 */
	public static function getInstance()
	{
		return PlgSystemEzset::getInstance();
	}

	/**
	 * Detect is this page are frontpage?
	 *
	 * @return  boolean Is frontpage?
	 */
	public static function isHome()
	{
		$langPath = null;
		$lang = \JFactory::getLanguage();

		// For multi language
		if (\JPluginHelper::isEnabled('system', 'languagefilter'))
		{
			$tag = $lang->getTag();
			$langCodes = \JLanguageHelper::getLanguages('lang_code');

			$langPath = $langCodes[$tag]->sef;
		}

		$uri  = \JUri::getInstance();
		$root = $uri::root(true);

		// Get site route
		$route = StringHelper::substr($uri->getPath(), StringHelper::strlen($root));

		// Remove index.php
		$route = str_replace('index.php', '', $route);

		if ($langPath)
		{
			$params = ExtensionHelper::getParams('plg_system_languagefilter');

			if ($tag == $lang->getDefault() && $params->get('remove_default_prefix', 0))
			{
				$langPath = '';
			}

			if (trim($route, '/') == $langPath && ! $uri->getVar('option'))
			{
				return true;
			}
		}
		else
		{
			if (! trim($route, '/') && ! $uri->getVar('option'))
			{
				return true;
			}
		}

		return false;
	}
}
