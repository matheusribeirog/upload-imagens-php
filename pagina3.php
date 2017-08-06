<a href="index.php">Voltar ao upload</a><br>
<?php

$files=glob("arquivos/*.*");
     for($i=0;$i<count($files);$i++){
         $num=$files[$i];
         echo'<li--> <img alt="random image" width="200" src="'.$num.'"/>';
     }
     ?>