<?php
/**
 * @package    Autor
 * @subpackage Components
 * components/com_form/form.php
 * @link http://autor.net/
 * @license    GNU/GPL
*/

// ������ �� ������� ��������� � �������

defined( '_JEXEC' ) or die( 'Restricted access' );

// ����������� ����� �����������.

require_once( JPATH_COMPONENT.DS.'controller.php' );

// �������� ��� ��������� ������������ ����������
if($controller = JRequest::getVar( 'controller' )) {
    require_once( JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php' );
}

// �������� ������ ������ ����������
$classname    = 'FormController'.$controller;
$controller   = new $classname( );

// ��������� ������ �������
$controller->execute( JRequest::getVar( 'task' ) );

// �������������
$controller->redirect();

?>