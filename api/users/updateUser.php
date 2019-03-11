<?php
include_once('../../inc/bdd.php');
$bdd = dbConnect();
if(isset($_POST['data'])){
	$data = unserialize($_POST['data']);
    foreach ($data as $k => $v) {
        $data[$k] = htmlspecialchars($v);
    }
	$req = $bdd->prepare('SELECT user_username FROM utilisateurs WHERE user_email = ?');
    $req->execute(array($data['email']));
    $exist = $req->rowcount();
    $req->closeCursor();
    if($exist > 0){
        $req = $bdd->prepare('UPDATE utilisateurs SET user_username = ?, user_email = ?, user_pwd = ? WHERE user_email = ?');
        $req->execute(array($data['username'], $data['email'], $data['pwd']));
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