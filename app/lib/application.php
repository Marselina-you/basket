<?php
 class Lib_Application //класс маршрутизатор, подбирает нужный контролер для обработки данных
 {
    private function getRoute() //получить маршрут .htaccess формирует ссылку таким образом, что в параметры гет запроса попадает требуемый маршрут
    {
	   if (empty($_GET['route']))
       {
           $route = 'index';
	   }
         else //кликнули по какой либо  ссылке
	   {
            $route = $_GET['route'];	//	$route = /product/abricos	
            //проверим не к продукту ли из каталога пытается обратиться пользователь:	
			$rt=explode('/', $route); //$rt(массив с полученными значениями)= product abricos
			$route=$rt[(count($rt)-1)]; //cчитаем количество элементов в массиве, вычитаем 1, в остатке abricos	
			//product/monitor перенаправляем только на monitor
			
			
			
			if($rt[(count($rt)-2)]=="product"){	//если до /monitor есть /product/		
				 
//то будем искать полученный в каталоге id продукта по запрашиваемой ссылке
				 $son = new mysqli(HOST, USER, PASSWORD, NAME_BD);
		       $result = $son->query("SELECT * FROM product WHERE url like '$route'");
			
				 if($row = $result->fetch_object())
				 {
					 $_REQUEST['id']=$row->id; //находим какой id у abricosa
					 $route="product"; //а в $route возвращаем обратно продукт, чтоб по новой можно было жать по продуктам
				 }
				
			}
			
	   }
		return $route;
    }

    private function getController()//получить контролер
	{       
       $route=$this->getRoute();
	   $path_contr = 'application/controllers/';
       $controller= $path_contr. $route . '.php'; //application/controllers/index.php
       return $controller;
    }
	 
	public function getView()//получить представление для контролера
	{
       $route=$this->getRoute();
	   $path_view = 'application/views/' ;
       $view = $path_view . $route . '.php';
       return $view;
    }
	 
	public function Run()// запуск процесса обработки данных
	{ 
	   session_start(); //открываем сессию
	   $controller=$this->getController();//получаем контролер
	   $cl=explode('.', $controller); // application/controllers/index   .php
	   
	   $cl=$cl[0]; //отбрасываем расширение, получаем только путь до контролера
                  //application/controllers/index
	   $name_contr=str_replace("/", "_", $cl);//заменяем в пути слеши на подчеркивания, таким образом получая название класса
	               // application_controllers_index
	   $contr=new $name_contr;//создаем экземпляр класса контролера
       $contr->index();//запускаем контролер на выполнение (index() должна быть у любого контролера)
	   $member=$contr->member;//получаем переменные контролера
	    
		
	   return $member;
	
	}
 }
 
 /*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>