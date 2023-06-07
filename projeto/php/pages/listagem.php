<h1>
    Listagem
</h1>

<?php
    $conexao = new PDO('mysql:host=localhost;dbname=lpwm', "root", "ifpe");
    $listagem = $conexao->PREPARE("SELECT * FROM bolsista");
    $listagem->execute();
    $dados = $listagem->fetchAll(PDO::FETCH_ASSOC);
    //print $dados[1]["email"];
    foreach($dados as $dado){
        print $dado["nome"]. "  - ". $dado["email"];
        print "<br>";
    }


;
?>