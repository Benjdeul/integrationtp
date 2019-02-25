<?php
include_once('../../inc/bdd.php');
$bdd = dbConnect();
if(isset($_POST['email'])){
	$email = htmlspecialchars($_POST['email']);
	$req = $bdd->prepare('SELECT user_username FROM utilisateurs WHERE user_email = ?');
    $req->execute(array($email));
    $reqinfo = $req->fetchAll();
    $exist = $req->rowcount();
    $req->closeCursor();
    if($exist > 0){
    	$token = openssl_random_pseudo_bytes(16);
		$token = bin2hex($token);
    	$req = $bdd->prepare('UPDATE utilisateurs SET user_tokenreset = ? WHERE user_email = ?');
   	 	$req->execute(array($token, $email));
   	 	mail($email, 'Reset password', 'http://localhost/tpintegration/resetpassword.php?token='.$token.'&email='.$email);
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