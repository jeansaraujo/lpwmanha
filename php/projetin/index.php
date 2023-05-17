<style>
    div{
        margin: auto;
        width: 500px;
    }
    input{
        display: block;
        width: 100%;
    }
    h1{
        text-align: center;
        border-right: 10px solid red;
    }
    #msg{
        display: block;
        background-color: rgba(255,0,0,0.5);
        border-radius: 10px;
        text-align: center;
    }
</style>

<div>    
    <h1>
        Inscrição para Forças Armadas
    </h1>
    
    <form method="post">
        <label>
            Nome
        </label>
        <input type="text" name="nome">
        <label> Email</label>
        <input type="email" name="email">
        <label> Data</label>
        <input type="date" name="dtNascimento">
        <button>Enviar</button>
    </form>
</div>
<?php
$nome = isset($_POST['nome'])?$_POST['nome']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$dtNascimento = isset($_POST['dtNascimento'])?$_POST['dtNascimento']:"";

if(isset($_POST['dtNascimento'])){
    $dataAtual = getdate();
    $date = date_create($_POST['dtNascimento']);
    $anoNascimento = date_format($date, 'Y');
    $idade = $dataAtual["year"] -$anoNascimento;
    print $idade;
        if($idade >30){
            $mensagem = "Inscrição nas Forças Armadas apenas para menores de 30 anos";
        }
        else{
            $conexao = new PDO("mysql:host=localhost;dbname=lpwtimanha","root","");
            $nome = isset($_POST["nome"])?$_POST["nome"]:"";
            $email = isset($_POST["email"])?$_POST["email"]:"";
            $insere = $conexao->PREPARE("insert into oficiais(nome,email) values(:NOME,:EMAIL)");
            $insere->bindParam(":NOME",$nome);
            $insere->bindParam(":EMAIL",$email);
            $insere->execute();
            }
}
?>

<span id="msg">
    <?php
        print isset($mensagem)?$mensagem:"";            
    ?>
</span>