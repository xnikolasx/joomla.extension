<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
/**
 * Octocats Model
 */
class OctocatsModelOctocats extends JModelItem
{
        /**
         * @var string messages
         */
        protected $messages;

        /**
         * Returns a reference to the a Table object, always creating it.
         *
         * @param       type    The table type to instantiate
         * @param       string  A prefix for the table class name. Optional.
         * @param       array   Configuration array for model. Optional.
         * @return      JTable  A database object
         * @since       2.5
         */
        public function getTable($type = 'Octocats', $prefix = 'OctocatsTable', $config = array()) 
        {
                return JTable::getInstance($type, $prefix, $config);
        }
 
        /**
         * Get the message
         * @return string The message to be displayed to the user
         */
        public function getMsg($id = 1) 
        {
                if(!is_array($this->messages)) {
                        $this->messages = array();
                }

                if(!isset($this->messages[$id])) {
                        $id = JRequest::getInt('id');

                        $table = $this->getTable();

                        $table->load($id);

                        $this->messages[$id] = $table->koan;
                }

                return $this->messages[$id];
        }
}