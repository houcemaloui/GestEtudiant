<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .w3-btn {
        margin-bottom: 10px;
    }

    body {
        margin: 0px;
        padding: 0px;
        background-image: url(../background.jpg);
        background-repeat: no-repeat;

        background-size: 100%;
    }

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

     $reponse = $bdd->query('SELECT * FROM etudiant');
?>

<body>

    <div align="center">
        <br><br><br><br><br><br><br><br><br>
        <h1><strong>liste des étudiants </strong></h1>
        <center>
            <table id="myTable">

                <th>ID</th>
                <th></th>
                <th></th>
                <th>NOM</th>
                <th></th>
                <th></th>
                <th>PRENOM</th>
                <th></th>
                <th></th>
                <th>DATE DE NAISSANCE</th>
                <th></th>
                <th></th>
                <th>SEXE</th>
                <th></th>
                <th></th>
                <th>ETAT CIVIL</th>
                <th></th>
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
                    <th><?php echo $donnees['Prenom']; ?></th>
                    <th></th>
                    <th></th>
                    <th><?php echo $donnees['Date_naiss']; ?></th>
                    <th></th>
                    <th></th>
                    <th><?php echo $donnees['Sexe']; ?></th>
                    <th></th>
                    <th></th>
                    <th><?php echo $donnees['Statut']; ?></th>


                </tr>

                <?php

}
$reponse->closeCursor();
?>
                </a>

            </table>
        </center>
        <br><br><br><br><br><br>
        <form action="Liste_etudiants_critere.php" method="POST">
            <center>
                <table align="">
                    <tr>
                        <td></td>
                        <td><strong>Chercher par sexe :</strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <select id="etat" class="w3-input w3-border" name="etat" required>
                                <option></option>
                                <option value="h">homme</option>
                                <option value="f">femme</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="w3-button w3-white w3-border w3-border-red w3-round-large">chercher</button>
                            </a>
                        <td>


                </table>
            </center>
        </form>