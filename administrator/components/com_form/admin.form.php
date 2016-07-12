<?php
// ������ ������ �����������
defined( '_JEXEC' ) or die( 'Restricted access' );

// Make sure the user is authorized to view this page
$user = & JFactory::getUser();
if (!$user->authorize( 'com_form', 'manage' )) {
    $mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
}

// ��������� �������� ����������
require_once( JPATH_COMPONENT.DS.'controller.php' );

// ��� ������������� ��������� ����������� ����������
if($controller = JRequest::getVar( 'controller' )) {
    require_once( JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php' );
}

// ������� ����������
$classname    = 'FormsController'.$controller;
$controller   = new $classname( );

// ��������� ������ Request
$controller->execute( JRequest::getVar( 'task' ) );

// �������������, ���� ������� � �����������
$controller->redirect();

?>