<?php
include_once('../inc/bdd.php');
if(isset($_GET['login']) && isset($_GET['pwd'])){
    $bdd = dbConnect();
	$login = htmlspecialchars($_GET['login']);
	$pwd = htmlspecialchars($_GET['pwd']);
	$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE user_username = ? AND user_pwd = ?');
    $req->execute(array($login, $pwd));
    $nbrow = $req->rowcount();
    $req->closeCursor();
    if($nbrow > 0){
        $success = true;
    	$message = "";
    }
    else{
    	$success = false;
    	$message = "Compte inexistant ou mauvais mot de passe!";
    }
}
else{
    $success = false;
    $message = "Une erreur est survenue!";
}

$retour["success"] = $success;
$retour["message"] = $message;
echo json_encode($retour);
?>