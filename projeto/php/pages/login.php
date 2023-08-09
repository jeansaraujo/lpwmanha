<h1>Login</h1>
<style>
    input{
        display:block;
    }
</style>
<form method="POST">
    <label>Email</label>
    <input type="text" name="email">
    <label>Senha</label>
    <input type="text" name="senha">
    <button>Acessar</button>
</form>
<?php
    if(isset($_POST["email"])){
        $email=isset($_POST["email"])?$_POST["email"]:"";
        $senha=isset($_POST["senha"])?$_POST["senha"]:"";
        $conexao=new PDO("mysql:host=localhost;dbname=lpwm","root","ifpe");
        $acesso = $conexao->PREPARE("SELECT senha from bolsistas WHERE email = :EMAIL");
        $acesso->bindParam(":EMAIL",$email);
        $acesso->execute();
        $dados = $acesso->fetchAll(PDO::FETCH_ASSOC);
        $senhaBD=$dados[0]["senha"];
        if($senha == $senhaBD){        
            print "Acesso área Exclusiva";
            print "<br>";
            //session_start();
            print session_id();
            $_SESSION['email']=$email;
            $_SESSION['hash']=session_id();
            //header("Location: http://localhost/ifpe2023lpwmanha/projeto/php/index.php?pagina=admin");
        }
        else{
            print "Usuário/Senha Invalida";
        }
    }
?>