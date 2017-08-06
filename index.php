<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload De iamgens</title>
        <meta name="author" content="Matheus Ribeiro">

    </head>
    <body>
        <form action="teste.php" method="post" enctype="multipart/form-data">
              <p>Upload de imagens utilizando PHP:<br>
            <p>Selecione as imagens :<br>
            <input type="file" name="pictures[]" /><br><br>
            <input type="file" name="pictures[]" /><br><br>
            <input type="submit" value="Enviar imagens para pasta"/>
            
            
            
            <br><br>
            
            <a href="pagina3.php"><button type="button">Veja as imagens na pasta </button></a>
            
            
            </p>            
            
        </form>
        <?php

        ?>
    </body>
</html>
