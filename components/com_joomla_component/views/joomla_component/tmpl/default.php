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
use Joomla\CMS\Layout\FileLayout;

/** @var Joomla_componentViewJoomla_component $this */

HTMLHelper::_('script', 'com_joomla_component/script.js', ['version' => 'auto', 'relative' => true]);
HTMLHelper::_('stylesheet', 'com_joomla_component/style.css', ['version' => 'auto', 'relative' => true]);

$layout       = new FileLayout('joomla_component.page');
$data         = [];
$data['text'] = 'Hello Joomla!';
echo $layout->render($data);
