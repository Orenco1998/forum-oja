 <head>
     <link href="style.css" rel="stylesheet" media="all" type="text/css">
     <meta name="description" content="Liste des posts Oja, Un forum pas comme les autres."/>
     <meta name="keywords" content="liste,posts,forum,oja,institut g4,projet,oren,jonas,anthony,php,partage,connaissances">
 </head>

<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

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
                 <li><a href="../forum-oja/signout.php">Deconnexion</a></li>
             </ul>
         </div>
     </nav>

<header>
    <img src="../forum-oja/img/logo.png" alt= "Logo" id="logopage"/>
</header>



         <div class="centercol">
             <h2>Les Posts</h2>
             <table>
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
                 <tr>
                     <td class="tdpetit">Pseudo: <?= $tab['pseudo'] ?> </td>
                     <td class="tdgrand"><?= $tab['post_date'] ?></td>
                 </tr>

                 <tr>
                     <td class="tdpetit">
                         Prénom : <?= $tab['name'] ?> <br/>
                         Nom : <?= $tab['firstname'] ?>
                     </td>
                     <td class="tdgrand"><?= $tab['message'] ?></td>
                 </tr>
                 <?php
                 } ?>
             </table>

             <h2>Envoyer un message</h2>
             <form action="add.php" method="post">
                 <div><h3>Titre </h3><input type="text" size="90" maxlength="100" name="title"/></div>
                 <br>
                 <h3>Votre message </h3>
                 <textarea id="editor" name="editor" rows=10 COLS=40 maxlength="2048"></textarea>
                 <p><input class="button" type="submit" value="Envoyer"></p>
             </form>
         </div>
         <div class=ancadre>
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
