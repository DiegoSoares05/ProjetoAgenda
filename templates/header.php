<?php 

    include_once("config/url.php");
    include_once("config/processamento.php");

    //limpa a mensagem

    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL?>css/estilo.css">
</head>
<body>
    <head>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a href= "<?=$BASE_URL?>index.php" class="navbar-brand"  >
                <img src="<?= $BASE_URL ?>img/agenda.svg" alt="Agenda">
            </a>

            <div>
                <div class="navbar-nav">
                    <a href="<?=$BASE_URL?>index.php" id="home-link" class="nav-link active">Agenda</a>
                    <a href="<?=$BASE_URL?>create.php"  class="nav-link active">Adicionar contato</a>
                </div>
            </div>
        </nav>
    </head>
