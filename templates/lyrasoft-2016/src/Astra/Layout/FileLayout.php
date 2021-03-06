<?php
/**
 * Part of Astra project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Astra\Layout;

use Astra\Application\Template;

/**
 * Class FileLayout
 *
 * @since 1.0
 */
class FileLayout extends \JLayoutFile
{
	/**
	 * Property template.
	 *
	 * @var  \JDocumentHTML
	 */
	protected $tpl;

	/**
	 * Class init.
	 *
	 * @param string     $layoutId
	 * @param \JDocument $template
	 * @param string     $basePath
	 * @param array      $options
	 */
	public function __construct($layoutId, \JDocument $template = null, $basePath = null, $options = null)
	{
		$this->tpl = $template ? : Template::getTemplate();

		parent::__construct($layoutId, $basePath, $options);
	}

	/**
	 * Refresh the list of include paths
	 *
	 * @return  void
	 */
	protected function refreshIncludePaths()
	{
		// Reset includePaths
		$this->includePaths = array();

		parent::refreshIncludePaths();

		// (1 - lower priority) Frontend base layouts
		$this->addIncludePaths(__DIR__ . '/../../../layouts');
	}
}
