 <head><link href="style.css" rel="stylesheet" media="all" type="text/css"> </head>

<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<headerpage>
    <img src="../forum-oja/img/logo.png" alt= "Logo" id="logopage"/>
</headerpage>
<div class="centercol">
    <h2>Les Posts</h2>
    <table summary="exemple de structure d'un tableau de données 2 lignes, 2 colonnes">
        <caption>Tableau de données</caption>

        <tr>
            <td class="tdpetit">Pseudo</td>
            <td class="tdgrand">Date</td>
        </tr>

        <tr>
            <td class="tdpetit">Infos</td>
            <td class="tdgrand">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sagittis congue. Pellentesque ut lorem vel odio interdum fringilla nec id mi. Fusce sodales neque nec consequat luctus. Cras et magna lorem. Aenean erat lorem, consequat sit amet convallis quis, commodo lacinia ante. Integer pretium, leo ut eleifend porta, est augue hendrerit arcu, in pharetra nulla metus et sapien. Suspendisse efficitur ornare viverra. In faucibus augue id faucibus finibus. Nulla id libero in purus aliquam dignissim. Integer ac felis a elit tincidunt luctus. Nullam nisl augue, dignissim vel lacinia eu, commodo at magna.

                Aliquam ut nunc sed magna sodales facilisis a quis ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum in suscipit ante. In placerat suscipit velit quis venenatis. In vel nulla porttitor dui euismod condimentum. Maecenas at risus sit amet arcu accumsan sagittis sit amet nec libero. Integer imperdiet nisi vitae enim molestie, in auctor orci ultricies.

        </tr>
    </table>
    <h2>Envoyer un message</h2>
    <form action="send.php" method="post">
        <div><h3>Titre </h3><input type="text" size="90" maxlength="100" name="titremessage" /></div>
        <br><h3>Votre message </h3>
        <div id="editor">
            <textarea name="positive" rows=10 COLS=40 maxlength="2048"></textarea>
        </div>
        <p><input class="button" type="submit" value="Envoyer"></p>
    </form>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
