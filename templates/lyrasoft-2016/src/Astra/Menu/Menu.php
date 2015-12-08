<?php
/**
 * Part of Astra project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Astra\Menu;

/**
 * Class Menu
 *
 * @since 1.0
 */
class Menu
{
	/**
	 * getMenus
	 *
	 * @param string     $menutype
	 * @param \JRegistry $params
	 *
	 * @return  array
	 */
	public static function getMenus($menutype, $params)
	{
		$app  = \JFactory::getApplication();
		$menu = $app->getMenu();

		return $menu->getItems('menutype', $params->get('menutype'));
	}

	/**
	 * render
	 *
	 * @param string $menutype
	 *
	 * @return  string
	 */
	public static function render($menutype)
	{
		ob_start();

		static::doRender($menutype);

		$output = ob_get_contents();

		ob_end_clean();

		return $output;
	}

	/**
	 * doRender
	 *
	 * @param   string $menutype
	 *
	 * @return  void
	 */
	public static function doRender($menutype)
	{
		include_once JPATH_ROOT . '/modules/mod_menu/helper.php';

		$params = new \JRegistry;

		$params->set('menutype', $menutype);
		$params->set('showAllChildren', true);

		$items  = \ModMenuHelper::getList($params);
		$active = \ModMenuHelper::getActive($params);

		$active_id = $active->id;
		$path      = $active->tree;

		self::renBegin(1);

		foreach ($items as $i => &$item)
		{
			$class = 'item-' . $item->id;

			if ($item->id == $active_id)
			{
				$class .= ' current';
			}

			if ($item->type == 'alias'
				&& in_array($item->params->get('aliasoptions'), $path)
				|| in_array($item->id, $path))
			{
				$class .= ' active';
			}

			if (($item->deeper))
			{
				$class .= $item->level < 2 ? ' dropdown' : ' dropdown-submenu';
			}

			elseif ($item->deeper)
			{
				$class .= ' deeper';
			}

			if ($item->parent)
			{
				$class .= ' parent';
			}

			if (!empty($class))
			{
				$class = ' class="' . trim($class) . '"';
			}

			echo '<li' . $class . '>';

			// Render the menu item.
			switch ($item->type)
			{
				case 'separator':
					$item->flink = '#';
					require __DIR__ . '/Type/component.php';
					break;

				case 'url':
				case 'component':
					require __DIR__ . '/Type/' . $item->type . '.php';
					break;

				default:
					require __DIR__ . '/Type/url.php';
					break;
			}

			// The next item is deeper.
			if (($item->deeper))
			{
				if ($item->level < 2)
				{
					echo '<ul class="dropdown-menu">';
				}
				else
				{
					echo '<ul class="dropdown-menu">';
				}
			}
			elseif ($item->deeper)
			{
				echo '<ul>';
			}
			// The next item is shallower.
			elseif ($item->shallower)
			{
				echo '</li>';
				echo str_repeat('</ul></li>', $item->level_diff);
			}
			// The next item is on the same level.
			else
			{
				echo '</li>';
			}
		}

		self::renEnd();
	}

	/**
	 * renBegin
	 *
	 * @param string $level
	 *
	 * @return  void
	 */
	public static function renBegin($level)
	{
		if ($level == 1)
		{
			echo '<ul class="nav">';
		}
	}

	/**
	 * renEnd
	 *
	 * @return  void
	 */
	public static function renEnd()
	{
		echo '</ul>';
	}
}
