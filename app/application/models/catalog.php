<?php
//Модель вывода каталога
 class Application_Models_Catalog
  {	  
	  function getList()
	  {  
	  	 $son = new mysqli(HOST, USER, PASSWORD, NAME_BD);
		 $result = $son->query("SELECT * FROM product");
		
	
		 while ($row = $result->fetch_assoc())
		 {		 
			$сatalogItems[]=array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"price"=>$row['price'],
				"url"=>$row['url']				
			);
		  }
		
		
		 return $сatalogItems; 
	  }
  } 
 /*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>  
  