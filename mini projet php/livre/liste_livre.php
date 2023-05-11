
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf8" >
	<link rel="stylesheet" type="text/css" href="../style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-btn {margin-bottom:10px;}

body{
  	margin:0px;
	padding: 0px;
   background-image: url(../background.jpg);
   background-repeat: no-repeat;
 
   background-size: 100%;}
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
}
</style>
</head>
<?php
        try
{
 
    $bdd = new PDO('mysql:host=localhost;dbname=iset;charset=utf8','abc','123');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

     $reponse = $bdd->query('SELECT * FROM livre');
?>
<body>

<div align="center" >
<br><br><br><br><br><br><br><br><br>
<h1><strong>liste des livres </strong></h1>
<center><table id="myTable" >
    
        <th>ID LIVRE</th><th></th>
<th></th>
        <th>titre</th><th></th>
<th></th>
        <th>auteur</th><th></th>
<th></th>
        <th>DATE edition</th><th></th>
<th></th>
        <th>editeur</th><th></th>
<th></th>
        <th>descripsion</th><th></th>
<th></th>
<th>Quantité</th><th></th>
<th></th>      
    </tr>
<?php

while($donnees =  $reponse->fetch())
{
?>
    <tr>
         <th><?php echo $donnees['id_livre']; ?></th>

<th></th>
<th></th>
<th><?php echo $donnees['titre']; ?></th>
<th></th>
<th></th>
<th><?php echo $donnees['auteur']; ?></th><th></th>
<th></th>
<th><?php echo $donnees['dateedition']; ?></th><th></th>
<th></th>
<th><?php echo $donnees['editeur']; ?></th><th></th>
<th></th>
<th><?php echo $donnees['description']; ?></th>
<th></th><th></th><th><?php echo $donnees['quantite']; ?></th>

    </tr>
    
<?php

}
$reponse->closeCursor();
?>
</a>
    
</table></center>

    </a>
    <a href="verif_livre.php">
    <button class="w3-button w3-white w3-border w3-border-red w3-round-large">commander un livre </button>
    </a>