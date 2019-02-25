<?php
include_once('../../inc/bdd.php');
$bdd = dbConnect();
if(isset($_POST['token']) && isset($_POST['newpwd']) && isset($_POST['email'])){
	$email = htmlspecialchars($_POST['email']);
	$token = htmlspecialchars($_POST['token']);
	$newpwd = htmlspecialchars($_POST['newpwd']);
	$req = $bdd->prepare('SELECT user_username FROM utilisateurs WHERE user_email = ? AND user_tokenreset = ?');
    $req->execute(array($email, $token));
    $reqinfo = $req->fetchAll();
    $exist = $req->rowcount();
    if($exist > 0){
    	$req = $bdd->prepare('UPDATE utilisateurs SET user_pwd = ?, user_tokenreset = NULL WHERE user_email = ?');
   	 	$req->execute(array($newpwd, $email));
   	 	$req->closeCursor();
   	 	$success = true;
        $message = "Mot de passe changé.";
    }
}
else if(isset($_POST['email'])){
	$email = htmlspecialchars($_POST['email']);
	$req = $bdd->prepare('SELECT user_username FROM utilisateurs WHERE user_email = ?');
    $req->execute(array($email));
    $exist = $req->rowcount();
    $req->closeCursor();
    if($exist > 0){
    	$token = openssl_random_pseudo_bytes(16);
		$token = bin2hex($token);
		$tmppwd = openssl_random_pseudo_bytes(16);
		$tmppwd = bin2hex($tmppwd);
    	$req = $bdd->prepare('UPDATE utilisateurs SET user_tokenreset = ?, user_pwd = ? WHERE user_email = ?');
   	 	$req->execute(array($token, $tmppwd, $email));
   	 	$req->closeCursor();
   	 	//mail($email, 'Reset password', 'http://localhost/tpintegration/resetpassword.php?token='.$token.'&email='.$email);
   	 	$success = true;
        $message = "Email envoyé.";    
   	}
    else{
    	$success = false;
        $message = "L'email n'est pas reconnue dans la base de donnée.";
    }
}
else{
    $success = false;
    $message = "Une erreur est survenue.";
}
$retour["success"] = $success;
$retour["message"] = $message;
echo json_encode($retour);