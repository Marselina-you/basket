<?php
//модель авторизации
 class Application_Models_Auth
  {	  
	//проверка данных авторизации
	  function ValidData($login,$pass)
	  {
	  	$son = new mysqli(HOST, USER, PASSWORD, NAME_BD);
		$result = $son->query("SELECT * FROM user WHERE login='$login' and pass='$pass'");

		
		if(mysqli_num_rows($result))
		    { 
			$_SESSION["Auth"]=true;  
			$_SESSION["User"]=$login;  
			} 
		else $_SESSION["Auth"]=false;  

		if (!$_SESSION["Auth"]){
			$msg="<em><span style='color:red'>Данные введены не верно!</span></em>";
		}	
		else {
			$msg="<em><span style='color:green'>Вы верно ввели данные!</span></em>";
			$unVisibleForm=true;
		}
		
		$result=array("unVisibleForm"=>$unVisibleForm,
						"userName"=>$login,
						"msg"=>$msg,
						"login"=>$login,
						"pass"=>$pass,);
		return $result;
	  }
  } 
  /*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>  
  