<?php
//Модель вывода каталога
 class Application_Models_Product
  {	  
	  function getProduct($id)
	  { 

	  	$son = new mysqli('localhost','root','root', 'burrito');
		$result = $son->query("SELECT * FROM product WHERE id='$id'");

		 
		 
	
		 if($row = $result->fetch_object())
		 {		 
		
			$product=array(
				"id"=>$row->id,
				"name"=>$row->name,
				"foto"=>$row->foto,
				"types"=>$row->types,
				"value"=>$row->value,	
				"ingredients"=>$row->ingredients,
				"weight"=>$row->weight		
						
				
				
			);
			
		  }
		  return $product; 
	  }
  } 
 /*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>  
  