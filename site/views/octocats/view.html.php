<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class OctocatsViewHelloWorld extends JView
{
        // Overwriting JView display method
        function display($tpl = null) 
        {
                // Assign data to the view
                $this->octocat_galaxy = "http://blogs.developerforce.com/developer-relations/files/2011/08/parallax_octocat.png";
                $this->octocat_msg = 'I\'m the Jedi Octocat!!!';
 
                // Display the view
                parent::display($tpl);
        }
}