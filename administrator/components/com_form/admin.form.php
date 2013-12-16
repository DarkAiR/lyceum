<?php
// прямой доступ отсутствует
defined( '_JEXEC' ) or die( 'Restricted access' );

// Make sure the user is authorized to view this page
$user = & JFactory::getUser();
if (!$user->authorize( 'com_form', 'manage' )) {
    $mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
}

// Добавляем основной контроллер
require_once( JPATH_COMPONENT.DS.'controller.php' );

// При необходимости добавляем специальный контроллер
if($controller = JRequest::getVar( 'controller' )) {
    require_once( JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php' );
}

// Создаем контроллер
$classname    = 'FormsController'.$controller;
$controller   = new $classname( );

// Выполняем задачу Request
$controller->execute( JRequest::getVar( 'task' ) );

// Переадресация, если указано в контроллере
$controller->redirect();

?>