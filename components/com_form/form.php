<?php
/**
 * @package    Autor
 * @subpackage Components
 * components/com_form/form.php
 * @link http://autor.net/
 * @license    GNU/GPL
*/

// Защита от прямого обращения к скрипту

defined( '_JEXEC' ) or die( 'Restricted access' );

// Подключение файла контроллера.

require_once( JPATH_COMPONENT.DS.'controller.php' );

// Проверка или требуется определенный контроллер
if($controller = JRequest::getVar( 'controller' )) {
    require_once( JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php' );
}

// Создание класса нашего компонента
$classname    = 'FormController'.$controller;
$controller   = new $classname( );

// Выполнить задачу запроса
$controller->execute( JRequest::getVar( 'task' ) );

// Переадресация
$controller->redirect();

?>