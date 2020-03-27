<!DOCTYPE Html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insertion Contact</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container d-flex justify-content-center">
            <div class="col-sm-8 container-content" >
                <header class="row ncheader">
                    <span class="col-sm-6 description"><h2>New Contact</h2></span>
                    <span class="col-sm-6 menu-btn d-flex justify-content-end"><a href="listing.php">cancel</a></span>
                </header>

                <hr class="my-2">

                <form role="form" name="inscription" method="post" action="connexion.php">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Nom" id="nom" name ="nom">
                        </div>
                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Prenoms" id="prenoms" name ="prenoms">
                        </div>
                        <div class="col-12">
                            <select class="form-control" id="sexe" name ="sexe">
                                <option selected value="none">Sexe</option>
                                <option value="F">F</option>
                                <option value="M">M</option>
                            </select>
                        </div>
                        <div class="col-12">
                        <input type="number" class="form-control" placeholder="Age"  id="age" name="age" >
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-12">
                        <input type="email" class="form-control" placeholder="Email:"  id="email" name="email" >
                        </div>
                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Contact:"  id="contact" name="contact" >
                        </div>
                    </div>
                    </br>
                    <button type="submit" class="btn btn-primary" id="valider" name ="valider" >Valider</button>
                </form>
            </div>
        </div>
    </body>
</html>