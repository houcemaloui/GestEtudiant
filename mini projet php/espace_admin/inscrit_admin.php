<meta charset="utf8" >
	<link rel="stylesheet" type="text/css" href="../style.css">
  
<?php
$servername = "localhost";
$username = "abc";
$password = "123";
$dbname = "iset";

try {
  $conn = new PDO("mysql:host=$servername;dbname=iset;charset=utf8", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$login=$_POST['login'];
$pwd=$_POST['pwd'];

  $sql =  " INSERT INTO user(Nom,Prenom,loginadmin,mot_passe) VALUES ('$nom','$prenom','$login','$pwd')";
  
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


?>

