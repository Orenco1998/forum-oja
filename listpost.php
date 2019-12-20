<head><link href="style.css" rel="stylesheet" media="all" type="text/css"> </head>

<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<headerpage>
    <img src="../forum-oja/img/logo.png" alt= "Logo" id="logopage"/>
</headerpage>
<div class="centercol">
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
<br>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>