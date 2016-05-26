<?php
/**
 * Part of ihealth project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Astra\Application;

use Joomla\String\StringHelper;
use Windwalker\DI\Container;
use Windwalker\System\ExtensionHelper;

/**
 * Class Template
 *
 * @since 1.0
 */
class Template
{
	/**
	 * Property instances.
	 *
	 * @var  array
	 */
	protected static $instances = array();

	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected static $name = '';

	/**
	 * Property asset.
	 *
	 * @var  \Windwalker\Helper\AssetHelper
	 */
	protected static $asset = null;

	/**
	 * Property template.
	 *
	 * @var  \JDocumentHtml
	 */
	protected static $template = null;

	/**
	 * Property params.
	 *
	 * @var  \JRegistry
	 */
	protected static $params = null;

	/**
	 * getInstance
	 *
	 * @param   string $name
	 *
	 * @throws  \InvalidArgumentException
	 * @return  Template
	 */
	public static function getInstance($name = '')
	{
		if (!$name)
		{
			throw new \InvalidArgumentException('Give me a name to get instance.');
		}

		if (empty(self::$instances[$name]))
		{
			self::$instances[$name] = new static;
		}

		return self::$instances[$name];
	}

	/**
	 * init
	 *
	 * @param   \JDocument $template JDcoument object.
	 * @param   \JRegistry $params   Template params.
	 *
	 * @return  Template
	 */
	public function init(\JDocument $template, \JRegistry $params)
	{
		include_once static::windwalkerPath();

		static::$template = $template;
		static::$params   = $params;
		static::$asset    = Container::getInstance('tpl_' . static::$name)->get('helper.asset');

		// Reset AssetHelper
		static::$asset->resetPaths();

		static::$asset->setDoc($template);

		static::registerStylesheet($template);
		static::registerScript($template);

		return $this;
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
		\JHtmlBootstrap::framework();
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
		\JHtmlBootstrap::loadCss();

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
		// Do some stuff by override.
	}

	/**
	 * addFavicon
	 *
	 * @return  void
	 */
	protected static function addFavicon()
	{
		// Favicon
		if ('html' == static::$template->getType())
		{
			static::$template->addFavicon(static::$template->baseurl . '/templates/' . static::$template->template . '/images/favicon.ico');
		}
	}

	/**
	 * replaceBootstrap3
	 *
	 * @param \JDocument $template
	 *
	 * @return  void
	 */
	protected static function replaceBootstrap3(\JDocument $template)
	{
		$scripts =& $template->_scripts;

		foreach ($scripts as $key => $script)
		{
			if (strpos($key, 'media/jui/js/bootstrap.js') !== false)
			{
				unset($scripts[$key]);
			}
		}


		// Add Bootstrap 3 & adapter
		static::$asset->addCss('bootstrap.css');
		static::$asset->addCss('bootstrap3-adapter.css');
	}

	/**
	 * windwalkerPath
	 *
	 * @return  string
	 */
	protected static function windwalkerPath()
	{
		return JPATH_ADMINISTRATOR . '/components/com_' . static::$name . '/src/init.php';
	}

	/**
	 * getPath
	 *
	 * @param string $path
	 *
	 * @return  string
	 */
	public static function getPath($path)
	{
		return static::$template->baseurl . '/templates/' . static::$template->template . '/' . $path;
	}

	/**
	 * getTemplate
	 *
	 * @return  \JDocumentHtml
	 */
	public static function getTemplate()
	{
		return self::$template;
	}

	/**
	 * setTemplate
	 *
	 * @param   \JDocumentHtml $template
	 *
	 * @return  void
	 */
	public static function setTemplate($template)
	{
		self::$template = $template;
	}

	/**
	 * getParam
	 *
	 * @param string $key
	 * @param mixed  $default
	 *
	 * @return  mixed
	 */
	public static function getParam($key = null, $default = null)
	{
		if ($key && $default)
		{
			return static::$template->params->get($key, $default);
		}
		elseif ($key)
		{
			return static::$template->params->get($key);
		}
		else
		{
			return static::$template->params;
		}
	}

	/**
	 * getOs
	 *
	 * @return  string
	 */
	public static function getOs()
	{
		jimport('joomla.environment.browser');

		$browser = \JBrowser::getInstance();

		return $browser->getPlatform();
	}

	/**
	 * isHome
	 *
	 * @return  bool
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
