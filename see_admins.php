<?php

error_reporting(E_ALL ^ E_NOTICE);  
  
require "vendor/autoload.php";

$db = new MysqliDb ('localhost', 'root', '', 'users');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="add_admin.php"><button>Amdin qo'shish</button></a>
    <a href="update_admin.php"><button>Amdin ma'lumotlarini o'zgartirish</button></a>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
        </tr>

        <?php
        $user = $db->get('users');
        foreach ($user as $key => $value) {
        ?>            
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['user_name']?></td>
                <td><?=$value['user_surname']?></td>
            </tr>            
        <?php
        }
        ?>
        

<a href="index.php"><button>Ortga qaytish</button></a>        
    
</body>
</html>