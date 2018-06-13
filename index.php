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
			include("./salles.html");
		break;

		case "fort" : 
			include("./graphe.html?vue=fort");
		break; 

		case "montaigne" : 
			include("./graphe.html?vue=montaigne");
		break;

		case "chapiteau":
			include("./graphe.html?vue=montaigne");
		break;

		case "connexion":
			include("./connexion.html");
		break;

	}
//if (!($_SESSION['etat']=='connected'))
//	include("connexion.html")

?>
