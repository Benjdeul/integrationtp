<img style="cursor: pointer;" onclick="document.location.href='http://gsbepsi.alwaysdata.net/index.php';" src="https://codarcy.files.wordpress.com/2015/06/logo-gsb.png" alt="Logo gsb">
<h3>Bienvenue <?= $_SESSION['user'][0][2] ?> <?= $_SESSION['user'][0][1] ?> !</h3>
<h3>Fonction: <?php echo ucfirst($_SESSION['fonction']) ?></h3>
<a href="inc/logout.php" class="btn btn-danger" role="button">Deconnexion</a>