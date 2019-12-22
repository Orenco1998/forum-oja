<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des utilisateurs</title>
    <link href="style.css" rel="stylesheet" media="all" type="text/css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <meta name="description" content="Liste des posts Oja, Un forum pas comme les autres."/>
    <meta name="keywords" content="liste,posts,forum,oja,institut g4,projet,oren,jonas,anthony,php,partage,connaissances">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body>

<?php
session_start();
if($_SESSION['email'] === "orencohen2652@gmail.com") {
?>
<nav>

    <div class="right">

        <ul>
            <li><a href="../forum-oja/listpost.php">Liste des posts</a></li>
        </ul>

        <ul>
            <li><a href="../forum-oja/listUser.php">Liste des utilisateurs</a></li>
        </ul>

        <ul>
            <li><a href="../forum-oja/signout.php">Deconnexion</a></li>
        </ul>
    </div>
</nav>

<header>
    <img src="../forum-oja/img/logo.png" alt= "Logo" id="logopage"/>
</header>

    <?php
    if($_GET['error'] == 1) { ?>
        <div class="message">
            <h1> L'utilisateur suivant ne peux pas être supprimé car il a encore des posts publiés</h1>
        </div>
        <?php
    }
    ?>

<div class="centercol">
    <h2>Les utilisateurs</h2>

    <table class="table table-bordered" style="width: auto">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom de famille</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Email</th>
            </tr>
            </thead>

            <?php
            require 'base.php';
            $query = "SELECT * FROM user";
            $res = mysqli_query($dbLink, $query);
            while ($tab = mysqli_fetch_array($res)) {
                ?>

                <tr>
                    <th scope="row"><?=$tab['user_id']?></th>
                    <td><?=$tab['name']?></td>
                    <td><?=$tab['firstname']?></td>
                    <td><?=$tab['nickname']?></td>
                    <td><?=$tab['email']?></td>
                    <td class="delete-post">
                        <form method="POST" action="deleteUser.php?user_id=<?= $tab['user_id'] ?>">
                            <input type="hidden" name="user_id" value="<?php '$_GET[\'user_id\']' ?>"> </input>
                            <input type="submit" value="Supprimer" name="supprimer">
                        </form>
                    </td>

                </tr>



                <?php
            } ?>
        </table>
</div>

    <?php
    }
    ?>
</body>
</html>
