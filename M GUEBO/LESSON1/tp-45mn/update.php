<?php 
	require 'model.php';
    
    $msgboxe = '';
	if (isset($_GET["id"])){
    
    $personid = (int) $_GET["id"];

    $person = get_id_binary_search($arr=null, $personid);

    if (isset($_POST['modifier'])){
        $person['nom'] = htmlspecialchars($_POST['updatenom']);
        $person['prenom'] = htmlspecialchars($_POST['updateprenom']);
        $person['sexe'] = $_POST['updatesexe'];
        $person['age'] = htmlspecialchars($_POST['updateage']);
        $person['email'] = htmlspecialchars($_POST['updateemail']);
        $person['contact'] = htmlspecialchars($_POST['updatecontact']);
        $msgboxe = "Bravo Vous avez bien modifié";
	}
	$apdarray = updelement($array = null,  $personid, $person);
	$newcontactliste = json_encode($apdarray);
?>


<!DOCTYPE Html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Contact</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style type="text/css">
            .msgboxe{
                color: blue;
                font-weight: bold; 
            }
        </style>
    </head>
    <body>
        <div class="container d-flex justify-content-center">
            <div class="col-sm-8 container-content" >
                <header class="row ncheader">
                    <span class="col-sm-6 description"><h2>Editing</h2></span>
                    <span class="col-sm-6 menu-btn d-flex justify-content-end"><a href="profil.php?id=<?=$person['id']?>">Back</a></span>
                </header>

                <hr class="my-2">

                <form role="form" name="modifier" method="post">
                    <div class="row">
                        <?php if($person!=false){ ?>

                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Nom" id="updatenom" name ="updatenom" value="<?= $person['nom'] ?>">
                        </div>
                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Prenom" id="updateprenom" name ="updateprenom" value="<?= $person['prenom'] ?>">
                        </div>
                        <div class="col-12">
                            <select class="form-control" id="updatesexe" name ="updatesexe">
                                <option selected value="none">Sexe</option>
                                <option value="F">F</option>
                                <option value="M">M</option>
                            </select>
                        </div>
                        <div class="col-12">
                        <input type="number" class="form-control" placeholder="Age"  id="updateage" name="updateage" value="<?= $person['age'] ?>">
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-12">
                        <input type="email" class="form-control" placeholder="Email:"  id="updateemail" name="updateemail" value="<?= $person['email'] ?>">
                        </div>
                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Contact:"  id="updatecontact" name="updatecontact" value="<?= $person['contact'] ?>">
                        </div>
                    </div>
                    </br>
                    <button type="submit" class="btn btn-primary" id="modifier" name ="modifier" >Edit</button>
                </form>
            <p class="msgboxe">
                <?= $msgboxe ?>
            </p>  
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
