<?php

error_reporting(E_ALL ^ E_NOTICE);  
  
require "vendor/autoload.php";

$db = new MysqliDb ('localhost', 'root', '', 'users');

$db->where('user_login', $_GET['login_admin']);
$db->where('user_password', $_GET['passwrod_admin']);
$result_two = $db->get('users');

if ($result_two) {
    ?>
    <form action="" method="get">
        <input type="text" name="inf_image" placeholder="Rasm manzilini kiriting">
        <input type="text" name="inf_name" placeholder="Sarlavha kiriting">
        <input type="text" name="inf_text" placeholder="Ma`lumotni kiriting">
        <button type="submit" name="add_inf" value="information">Kiritish</button>
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

if ($_GET['add_inf'] == "information") {
    $data = Array ("inf_image " => $_GET['data_image'],
                      "inf_name" => $_GET['data_name'],
                      "inf_text" => $_GET['data_text'],
                    );
    $db->insert('informations', $data);                
}

?>

<a href="index.php"><button>Ortga qaytish</button></a>