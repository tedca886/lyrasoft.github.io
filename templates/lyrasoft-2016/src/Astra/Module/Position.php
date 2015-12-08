<?php
/**
 * Part of Astra project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Astra\Module;

use Astra\Application\Template;

/**
 * Class Position
 *
 * @since 1.0
 */
class Position
{

	/**
	 * countPositions
	 *
	 * @param array $positions
	 *
	 * @return  array
	 */
	public static function countPositions($positions = array())
	{
		$tpl = Template::getTemplate();
		$p   = array();

		foreach ($positions as $position)
		{
			$count = $tpl->countModules($position);

			if ($count)
			{
				$p[$position] = $count;
			}
		}

		return $p;
	}

	/**
	 * getBlockPositions
	 *
	 * @param string $block
	 *
	 * @return  array
	 */
	public static function getBlockPositions($block)
	{
		$tpl = Template::getTemplate();
		$p   = array();

		foreach (range(1, 4) as $num)
		{
			$position = $block . '-' . $num;
			$count    = $tpl->countModules($position);

			if ($count)
			{
				$p[$position] = $count;
			}
		}

		return $p;
	}

	/**
	 * render
	 *
	 * @param string $block
	 *
	 * @return  string
	 */
	public static function render($block)
	{
		$positions = static::getBlockPositions($block);
		$count     = count($positions);

		$defaultChromeStyle = Template::getParam('defaultChromeStyle', 'xhtml');

		switch ($count)
		{
			case 1 :
				$span = 12;
				break;

			case 2 :
				$span = 6;
				break;

			case 3 :
				$span = 4;
				break;

			case 4 :
				$span = 3;
				break;

			default :
				$span = 3;
				break;
		}

		$tags = array();

		foreach ($positions as $position => $num)
		{
			$html   = '<jdoc:include type="modules" name="' . $position . '" style="' . $defaultChromeStyle . '" />';
			$html   = '<div class="span' . $span . '">' . $html . '</div>';
			$tags[] = $html;
		}

		return implode("\n", $tags);
	}

	/**
	 * countMainBodyWidth
	 *
	 * @return  int
	 */
	public static function countMainBodyWidth()
	{
		$leftColSpan  = static::countLeft();
		$rightColSpan = static::countRight();

		return 12 - ($leftColSpan + $rightColSpan);
	}

	/**
	 * countLeft
	 *
	 * @return  int
	 */
	public static function countLeft()
	{
		$tpl = Template::getTemplate();

		return $tpl->countModules('left')  ? $tpl->params->get('left_col_width', 3)  : 0;
	}

	/**
	 * countRight
	 *
	 * @return  int
	 */
	public static function countRight()
	{
		$tpl = Template::getTemplate();

		return $tpl->countModules('right') ? $tpl->params->get('right_col_width', 3) : 0;
	}
}
