<?php
// require_once("src/function.php");
// require_once("database/connexion.php");
global $connect;
if (isset($_POST['btn'])) {
    $pseudo = $_POST['pseudo'];
    $pwd = $_POST['password'];
    if ($pseudo == "Cathy" && $pwd =="Gamine") {
        header("Location:pages/accueil.php");
    }else {
        echo "ERREur";
    }
    
}
var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Accueil</title>
</head>
<body>
    <div class="background">
        <div class="text-header"></div>
        <div class="form-group">
            <form action="" method="post">
                <input type="text" name="pseudo" id="" class="input input1" placeholder="Pseudo" autocomplete="off">
                <br>
                <input type="password" name="password" class="input input2" id="" placeholder="Password">
                <button type="submit" name="btn" class="btn">Connecter</button>
            </form>
        </div>
    </div>
</body>
</html>