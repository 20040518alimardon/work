<?php

error_reporting(E_ALL ^ E_NOTICE);  
  
require "vendor/autoload.php";

$db = new MysqliDb ('localhost', 'root', '', 'users');

// if ($_GET['qaysi'] == "true") {
     ?>
<!--    <a href="select.php"><button type="submit" name="kir" value="kirish">Kirish</button></a>
        <button type="submit" name="add" value="qoshish">Qo`shish</button> -->
    <?php    
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 NEWS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="nav">

        <!-- footer -->
        <div class="footer">

            <div class="footerlogo">

                <div class="Logotip_SQUARY">

                    <div class="Block_SQUARY">
                        <span id="SQUARY_S">5</span>
                    </div>

                    <div class="LOGOTIP">
                        <span>NEWS</span>
                    </div>

                </div>

                <div class="footer_menu">

                    <div class="footer_menu_type">

                        <div class="footer_type_Overview" id="footer_menu_pages">
                            <a href=""><span>So'ngi yangiliklar</span></a>
                        </div>

                        <div class="footer_type_Demos" id="footer_menu_pages">
                            <a href=""><span>Sport habarlarai</span></a>
                        </div>

                        <div class="footer_type_Pages" id="footer_menu_pages">
                            <a href=""><span>Jahon yangiliklari</span></a>
                        </div>

                        <div class="footer_type_Docs" id="footer_menu_pages">
                            <a href=""><span>Ijtimoiy tarmoq habarlari</span></a>
                        </div>

                    </div>

                    <div class="footer_menu_button" id="button_1">
                        <a href="see_admins.php"><button>ADMINLAR</button></a>
                    </div>

                    <div class="footer_menu_button" id="button_2">
                        <a href="add_information.php"><button>MA'LUMOT QO'SHISH</button></a>
                    </div>

                </div>



            </div>

            

        </div>
        <!-- end footer -->

        <!-- navar -->
        <div class="navbar">

            <div class="container">

                <div class="Navbar_reklama">

                    <div class="The_new_GPS">

                        <div class="Visual_Positioning">
                            <span">The new GPS by drones - <br>Visual Positioning System
                        </span"></div>

                        <div class="Lorem_GPS">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris <br>leo erat, posuere eget neque a, lobortis auctor est. Curabitur ac <br>libero quis felis pulvinar posuere.</span>
                        </div>

                    </div>

                    <div class="Asosiy_Reklama">

                        <div class="reklama_image">
                            <img src="image/photo-83.jpg" alt="">
                        </div>

                        <div class="reklama_button">

                            <div class="button_one">
                                <button></button>
                            </div>

                            <div class="button_one">
                                <button></button>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- end navbar -->

    </div>

    <div class="contant">

        <!-- <form action="" method="get">
            <button type="submit" name="qaysi" value="true">Card qo`shish</button>
        </form> -->
    

        <div class="cards">
            <div class="row">

                <?php
                $users = $db->get('informations');    
                foreach ($users as $key => $value) {
                ?>

                    <div class="card">

                        <div class="image">
                            <img src="<?=$value['inf_image']?>" alt="">
                        </div>

                        <div class="text_name">
                            <p><?=$value['inf_name']?></p>
                        </div>
                        
                        <div class="text">
                            <p><?=$value['inf_text']?></p>
                        </div>

                    </div>

                <?php
                }
                ?>

            </div>

        </div>

    </div>

    
    
</body>
</html>

