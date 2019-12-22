<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des postes</title>
    <link href="style.css" rel="stylesheet" media="all" type="text/css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <meta name="description" content="Liste des posts Oja, Un forum pas comme les autres."/>
    <meta name="keywords" content="liste,posts,forum,oja,institut g4,projet,oren,jonas,anthony,php,partage,connaissances">
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

</head>
<body>

 <?php
 session_start();
 if(isset($_SESSION['email']))
    {
     ?>

        <div> <a id="haut"></a>
        </div>

        <?php
        if($_GET['error'] == 1) { ?>
        <div class="message">
            <h1> Impossible d'ajouté votre message veuillez rééssayer.</h1>
        </div>
        <?php
    }
?>

     <nav>

         <div class="right">
             <ul>
                 <li><a href="../forum-oja/listpost.php">Liste des posts</a></li>
             </ul>
             <?php
             if($_SESSION['email'] === "orencohen2652@gmail.com") {
                 ?>
                 <ul>
                     <li><a href="../forum-oja/listUser.php">Liste des utilisateurs</a></li>
                 </ul>
                 <?php
             }
             ?>
             <ul>
                 <li><a href="../forum-oja/signout.php">Deconnexion</a></li>
             </ul>
         </div>
     </nav>

    <header>
        <img src="../forum-oja/img/logo.png" alt= "Logo" id="logopage"/>
    </header>



         <div class="centercol">
             <h2>Les Posts</h2>
     <?php
     require 'base.php';
     $perPage = 7;

     $number = "SELECT COUNT(*) AS total from post";
     $resultat = mysqli_query($dbLink,"$number");
     while ($tab = mysqli_fetch_array($resultat)) {
         $total = $tab['total'];

         $nbPage = ceil($total/$perPage);


         if(isset($_GET['p'])&& !empty($_GET['p']) && ctype_digit($_GET['p']) == 1)
         {
             if($_GET['p']> $nbPage)
             {
                 $current = $nbPage;
             }else{
                 $current = $_GET['p'];
             }

         }else{
             $current = 1;
         }

         $firstOfPage = ($current-1)*$perPage;

         $query = "SELECT * FROM post INNER JOIN user ON user.user_id = post.user_id ORDER BY post_date DESC LIMIT $firstOfPage,$perPage";
         $res = mysqli_query($dbLink, $query);
     }

     while ($tab = mysqli_fetch_array($res)) { ?>
             <table>
             <tr>
                     <td class="tdpetit">Pseudo: <?= $tab['nickname'] ?> </td>
                     <td class="tdgrand"><?= $tab['post_date'] ?></td>
                 </tr>

                 <tr>
                     <td class="tdpetit">
                         Prénom : <?= $tab['name'] ?> <br/>
                         Nom : <?= $tab['firstname'] ?>
                     </td>
                     <td class="tdgrand">
                         Titre : <?= $tab['title'] ?> <br/>
                         Message : <?= $tab['message'] ?>
                     </td>
                 </tr>
                 <?php
                 if($_SESSION['email'] === "orencohen2652@gmail.com")
                 {
                     ?>
                     <form method="POST" action="deletePost.php?post_id=<?= $tab['post_id'] ?>">
                     <input type="hidden" name="post_id" value="<?php '$_GET[\'post_id\']' ?>"> </input>
                     <input type="submit" value="Supprimer" name="supprimer" class="delete-post-container">
                 </form>
                 <?php
                 }
                 ?>

             </table>

                 <?php
                 } ?>

             <h2>Envoyer un message</h2>
             <form action="add.php" method="post">
                 <div>
                     <h3>Titre </h3>
                     <input class="title" type="text" size="90" maxlength="100" name="title"/></div>
                 <br/>
                 <h3>Votre message </h3>
                 <textarea id="editor" name="editor" rows=10 COLS=40 maxlength="2048"></textarea>
                 <p><input class="button" type="submit" value="Envoyer"></p>
             </form>
         </div>
         <div class="ancadre">
             <a href="#haut">haut de page</a>
         </div>

         <?php
 }
 else{
     header('location:index.php?error=3');
 }
 ?>
 <script>
     CKEDITOR.replace('editor');
 </script>
 <script>
     ClassicEditor
         .create( document.querySelector( '#editor' ) )
         .catch( error => {
             console.error( error );
         } );
 </script>



</body>
</html>