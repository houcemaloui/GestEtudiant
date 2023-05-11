
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf8" >
	<link rel="stylesheet" type="text/css" href="../style.css">
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
$NCE=@$_POST['NCE'];
$nom=@$_POST['nom'];
$prenom=@$_POST['prenom'];
$date=@$_POST['date'];
$sexe=@$_POST['sexe'];
$etat=@$_POST['etat'];
     $reponse = $bdd->query("SELECT * FROM etudiant 
    
      WHERE NCE =$NCE");
?>
<body>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><table id="myTable" >
    
        <th>ID</th><th></th>
<th></th>
        <th>NOM</th><th></th>
<th></th>
        <th>PRENOM</th><th></th>
<th></th>
        <th>DATE DE NAISSANCE</th><th></th>
<th></th>
        <th>SEXE</th><th></th>
<th></th>
        <th>ETAT CIVIL</th><th></th>
<th></th>
        
    </tr>
<?php
while($donnees =  $reponse->fetch())
{
?>
    <tr>
         <th><?php echo $donnees['NCE']; ?></th>

<th></th>
<th></th>
<th><?php echo $donnees['Nom']; ?></th>
<th></th>
<th></th>
<th><?php echo $donnees['Prenom']; ?></th><th></th>
<th></th>
<th><?php echo $donnees['Date_naiss']; ?></th><th></th>
<th></th>
<th><?php echo $donnees['Sexe']; ?></th><th></th>
<th></th>
<th><?php echo $donnees['Statut']; ?></th>


    </tr>
<?php
}
$reponse->closeCursor();
?>

</table></center>