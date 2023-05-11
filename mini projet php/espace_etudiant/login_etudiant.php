<?php session_start(); ?>

<!DOCTYPE html>
<html>
<!-- BEGIN: Head-->

<head>

    <title>Login</title>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .box {
        border: 1px solid #c4c4c4;
        padding: 30px 35px 10px 25px;

        margin: 130px auto;
        width: 360px;
    }

    h1.box-logo a {
        text-decoration: none;
    }

    h1.box-title {
        color: #AEAEAE;
        background: #f8f8f8;
        font-weight: 300;
        padding: 15px 25px;
        line-height: 30px;
        font-size: 25px;
        text-align: center;
        margin: -27px -26px 26px;
    }

    .box-button {
        border-radius: 5px;
        background: #d2483c;
        text-align: center;
        cursor: pointer;
        font-size: 19px;
        width: 100%;
        height: 51px;
        padding: 0;
        color: #fff;
        border: 0;
        outline: 0;
    }

    .box-register {
        text-align: center;
        margin-bottom: 0px;
    }

    .box-register a {
        text-decoration: none;
        font-size: 12px;
        color: #666;
    }

    .box-input {
        font-size: 14px;
        background: #fff;
        border: 1px solid #ddd;
        margin-bottom: 30px;
        padding-left: 10px;
        border-radius: 5px;
        width: 347px;
        height: 50px;
    }

    .box-input:focus {
        outline: none;
        border-color: #5c7186;
    }

    .sucess {
        text-align: center;
        color: white;
    }

    .sucess a {
        text-decoration: none;
        color: #58aef7;
    }

    p.errorMessage {
        background-color: #e66262;
        border: #AA4502 1px solid;
        padding: 5px 10px;
        color: #FFFFFF;
        border-radius: 3px;
    }
    </style>

</head>


<body>



    <form class="box" action="verif_etudiant.php" method="post" name="login">

        <h1 class="box-title">Connexion</h1>
        <input type="text" class="box-input" name="log" placeholder="Nom d'utilisateur">
        <input type="password" class="box-input" name="pwd" placeholder="Mot de passe">
        <input type="submit" value="Connexion " name="submit" class="box-button">
        <p class="box-register">Vous êtes nouveau ici? <a href="inscrit.html">S'inscrire</a></p>
        <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
    </form>
    <br>

    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>


</html>