<meta charset="utf8">
<link rel="stylesheet" type="text/css" href="../style.css">

<?php
$servername = "localhost";
$username = "abc";
$password = "123";
$dbname = "iset";

try {
  $conn = new PDO("mysql:host=$servername;dbname=iset;charset=utf8", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$titre=$_POST['title'];
$auteur=$_POST['auteur'];
$date=$_POST['date'];
$editeur=$_POST['editeur'];
$description=$_POST['description'];
$quantite=$_POST['quantite'];

  $sql = "INSERT INTO livre( titre, auteur, dateedition, editeur, description , quantite) 
    VALUES ('$titre','$auteur','$date','$editeur','$description','$quantite')";
  
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


?>