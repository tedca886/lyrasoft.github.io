<?php 
/**
 * @package     Windwalker.Framework
 * @subpackage  Component
 * @author      Simon Asika <asika32764@gmail.com>
 * @copyright   Copyright (C) 2013 Asikart. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Controller tailored to suit most form-based admin operations.
 *
 * @package     Windwalker.Framework
 * @subpackage  Component
 */
class AKControllerForm extends JControllerForm
{
	/**
	 * The URL view list variable.
	 *
	 * @var    string
	 */
	protected $view_list = '';

	/**
	 * The URL view item variable.
	 *
	 * @var    string
	 */
	protected $view_item = '';

	/**
	 * Component name.
	 *
	 * @var string
	 */
	protected $component = '';

	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 */
	public function getModel($name = null, $prefix = null, $config = array('ignore_request' => true))
	{
		$name   = $name ? $name : ucfirst($this->view_item);
		$prefix = $prefix ? $prefix : ucfirst($this->component) . 'Model';

		return parent::getModel($name, $prefix, $config);
	}

	/**
	 * Method to save a record.
	 *
	 * @param   string  $key     The name of the primary key of the URL variable.
	 * @param   string  $urlVar  The name of the URL variable if different from the primary key (sometimes required to avoid router collisions).
	 *
	 * @return  boolean  True if successful, false otherwise.
	 *
	 * @since   11.1
	 */
	public function save($key = null, $urlVar = null)
	{
		$app   = JFactory::getApplication();
		$input = $app->input;
		$data  = $input->post->get('jform', array(), 'array');

		// For Fields group
		// Convert jform[fields_group][field] to jform[field] or JTable cannot bind data.
		// ==========================================================================================
		$data = AKHelper::_('array.pivotFromTwoDimension', $data);

		$input->post->set('jform', $data);
		$input->set('jform', $data);
		JRequest::setVar('jform', $data);

		return parent::save($key, $urlVar);
	}

	/**
	 * Method to run batch operations.
	 *
	 * @param   object $model The model of the component being processed.
	 *
	 * @return  boolean     True if successful, false otherwise and internal error is set.
	 */

	public function batch($model = null)
	{
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

		// Set the model
		$model = $this->getModel();

		// Preset the redirect
		$this->setRedirect(JRoute::_('index.php?option=' . $this->option . '&view=' . $this->view_list . $this->getRedirectToListAppend(), false));

		return parent::batch($model);
	}

	/**
	 * Gets the URL arguments to append to an item redirect.
	 *
	 * @param   integer $recordId The primary key id for the item.
	 * @param   string  $urlVar   The name of the URL variable for the id.
	 *
	 * @return  string  The arguments to append to the redirect URL.
	 */
	protected function getRedirectToItemAppend($recordId = null, $urlVar = 'id')
	{
		$append = parent::getRedirectToItemAppend($recordId, $urlVar);

		foreach ($this->allow_url_params as $param):
			if (JRequest::getVar($param))
			{
				$append .= "&{$param}=" . JRequest::getVar($param);
			}
		endforeach;

		return $append;
	}

	/**
	 * Gets the URL arguments to append to a list redirect.
	 *
	 * @return  string  The arguments to append to the redirect URL.
	 */
	protected function getRedirectToListAppend()
	{
		$append = parent::getRedirectToListAppend();

		foreach ($this->allow_url_params as $param):
			if (JRequest::getVar($param))
			{
				$append .= "&{$param}=" . JRequest::getVar($param);
			}
		endforeach;

		return $append;
	}

	/**
	 * Set a URL for browser redirection.
	 *
	 * @param   string $url  URL to redirect to.
	 * @param   string $msg  Message to display on redirect. Optional, defaults to value set internally by controller, if any.
	 * @param   string $type Message type. Optional, defaults to 'message' or the type set by a previous call to setMessage.
	 *
	 * @return  JController  This object to support chaining.
	 */
	public function setRedirect($url, $msg = null, $type = null)
	{
		$task           = $this->getTask();
		$redirect_tasks = $this->redirect_tasks;

		if (!$this->redirect)
		{
			$this->redirect = AKHelper::_('uri.base64', 'decode', JRequest::getVar('return'));
		}

		if ($this->redirect && in_array($task, $redirect_tasks))
		{
			return parent::setRedirect($this->redirect, $msg, $type);
		}
		else
		{
			return parent::setRedirect($url, $msg, $type);
		}
	}
}
