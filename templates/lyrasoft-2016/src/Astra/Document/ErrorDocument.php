<?php
/**
 * Part of ihealth project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Astra\Document;

use JDocument;

\JDocument::getInstance('html');

/**
 * Class ErrorDocument
 *
 * @since 1.0
 */
class ErrorDocument extends \JDocumentHTML
{
	/**
	 * Error Object
	 *
	 * @var    object
	 * @since  11.1
	 */
	protected $_error;

	/**
	 * Property type.
	 *
	 * @var  string
	 */
	public $_type = 'html';

	/**
	 * Class constructor
	 *
	 * @param   array $options Associative array of attributes
	 *
	 * @since   11.1
	 */
	public function __construct($options = array())
	{
		parent::__construct($options);

		// Set mime type
		$this->_mime = 'text/html';

		// Set document type
		$this->_type = 'html';

		$doc = \JFactory::getDocument();

		$this->_scripts     = $doc->_scripts;
		$this->_styleSheets = $doc->_styleSheets;

		$version = new \JVersion;

		$this->mediaVersion = $version->getMediaVersion();
	}

	/**
	 * Set error object
	 *
	 * @param   object $error Error object to set
	 *
	 * @return  boolean  True on success
	 *
	 * @since   11.1
	 */
	public function setError($error)
	{
		if ($error instanceof \Exception)
		{
			$this->_error = & $error;

			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Render the document
	 *
	 * @param   boolean $cache  If true, cache the output
	 * @param   array   $params Associative array of attributes
	 *
	 * @return  string   The rendered data
	 *
	 * @since   11.1
	 */
	public function render($cache = false, $params = array())
	{
		// If no error object is set return null
		if (!isset($this->_error))
		{
			return;
		}

		// Set the status header
		\JFactory::getApplication()->setHeader('status', $this->_error->getCode() . ' ' . str_replace("\n", ' ', $this->_error->getMessage()));
		$file = 'error.php';

		// Check template
		$directory = isset($params['directory']) ? $params['directory'] : 'templates';
		$template  = isset($params['template']) ? \JFilterInput::getInstance()->clean($params['template'], 'cmd') : 'system';

		if (!file_exists($directory . '/' . $template . '/' . $file))
		{
			$template = 'system';
		}

		// Set variables
		$this->baseurl    = \JUri::base(true);
		$this->template   = $template;
		$this->debug      = isset($params['debug']) ? $params['debug'] : false;
		$this->error      = $this->_error;
		$params['params'] = \JFactory::getApplication()->getTemplate(true)->params;

		// Load
		$params['file'] = 'error.php';

		$this->parse($params);
		$data = $this->_renderTemplate();

		parent::render();

		return $data;
	}

	/**
	 * Render the backtrace
	 *
	 * @return  string  The contents of the backtrace
	 *
	 * @since   11.1
	 */
	public function renderBacktrace()
	{
		$contents  = null;
		$backtrace = $this->_error->getTrace();

		if (is_array($backtrace))
		{
			ob_start();
			$j = 1;

			echo '<table cellpadding="0" cellspacing="0" class="table table-striped">';
			echo '	<tr>';
			echo '		<td colspan="3" class="TD"><strong>Call stack</strong></td>';
			echo '	</tr>';
			echo '	<tr>';
			echo '		<td class="TD"><strong>#</strong></td>';
			echo '		<td class="TD"><strong>Function</strong></td>';
			echo '		<td class="TD"><strong>Location</strong></td>';
			echo '	</tr>';

			for ($i = count($backtrace) - 1; $i >= 0; $i--)
			{
				echo '	<tr>';
				echo '		<td class="TD">' . $j . '</td>';

				if (isset($backtrace[$i]['class']))
				{
					echo '	<td class="TD">' . $backtrace[$i]['class'] . $backtrace[$i]['type'] . $backtrace[$i]['function'] . '()</td>';
				}
				else
				{
					echo '	<td class="TD">' . $backtrace[$i]['function'] . '()</td>';
				}

				if (isset($backtrace[$i]['file']))
				{
					echo '		<td class="TD">' . $backtrace[$i]['file'] . ':' . $backtrace[$i]['line'] . '</td>';
				}
				else
				{
					echo '		<td class="TD">&#160;</td>';
				}

				echo '	</tr>';

				$j++;
			}

			echo '</table>';

			$contents = ob_get_contents();

			ob_end_clean();
		}

		return $contents;
	}
}
