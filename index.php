<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des postes</title>
    <link href="style.css" rel="stylesheet" media="all" type="text/css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <meta name="description" content="Liste des posts Oja, Un forum pas comme les autres."/>
    <meta name="keywords" content="liste,posts,forum,oja,institut g4,projet,oren,jonas,anthony,php,partage,connaissances">
    <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('checkpassword').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
                document.getElementById('submit').disabled = false;

            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
                document.getElementById('submit').disabled = true;

            }
        }
    </script>

</head>
<body>

<?php
    if($_GET['error'] == 1) { ?>
        <div class="message">


                <h1> Mot de passe ou email incorrect</h1>


        </div>
        <?php
    }
    else if($_GET['error'] == 2) {
        ?>
        <div class="message">

            <h1>Adresse mail ou pseudo déjà existant.</h1>

        </div>
        <?php
    }
    else if($_GET['error'] == 3) {
        ?>
        <div class="message">
            <h1>Veuillez vous reconnecter si vous souhaitez retourner sur le forum.</h1>
        </div>
        <?php
    }
?>


<header>
    <img src="../forum-oja/img/logo.png" alt= "Logo" id="logohome"/>
</header>

<div class="colGlobal">
    <div class="col">
    <h2>Se connecter</h2>
    <form action="login.php" method="post">
        <div><p>Adresse Mail : <input type="email" name="email" /></div>
        <div><p>Mot de Passe : <input type="password" name="password" /></p></div>
        <p><input class="button" type="submit" value="Se Connecter"></p>
    </form>
</div>
<br>
<div class="col">
    <h2>S'inscrire</h2>
    <form action="subscribe.php" method="post">
        <div><p>Nom : <input type="text" name="name" required /></p></div>
        <div><p>Prénom : <input type="text" name="firstname" required /></p></div>
        <div><p>Pseudo : <input type="text" name="nickname" required /></p></div>
        <div><p>Adresse Mail : <input type="email" name="email"  required /></p></div>
        <div><p>Mot de Passe : <input type="password" name="password" id="password" onkeyup='check()' required /></p></div>
        <div><p>Vérification du Mot de Passe : <input type="password" name="checkpassword" id="checkpassword" onkeyup='check()' required /></p>
            <span id='message'></span>
        </div>
        <p><input class="button" type="submit" id="submit" value="S'Inscrire"></p>
    </form>
</div>
</div>


</body>
</html>