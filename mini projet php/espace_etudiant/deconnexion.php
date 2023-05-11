<?php
     try
     {
      
         $bdd = new PDO('mysql:host=localhost;dbname=iset;charset=utf8','abc','123');
     }
     catch(Exception $e)
     {
             die('Erreur : '.$e->getMessage());
     }
 session_start();
 $_SESSION = array(); //vider les données de la session
 session_destroy(); //détruire la session
 echo "<script language=\"javascript\">";
 echo "window.location='../index.php'";

echo "</script>";
?>
