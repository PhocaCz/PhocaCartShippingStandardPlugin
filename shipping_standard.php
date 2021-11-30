<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
jimport( 'joomla.plugin.plugin' );
jimport( 'joomla.filesystem.file');
jimport( 'joomla.html.parameter' );
//jimport('joomla.log.log');
//JLog::addLogger( array('text_file' => 'com_phocacart_error_log.php'), JLog::ALL, array('com_phocacart'));
//phocacartimport('phocacart.utils.log');

JLoader::registerPrefix('Phocacart', JPATH_ADMINISTRATOR . '/components/com_phocacart/libraries/phocacart');

class plgPCSShipping_Standard extends JPlugin
{
	protected $name 	= 'shipping_standard';

	function __construct(& $subject, $config) {
		parent :: __construct($subject, $config);
		$this->loadLanguage();
	}
	/*
	function onPCSbeforeProceedToShipping(&$proceed, $eventData) {

		if (!isset($eventData['pluginname']) || isset($eventData['pluginname']) && $eventData['pluginname'] != $this->name) {
			return false;
		}

		$proceed = 1;
		return true;
	}

	function onPCSbeforeSetShippingForm(&$form, $paramsC, $params, $order, $eventData) {

		if (!isset($eventData['pluginname']) || isset($eventData['pluginname']) && $eventData['pluginname'] != $this->name) {
			return false;
		}

		return true;
	}

	function onPCSbeforeCheckShipping($pid, $eventData) {

		if (!isset($eventData['pluginname']) || isset($eventData['pluginname']) && $eventData['pluginname'] != $this->name) {
			return false;
		}

		return true;
	}
	function onPCSgetShippingBrancheInfoAdmin($pid, $eventData) {

		if (!isset($eventData['pluginname']) || isset($eventData['pluginname']) && $eventData['pluginname'] != $this->name) {
			return false;
		}

		return true;
	}
	*/
	/*
	function onPCSbeforeShowPossibleShippingMethod(&$active, $params, $eventData){

		if (!isset($eventData['pluginname']) || isset($eventData['pluginname']) && $eventData['pluginname'] != $this->name) {
			return false;
		}

		// Shipping plugin can disable/deactivate current shipping method in possible shipping method list based on own rules
		// $active = false;

		return true;

	}
	
	function onPCSonInfoViewDisplayContent($data, $eventData){

		if (!isset($eventData['pluginname']) || isset($eventData['pluginname']) && $eventData['pluginname'] != $this->name) {
			return false;
		}

		$output = array();
		$output['content'] = '';

		return $output;

	}
	*/
	
}
?>
