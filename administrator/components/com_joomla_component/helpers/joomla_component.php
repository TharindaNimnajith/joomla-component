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

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

/**
 * Joomla_component helper.
 *
 * @package  joomla_component
 * @since    1.0.0
 */
class Joomla_componentHelper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function addSubmenu($vName)
	{
		HTMLHelper::_(
			'sidebar.addEntry',
			Text::_('COM_JOOMLA_COMPONENT'),
			'index.php?option=com_joomla_component&view=joomla_components',
			$vName === 'joomla_components'
		);
	}
}
