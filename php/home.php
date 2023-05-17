<?php
    print "<h1>Olá turma - arquivo home</h1>";
    $texto = "Love";
    define("CONFIG",["banco"=>"mysql","usuario"=>"admin","senha"=>"123"]);

    for($i=0;$i<strlen($texto);$i++){
        print $texto[$i]."<br>";
    }

    

    print $_SERVER["REQUEST_TIME"];

    $texto = "Life";

    print "<br>";

    print $texto;

    print "<br>";

    print "<br>";

print CONFIG["senha"];

print "<br>";

echo CONFIG["banco"];
?>
<a href="/arquivos">Arquivos</a>