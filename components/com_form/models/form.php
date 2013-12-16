<?php
/**
 * Hello ������ ��� "Hello" ���������
 *
 * @package �����
 * @package component/model/models/hello.php
 * @link 	URL ������
 * @license ��� �������� ( GNU/GPL )
 */


// Check to ensure this file is included in Joomla!
defined ('_JEXEC') or die();

jimport( 'joomla.application.component.model' );

/**
 * Form Model
 *
 * @package    �����
 * @subpackage Components
 */
class FormModelForm extends JModel
{
    /**
    * Gets the greeting
    * @return string The greeting to be displayed to the user
    */
    function getGreeting()
    {
        return 'Hello, World!';
    }
}