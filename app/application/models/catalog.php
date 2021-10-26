<?php
//Модель вывода каталога
 class Application_Models_Catalog
  {	  
	  function getList()
	  {  
	  	 $son = new mysqli(HOST, USER, PASSWORD, NAME_BD);
		 
		 $result1 = $son->query("SELECT * FROM product");
		
		
	
		
		 while ($row = $result1->fetch_assoc())
		 {		 
			$сatalogItems[]=array(
				"id"=>$row['id'],
				"foto"=>$row['foto'],
				"url"=>$row['url'],
				"types"=>$row['types'],
				"types_id"=>$row['types_id'],
				"name"=>$row['name'],
				"value"=>$row['value'],	
				"ingredients"=>$row['ingredients'],
				"weight"=>$row['weight']		
						
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
 
  