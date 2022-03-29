<?php

error_reporting(E_ALL ^ E_NOTICE);  
  
require "vendor/autoload.php";

$db = new MysqliDb ('localhost', 'root', '', 'users');

$db->where('user_login', $_GET['login_admin']);
$db->where('user_password', $_GET['passwrod_admin']);
$result = $db->get('users');

if ($result) {
    ?>
    
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Login</th>
                <th>Paroll</th>
            </tr>

            <?php
            $user = $db->get('users');
            foreach ($user as $key => $value) {
            ?>            
                <tr>
                    <form action="" method="get">
                        <td><input type="text" name="user_id" value="<?=$value['id']?>"></td>
                        <td><input type="text" name="user_name" value="<?=$value['user_name']?>"></td>
                        <td><input type="text" name="user_surname" value="<?=$value['user_surname']?>"></td>
                        <td><input type="text" name="user_login" value="<?=$value['user_login']?>"></td>
                        <td><input type="text" name="user_password" value="<?=$value['user_password']?>"></td>
                        <td><button type="submit" name="must_id" value="update">Ozgartirish</button></td>
                    </form>
                </tr>    
                        
            <?php
            }
            ?>
    <?php
}

elseif ($_GET['must_id'] == "update") {

    $data = Array (
                   "user_name" => $_GET['user_name'],
                   "user_surname" => $_GET['user_surname'],
                   "user_login" => $_GET['user_login'],
                   "user_password" => $_GET['user_password']
  );
$db->where('id', $_GET['user_id']);
$db->update('users', $data);
?>
    
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Login</th>
                <th>Paroll</th>
            </tr>

            <?php
            $user = $db->get('users');
            foreach ($user as $key => $value) {
            ?>            
                <tr>
                    <form action="" method="get">
                        <td><input type="text" name="user_id" value="<?=$value['id']?>"></td>
                        <td><input type="text" name="user_name" value="<?=$value['user_name']?>"></td>
                        <td><input type="text" name="user_surname" value="<?=$value['user_surname']?>"></td>
                        <td><input type="text" name="user_login" value="<?=$value['user_login']?>"></td>
                        <td><input type="text" name="user_password" value="<?=$value['user_password']?>"></td>
                        <td><button type="submit" name="must_id" value="update">Ozgartirish</button></td>
                    </form>
                </tr>    
                        
            <?php
            }
            ?>

}

else{
    ?>
    <form action="" method="get">
        <input type="text" name="login_admin" placeholder="Lginni kiriting">
        <input type="password" name="passwrod_admin" placeholder="Parolni kiriting">
        <button type="submit">Kiriting</button>
    </form>
    <?php
}

?>          

<a href="index.php"><button type="submit">Ortga qaytish</button></a>        
