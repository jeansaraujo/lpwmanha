<h1>
    Cadastro
</h1>
<div class="formulario">
    <form method="post">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>E-mail</label>
        <input type="email" name="email">
        <label>Senha</label>
        <input type="password" name="senha">
        <label>Nome</label>
        <input type="date" name="nascimento">
        <button>Enviar</button>
    </form>
</div>

<!-- Cadastro -->
<?php
    if(isset($_POST["nome"])&&isset($_POST["nascimento"])&&isset($_POST["email"])&&isset($_POST["senha"])){
        $nome = $_POST["nome"];
        $nascimento= $_POST["nascimento"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $conexao = new PDO('mysql:host=localhost;dbname=lpwm', "root", "ifpe");
        $inserir = $conexao->PREPARE("INSERT INTO bolsistas (nome,email,nascimento,senha)
        VALUES (:NOME, :EMAIL, :NASCIMENTO, :SENHA)");
        $inserir->bindParam(":NOME",$nome);
        $inserir->bindParam(":EMAIL",$email);
        $inserir->bindParam(":NASCIMENTO",$nascimento);
        $inserir->bindParam(":SENHA",$senha);
        $resultado = $inserir->execute();
        if($resultado){
            print"
                <script>
                    alert('Dados inseridos com sucesso');
                </script>
                ";
        }
    }
?>
