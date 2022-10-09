<?php 
    include_once("templates/header.php");

?>

    <div class="container" id="view-contact-contaienr">
        <?php include_once("templates/backbtn.html")?>
        <h1 id="main-title"><?= $contact['nome'] ?></h1>
        <p class="bold">Telefone:</p>
        <p><?= $contact['telefone']?></p>

        <p class="bold">Observações:</p>
        <p><?= $contact['observações']?></p>
    </div>

<?php 
    include_once("templates/footer.php")
?>