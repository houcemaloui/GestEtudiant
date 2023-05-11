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

 $id=$_POST['id'];

 $sql = $bdd->query("DELETE FROM  livre
  WHERE id_livre ='$id'");

 ;


 echo "C'est livre est supprimer avec succès";

?>
