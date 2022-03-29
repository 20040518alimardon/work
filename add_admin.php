<?php

error_reporting(E_ALL ^ E_NOTICE);  
  
require "vendor/autoload.php";

$db = new MysqliDb ('localhost', 'root', '', 'users');

$db->where('user_login', $_GET['login_admin']);
$db->where('user_password', $_GET['passwrod_admin']);
$result_one = $db->get('users');

if ($result_one) {
    ?>
    <form action="" method="get">
        <input type="text" name="user_name" placeholder="Ismni kiriting">
        <input type="text" name="user_surname" placeholder="Familiyani kiriting">
        <input type="text" name="user_login" placeholder="Loginni kiriting">
        <input type="text" name="user_password" placeholder="Parolni kiriting">
        <button type="submit" name="add_user" value="add">Qo'shish</button>
    </form>
    <?php    
}else{
    ?>
    <form action="" method="get">
        <input type="text" name="login_admin" placeholder="Lginni kiriting">
        <input type="password" name="passwrod_admin" placeholder="Parolni kiriting">
        <button type="submit">Kiriting</button>
    </form>
    <?php
}

if ($_GET['add_user'] == "add") {
    $data = Array ("user_name" => $_GET['user_name'],
                      "user_surname" => $_GET['user_surname'],
                      "user_login" => $_GET['user_login'],
                      "user_password" => $_GET['user_password']
                    );
    $db->insert('users', $data);                
}

?>

<a href="see_admins.php"><button>Ortga qaytish</button></a>