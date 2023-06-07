<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VCadastro Fotografico</title>
</head>
<body>
    <header>
        <nav>
            <a href="?pagina=home">Home</a><a href="?pagina=cadastro">Cadastro</a><a href="?pagina=listagem">Listagem</a><a href="?pagina=login">Login</a>
        </nav>
    </header>
    <main>
        <?php

        if(isset($_GET["pagina"])){
            $pag = $_GET["pagina"];
            switch($pag){
                case "home":
                    include_once("pages/home.php");
                    break;
                case "cadastro":
                    include_once("pages/cadastro.php");
                    break;
                case "listagem":
                    include_once("pages/listagem.php");
                    break;
                case "login":
                        include_once("pages/login.php");
                        break;
                case "admin":
                    include_once("pages/admin.php");
                    break;
                default:
                    include_once("pages/home.php");
                    break;
            }
        }
        else{
            include_once("pages/home.php");
        }

        ?>
                
    </main>
    <footer>
        <p style="text-align:center;">
        <?php
            print isset($_SESSION["email"])?$_SESSION["email"]:"deslogado";
        ?>
        </p>
    </footer>    
</body>
</html>