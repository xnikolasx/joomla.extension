<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
/**
 * HelloWorld Model
 */
class OctocatsModelOctocats extends JModelItem
{
        /**
         * @var string msg
         */
        protected $msg;
 
        /**
         * Get the message
         * @return string The message to be displayed to the user
         */
        public function getMsg() 
        {
                $octokitten_koans = array(
                        "Как же я смогу показать Вам Дзен, если Вы сначала не опустошили Вашу чашу?",
                        "Если ты действительно любишь меня, подойди и обними меня.",
                        "Неужели ты считаешь меня нечеловеком только потому, что я не пью отравы?",
                        "Хочешь получить просветление - сначала пожертвуй ленью.",
                        "Хочешь победить - создай условия выгодные тебе.",
                        "Чем же может быть хлопок одной ладони?",
                );
                $this->msg = $octokitten_koans[array_rand($octokitten_koans)];
                return $this->msg;
        }
}