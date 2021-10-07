<?php
Error_Reporting(E_ALL & ~E_NOTICE);//не выводить предупреждения
 function __autoload ($class_name) //автоматическая загрузка кслассов
 {
    $path=str_replace("_", "/", strtolower($class_name));//разбивает имя класска получая из него путь

    if (file_exists($path.".php")) {
   
     include_once($path.".php");//подключает php файл по полученному пути 
  }
  else{

  header("HTTP/1.0 404 Not Found");
  echo "К сожалению такой страницы не существует. [".PATH_SITE.$path.".php ]";
  exit;
  }
 }
 //константы для подключения к базе данных

 define('PATH_SITE', $_SERVER['DOCUMENT_ROOT']);    //сервер
 define('HOST', 'localhost');     //сервер
 define('USER', 'root');      //пользователь
 define('PASSWORD', 'root');      //пароль
 define('NAME_BD', 'life');    //база mysql52.hoster.ru
 
$connect = mysqli_connect(HOST, USER, PASSWORD, NAME_BD) or die ("Ошибка обращения к базе ".mysql_error());  ;
mysqli_query($connect, "SET NAMES utf8") ;

/*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>