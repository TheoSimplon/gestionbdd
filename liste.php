<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<?php
  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
session_start();
if(isset($_SESSION['login']) && isset($_SESSION['mdp'])) { 
?>
   <header>     
<img src="logo.jpg" alt="logo">
</header>
<form  method="get" action="search.php">
  <table width="599" border="1">
    <tr>
      <th>Rechercher
      <input name="var1" type="text" id="var1">
      <input type="submit" value="Rechercher"></th>
    </tr>
  </table>
</form>
<div class="bouton">
<button class="bouton1" onclick="self.location.href='logout.php'">Se deconnecter</button>
<button class="bouton1" onclick="self.location.href='formulaireutilisateur.php?id=0'">Creer Jeu</button>
</div>
<?php
include 'fonction.php';
include 'fonctiontable.php';
 

$headers = getHeaderTable();
		$title = getalltitle();
		afficherTableau($title, $headers);}
		else {
			echo 'vous n\'etes pas connecté';
			?> <a href="index.php">Se connecter </a>
			<?php 
		}
?>




</body>
</html>