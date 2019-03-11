<?php
include_once('../../inc/bdd.php');
$bdd = dbConnect();
if(isset($_POST['email'])){
  $login = htmlspecialchars($_POST['email']);
  $req = $bdd->prepare('SELECT user_username FROM utilisateurs WHERE user_email = ?');
  $req->execute(array($login));
  $exist = $req->rowcount();
  $req->closeCursor();
  if($exist > 0){
      $req = $bdd->prepare('DELETE FROM utilisateurs WHERE user_email = ?');
      $req->execute(array($login));
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