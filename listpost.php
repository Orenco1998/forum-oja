 <head><link href="style.css" rel="stylesheet" media="all" type="text/css"> </head>

<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<div > <a id="haut"></a>
 </div>

<headerpage>
    <img src="../forum-oja/img/logo.png" alt= "Logo" id="logopage"/>
</headerpage>
<div class="centercol">
    <h2>Les Posts</h2>
    <table summary="exemple de structure d'un tableau de données 2 lignes, 2 colonnes">
        <caption>Tableau de données</caption>

        <tr>
            <td>Pseudo</td>
            <td>Date</td>
        </tr>

        <tr>
            <td>Infos</td>
            <td>Message</td>
        </tr>
    </table>
    <h2>Envoyer un message</h2>
    <form action="send.php" method="post">
        <div><h3>Titre </h3><input type="text" size="90" maxlength="100" name="titremessage" /></div>
        <br><h3>Votre message </h3>
        <div id="editor">
            <textarea name="positive" rows=10 COLS=40></textarea>
        </div>
        <p><input class="button" type="submit" value="Envoyer"></p>
    </form>
</div>
<div class=ancadre>
    <a href="#haut">haut de page</a>  
</div>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
