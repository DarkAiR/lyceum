<?php
/**
 * @package    Autor
 * @subpackage Components
 * @link http://autor.net/
 * @license    GNU/GPL
*/

// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Form Component
 *
 * @package    Form
 */

class FormViewForm extends JView
{
    function display($tpl = null)
    {
        $model = $this->getModel();
        $greeting = $model->getGreeting();
        $this->assignRef( 'greeting',	$greeting );

        parent::display($tpl);
    }
}
?>