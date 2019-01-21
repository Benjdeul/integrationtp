<?php
session_start();
if(!empty($_SESSION)){
    header('Location: index.php');
}
if(isset($_POST['login']) && isset($_POST['pwd'])){
    $user = $_POST['login'];
    $pwd = $_POST['pwd'];
    $url = "http://localhost/tpintegration/api/login/connect.php?login=".$_POST['login']."&pwd=".$_POST['pwd'];
    $json = file_get_contents($url);
    $content = json_decode($json, TRUE);
    if($content["success"] == true){
    	$_SESSION["user"] = $_POST['login'];
    	header('Location: index.php');
    }
    else{$message = $content['message'];}
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background-color: #343a40;">

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall" style="margin-top: 50px;">
                <p style="text-align: center; color: red;"><?php if(isset($message)){echo $message;}else{echo "pute";}?></p>
                <form class="form-signin" action="" method="post">
                    <input name="login" type="text" class="form-control" placeholder="Username" required autofocus>
                    <input name="pwd" type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit"  >
                        Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
