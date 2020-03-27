<?php 
    $letterGroups = array();
    $oldContact = file_get_contents("contacts.json"); //Get the information in already in contact.json
    $arraydata = json_decode($oldContact, true);         //Decode the json format in object php format
    for ($i=0; $i< count($arraydata); $i++){
        $firstLetter = ucfirst(substr ($arraydata[$i]["nom"], 0 , 1));
        $letterGroups[$firstLetter][] = $arraydata[$i]; 
    }
    ksort($letterGroups);
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
                font-size: 0.9em;
            }
            p a:hover{ transform: scale(1.2); }
            .letter{padding: 8px; background-color: #444343; color: #fff; font-size: 1.2em;}

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
                    foreach ($letterGroups as $key => $persons): ?>
                    <div class="letter"><?= $key ?></div>
                    <?php
                        for ($i=0; $i < count($persons) ; $i++):
                        $person = $persons[$i];
                    ?>
                <p style="padding: 10px; font-size: 1em; border-bottom: 1px solid #ccc; ">
                    <?php
                        echo $person['nom'].' '.$person['prenom'].'<a href=\'profil.php?id='.$person['id'].'\''.'><i class="far fa-eye"></i></a>';
                    endfor;
                    endforeach;
                    ?>
                </p>
            </div>
        </div>
    </body>
</html>