<head><link href="style.css" rel="stylesheet" media="all" type="text/css"> </head>

<header>
    <img src="../Forum-Oja/img/logo.png" alt= "Logo" id="logo"/>
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
        <div><p>Nom : <input type="text" name="name" /></p></div>
        <div><p>Prénom : <input type="text" name="firstname" /></p></div>
        <div><p>Pseudo : <input type="text" name="nickname" /></p></div>
        <div><p>Adresse Mail : <input type="text" name="email" /></p></div>
        <div><p>Mot de Passe : <input type="text" name="password" /></p></div>
        <div><p>Vérification du Mot de Passe : <input type="text" name="checkpassword" /></p></div>
        <p><input class="button" type="submit" value="S'Inscrire"></p>
    </form>
</div>
</div>