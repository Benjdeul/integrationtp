<?php 
header('Content-Type: application/json');
@ini_set('display_errors', 'on');
function dbConnect(){
	try {
    	$bdd = new PDO('mysql:host=localhost;dbname=tpintegration;charset=utf8', 'root', '');
    	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	return $bdd;
	} catch (PDOException $e) {
    	echo 'Échec lors de la connexion : ' . $e->getMessage();
	}
}
?>
