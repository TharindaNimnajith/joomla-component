<?php
/**
 * @package    joomla_component
 *
 * @author     ASUS <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Form\Form;
use Joomla\CMS\MVC\Model\AdminModel;

/**
 * Joomla_component
 *
 * @package  joomla_component
 * @since    1.0.0
 */
class Joomla_componentModelJoomla_component extends AdminModel
{
	/**
	 * @var   string  The prefix to use with controller messages.
	 *
	 * @since 1.0.0
	 */
	protected $text_prefix = 'COM_JOOMLA_COMPONENT';

	/**
	 * Method to get the record form.
	 *
	 * @param   array    $data      An optional array of data for the form to interrogate.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  Form|boolean    A Form object on success, false on failure
	 * @since   1.0.0
	 */
	public function getForm($data = [], $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm(
			'com_joomla_component.joomla_component',
			'joomla_component',
			['control' => 'jform', 'load_data' => $loadData]
		);

		if (empty($form))
		{
			return false;
		}

		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return    mixed    The data for the form.
	 *
	 * @throws  Exception
	 * @since   1.0.0
	 *
	 */
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = Factory::getApplication()->getUserState(
			'com_joomla_component.edit.joomla_component.data',
			[]
		);

		if (empty($data))
		{
			$data = $this->getItem();
		}

		return $data;
	}
}
