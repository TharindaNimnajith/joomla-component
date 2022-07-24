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

use Joomla\CMS\MVC\Controller\AdminController;

/**
 * Joomla_components Controller.
 *
 * @package  joomla_component
 * @since    1.0.0
 */
class Joomla_componentControllerJoomla_components extends AdminController
{
	/**
	 * The prefix to use with controller messages.
	 *
	 * @var    string
	 * @since  1.0.0
	 */
	protected $text_prefix = 'com_joomla_component_joomla_component';

	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  \JModelLegacy  The model.
	 *
	 * @since   1.0.0
	 */
	public function getModel(
		$name = 'Joomla_component',
		$prefix = 'Joomla_componentsModel',
		$config = ['ignore_request' => true]
	)
	{
		return parent::getModel($name, $prefix, $config);
	}
}
