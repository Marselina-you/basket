<?php
 define('HOST', 'localhost'); 		//сервер
 define('USER', 'root'); 			//пользователь
 define('PASSWORD', 'root'); 			//пароль
 define('NAME_BD', 'life');		//база
 $son = new mysqli(HOST, USER, PASSWORD)or die("Невозможно установить соединение c базой данных".mysqli_error( ));
 mysqli_select_db($son, NAME_BD) or die ("Ошибка обращения к базе ".mysqli_error());	
 mysqli_query($son, "SET NAMES UTF8"); 

   //база устанавливаем кодировку данных в базе