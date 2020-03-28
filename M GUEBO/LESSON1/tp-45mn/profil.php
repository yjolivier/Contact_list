<?php

/**
 * Binary search 
 * TODO: Documentation on binary search
 * 
 */
$firstlet = '';
require 'model.php';

 if (isset($_GET["id"])){
    
    $personid = (int) $_GET["id"];

    $person = get_id_binary_search($arr=null, $personid);
    if($person!=false){
    //var_dump($person);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/f0abbeb7fb.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="container-content col-sm-8">
            <header class="profilheader row">
                <span class="col-sm-4 menu-btn"><a href="index.php">Contact</a></span>
                <div class="col-sm-4 description" align="center">
                    <div class="rounded-circle firstletter">
                        <h2>
                            <?php
                                echo (substr ($person["nom"], 0 , 1));
                            ?>
                        </h2>
                    </div>
                    <span>
                        <h2><?= $person['nom'].' '.$person['prenom']?></h2>
                    </span>
                </div>
                <span class="col-sm-2 menu-btn d-flex justify-content-end"><a href="delete.php?id=<?= $person['id']?>">Delete</a></span>
                <span class="col-sm-2 menu-btn d-flex justify-content-end"><a href="update.php?id=<?= $person['id']?>">Edith</a></span>
            </header>

            <hr class="my-2">

            <table width="100%" border="1" cellspacing="0" cellpadding="15" class="profiltable">
                <tr>
                    <td>Sexe</td>
                    <td colspan="2"><?= $person['sexe']?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td colspan="2"><?= $person['age']?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td colspan="2"><?= $person['email']?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td colspan="2"><?= $person['contact']?></td>
                </tr>
            </table>
        </div>
    </div>
    </body>
</html>
<?php
    }

 }else{
    echo "Sorry, you need to provide an ID";
 }
?>