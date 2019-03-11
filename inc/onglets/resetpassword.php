<?php
include_once('../../inc/bdd.php');
$bdd = dbConnect();
if(isset($_POST['token']) && isset($_POST['email'])){
	$content;
}
else if(isset($_POST['email'])){
	$content;
}
else{
  $content;
}