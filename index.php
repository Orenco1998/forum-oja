<head><link href="style.css" rel="stylesheet" media="all" type="text/css"> </head>
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

<header>
    <img src="../forum-oja/img/logo.png" alt= "Logo" id="logo"/>
</header>

<div class="colGlobal">
    <div class="col">
    <h2>Se connecter</h2>
    <form action="login.php" method="post">
        <div><p>Adresse Mail : <input type="text" name="name" /></div>
        <div><p>Mot de Passe : <input type="text" name="password" /></p></div>
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