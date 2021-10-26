<?php
require_once "config.php"; //файл настроек
$router=new Lib_Application; //создаем объект, который будет искать нуджные контролеры
$member=$router->Run();//Начинаем поиск нужного контролера

if(isset($member)) //если контролер вернул какието переменные, то делаеми их доступными для публичной части
  foreach ($member as $key => $value)
    {
        $$key= $value; 
        // Возможно здесь кому-то будет не понятно назначение оператора $$.
        // Приведу пример
        //  $a="b";
        //  $$a=1;
        //  echo $b;
        // В результате на выходе получим: 1
        // Можно провести аналогию оператора $$ с указателями в C++

    }
    
    if($_SESSION["Auth"] && $_SESSION["role"]=="1"){    
        require_once "admin/adminbar.php";
        }   
require_once "function.php";//подключаем функционал сайта
require_once "./template/index.php";//подключаем шаблон сайта 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.min.css">
    <title>Child of the Sun</title>
</head>
<body>
    <div class="container-fluid d-flex">
        <div class="d-flex flex-column col-lg-6">
            <h1>Дитя Солнца</h1>
            <h2>Ли Браскет</h2>
<div>Вы все время путаете разработку на CMS и разработку на фреймворках.
Это два совершенно разных подхода как в плане инструментов, так и в плане компетентности разработчика.
В первом случае вам платят за то, что вы умеет немножко рулить рулем и жать на газ\тормоз, во вторым - за то, что вы умеете разобрать\собрать тачку, сделать ее мощнее и может быть даже выиграть серьезную гонку.

Джанго не сырой и не плохой. Он такой же как и любой промышленный web-фреймворк коих десятки и сотни.
Но поскольку вы никогда о них ничего слышали и не понимаете разницу, то разрабатывать на них вам будет крайне сложно.
Backend разработчик на Python (Django)</div>
            <?php
            $rt = array('orange', 'banana', 'apple', 'peanapple', 'pumpkin');
              
$route=$rt[(count($rt)-1)];
echo $route;
$son = new mysqli('localhost','root','root', 'burrito');
            $select1 = $son->query("SELECT   types_id, types   FROM categories ");
            while($info = $select1->fetch_array()){
           
               echo'<div class="block-product-right d-flex flex-column  col-xl-4 col-lg-4 col-md-12 col-sm-12 justify-content-center">
                        <div class="block-product-right-title d-flex justify-content-center align-items-center">
                            <div class="block-product-right-title__name whitecolor fontSans size22px"><a href="/category/'.$info['types_id'].'">'.$info['types'].'</a></div>';
                        }
            ?>
        </div>
    </div>
</body>
</html>
