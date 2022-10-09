<?php 
    include_once("templates/header.php");
    
?>

   <div class="container">

        <?php include_once("templates/backbtn.html") ?>

        <h1 id="main-title">Editar contato</h1>

        <form id="create-form" action="<?=$BASE_URL?>config/processamento.php" method="POST">
            <input type = "hidden" name="type" value="update">
            <input type = "hidden" name="id" value="<?=$contact['id']?>">

            <div class="form-group">
                <label for="nome">Nome do contato:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$contact['nome']?>" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$contact['telefone']?>" required>
            </div>
            <div class="form-group">
                <label for="observações">Observações</label>
                <textarea type="text" class="form-control" id="observações" rows="3" name="observações"><?=$contact['observações']?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
   </div>
    

    <?php 
    include_once("templates/footer.php")
?>