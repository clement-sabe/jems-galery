<?php session_start();
	if (isset($_GET['logout'])) {
		// vide le tableau session
		$_SESSION['user'] = [];
		// vide la variable session
		unset($_SESSION['user']);
		// détruit la session
		session_destroy();
	}

	if (!empty($_POST['login']) && !empty($_POST['password'])) {
		$_SESSION['user'] = ['auth' => true, 'login' => $_POST['login']];
	}

 ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/calendar/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css"> 
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/ppa.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">



</head>

<body>
    <header class="bg-secondary fixed-top">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse justify-content-center align-items-around" id="navbarSupportedContent">
                <ul class="nav-pills bg-secondary navbar-nav w-100 mt-2">

                    <li class="nav-item mx-auto">
                        <a class="nav-link text-white" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link text-white" href="ppa.php">Peintures/portraits acryliques</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link text-white" href="illust.php">illustrations</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link text-white" href="pixelart.php">pixel art</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link text-white" href="logo.php">Logos</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link text-white" href="divers.php">divers</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link text-white" href="contact.php">contact</a>
                    </li>
                    <?php
  if (isset($_SESSION['user'])) {
?>
  <div class="ml-auto border border-light rounded-circle text-light d-flex mt-1">
    <span class="m-auto"><?= /* Première lettre en MAJ */ ucfirst($_SESSION['user']['login'])[0] ?></span>
  </div>
<?php
  }
?>
                </ul>
            </div>

        </nav>
     
    </header>
    <div class="row text-center">
    <div class="col-md-12 title ">
    <a class="welcome" href="index.php"><h1 class="galery " >La galerie de Jems</h1></a>
    
    <span class="d-flex justify-content-center">
    <?php
  // affiche le lien de connexion si la session est absente
  if (!isset($_SESSION['user'])) {
?>
   <a class="login mr-5 mt-2 btn btn-secondary action-button" role="button" href="login.php">se connecter</a>
 <?php }else {
    ?>   <a class="subscribe btn mr-5 mt-2 btn btn-secondary action-button" href="login.php?logout=true">Se déconnecter</a>
     <?php   }
?>       <a class="subscribe btn btn-secondary mt-2 action-button"role="button" href="subscribe.php">s'inscrire</a>
    </span>
</div>
</div>