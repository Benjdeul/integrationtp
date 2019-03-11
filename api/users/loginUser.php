<?php
include_once('../../inc/bdd.php');
$bdd = dbConnect();
if(isset($_POST['login']) && isset($_POST['pwd'])){
	$login = htmlspecialchars($_POST['login']);
	$pwd = htmlspecialchars($_POST['pwd']);
	$req = $bdd->prepare('SELECT user_username FROM utilisateurs WHERE user_email = ? AND user_pwd = ?');
    $req->execute(array($login, $pwd));
    $exist = $req->rowcount();
    $req->closeCursor();
    if($exist > 0){
        $req = $bdd->prepare('UPDATE utilisateurs SET user_lastconnexion = ? WHERE user_email = ?');
        $req->execute(array(date('Y-m-d H:i:s', time()), $login));
        $req->closeCursor();
    	$success = true;
        $message = "";
    }
    else{
    	$success = false;
        $message = "Utilisateur non existant";
    }
}
else{
    $success = false;
    $message = "Une erreur est survenue!";
}
$retour["success"] = $success;
$retour["message"] = $message;
echo json_encode($retour);