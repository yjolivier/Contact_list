<?php 
$arraydata = json_decode(file_get_contents('contacts.json'),true);

?>
<!DOCTYPE Html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contacts</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style type="text/css">
            p{
                display: flex;
                justify-content: space-between;
                color: #fff
            }
            p a{
                text-decoration: none;
                color: #c0c0c0;
                font-size: 1.2em;
            }
            p a:hover{ transform: scale(1.2); }

        </style>
        <!--Scrypt-->
        <script src="https://kit.fontawesome.com/f0abbeb7fb.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container d-flex justify-content-center">
            <div class="col-sm-8 container-content" >
                <header class="listheader row">
                    <span class="col-sm-6 description"><h2>Contacts</h2></span>
                    <span class="col-sm-6 add d-flex justify-content-end"><a href="index.php"><i class="fas fa-plus"></i></a></span>
                </header>
                <?php 
                    //asort($arraydata);
                    foreach ($arraydata as $key => $value) {?>
                <p style="padding: 13px; font-size: 1.2em; border-bottom: 1px solid #ccc; ">
                    <?php
                        echo $value['nom'].' '.$value['prenom'].'<a href=\'profil.php?id='.$value['id'].'\''.'><i class="far fa-eye"></i></a>';
                    }
                    ?>
                </p>
            </div>
        </div>
    </body>
</html>