<?php 
include_once('../usefullFunctions.php');
$bdd =  dbConnect();
if(isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['email'])){
	$username = htmlspecialchars($_POST['username']);
	$pwd = htmlspecialchars($_POST['pwd']);
	$email = htmlspecialchars($_POST['email']);
	$req = $bdd->prepare('SELECT user_username FROM utilisateurs WHERE user_email = ?');
    $req->execute(array($email));
    $exist = $req->rowcount();
    if($exist > 0){
    	$success = false;
    	$message = "L'utilisateur existe déjà!";
    }
    else{
    	if(isset($_POST['fbaccount_email']) && isset($_POST['fbaccount_pwd'])){
    		$req = $bdd->prepare('INSERT INTO fbaccount(fbaccount_email, fbaccount_pwd) VALUES(?, ?)');
   	 		$req->execute(array(htmlspecialchars($_POST['fbaccount_email']), htmlspecialchars($_POST['fbaccount_pwd'])));
   	 		$lastInsertId = $bdd->lastInsertId();
    	}
    	else{
    		$lastInsertId = 0;
    	}
		$req = $bdd->prepare('INSERT INTO utilisateurs(user_username, user_pwd, user_email, user_dateinscription, user_lastconnexion, user_comptefb) VALUES(?, ?, ?, ?, ?, ?)');
   	 	$req->execute(array($username, $pwd, $email, date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time()), $lastInsertId));
   	 	$success = true;
    	$message = "Utilisateur créé";
    }
}
else{
	$success = false;
	$message = "Une erreur est survenue!";
}
$retour["success"] = $success;
$retour["message"] = $message;
echo json_encode($retour);