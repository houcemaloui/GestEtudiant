<meta charset="utf8" >
	<link rel="stylesheet" type="text/css" href="../style.css">
  
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=iset;charset=utf8', 'abc', '123');
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());}

 $NCE=$_POST['NCE'];

 $sql = $bdd->query("DELETE FROM  etudiant
  WHERE NCE ='$NCE'");

 ;


 echo "C'est etudiant est supprimer avec succès";

?>
