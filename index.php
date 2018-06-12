<head>
	<meta charset="utf-8">
	<title>Fédéjeux</title>
	<link rel="shortcut icon" href="logo-fedejeux.png">

</head>


<?php


$view = $_GET['view'];
switch($view)
	{		

		case "menu" : 
			include("salles.html");
		break;

		case "fort" : 
			include("fdj_V2_accueil.html");
		break; 

		case "montaigne" : 
			include("fdj_V2_accueil.html");
		break;

		case "chapiteau":
			include("fdj_V2_accueil.html");
		break;

		case "connexion":
			include("connexion.html");
		break;

	}
//if (!($_SESSION['etat']=='connected'))
//	include("connexion.html")

?>
