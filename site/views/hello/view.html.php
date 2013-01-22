<?php
/**
 * @package    xnikolasx
 * @subpackage Components
 * @link https://github.com/xnikolasx/joomla.extension
 * @license    GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
 *
 * @package    HelloWorld
 */

class HelloViewHello extends JView
{
	function display($tpl = null)
	{
		$greeting = "Hello, World!";
		$this->assignRef( 'greeting', $greeting );

		parent::display($tpl);
	}
}