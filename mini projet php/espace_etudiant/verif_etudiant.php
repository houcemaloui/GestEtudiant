<?php
 session_start();
?>
<html>
<head>

</head>
<body>



<?php

 $login=$_POST['log'];
 $pass1=$_POST['pwd'];
    try
    {
     
        $bdd = new PDO('mysql:host=localhost;dbname=iset;charset=utf8','abc','123');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }


$reponse=$bdd->query("SELECT* FROM etudiant WHERE loginetudiant= '$login' AND mot_passe='$pass1'");
$etat = $reponse->rowCount();
$donnees = $reponse->fetch();



If ($etat!=0)
{
if( $pass1 == $donnees['mot_passe'])
{
$_SESSION ['nom']=$donnees['nom'] ;
$_SESSION ['prenom']= $donnees['prenom'] ;
$_SESSION['logietudiant']=$login;
$_SESSION['mot_passe']=$pass1;

// redirection vers la page profile.php
echo "<script language=\"javascript\">";
 echo "window.location='home_etudiant.html'";

echo "</script>";
}
else
{
echo"<i>Mot de passe incorrect</i>";
}
} else
echo " login errone ! " ;
$reponse->closeCursor();

?>


