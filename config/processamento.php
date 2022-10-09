<?php 

    session_start();

    include_once("conexao.php");
    include_once("url.php");
    

        $data = $_POST;

        //MODIFICAÇÕES NO BANCO
        if(!empty($data)) {

            //CRIAR CONTATO
            if($data['type'] === "create") {
                
               $nome = $data['nome'];
               $telefone = $data['telefone'];
               $obs = $data['observações'];

               $sql = "INSERT INTO contacts(nome, telefone, observações) VALUES (:n, :t, :o)";

               $stmt = $conn->prepare($sql);

               $stmt->bindParam(":n" , $nome);
               $stmt->bindParam(":t" , $telefone);
               $stmt->bindParam(":o" , $obs);

    

               try {
                $stmt->execute();
                $_SESSION['msg'] = "contato criado com sucesso";
        
                }catch(PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }
            
            }else if($data["type"] === "update"){
                 
               $nome = $data['nome'];
               $telefone = $data['telefone'];
               $obs = $data['observações'];
               $id = $data['id'];
                
               $sql = "UPDATE contacts 
                       SET nome = :n,  telefone = :t, observações = :o 
                       WHERE id = :id ";

               $stmt = $conn->prepare($sql);

               $stmt->bindParam(":n" , $nome);
               $stmt->bindParam(":t" , $telefone);
               $stmt->bindParam(":o" , $obs);
               $stmt->bindParam(":id" , $id);
    

               try {
                $stmt->execute();
                $_SESSION['msg'] = "contato atualizado com sucesso";
        
                }catch(PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }

            }else if($data['type'] === "delete"){
                $id = $data['id'];

                $sql = "DELETE FROM contacts
                        WHERE id = :id";

                $stmt = $conn->prepare($sql);
                $stmt->bindParam(":id" , $id);

                try {
                    $stmt->execute();
                    $_SESSION['msg'] = "contato deletado com sucesso";
            
                    }catch(PDOException $e){
                    //erro na conexão
                    $error = $e->getMessage();
                    echo "Erro: $error";
                }
              
            }//REDIRECT HOME
            header("location:". $BASE_URL . "../index.php");

        } else {
            $id;

            if(!empty($_GET)){
                $id = $_GET['id'];
            }
        
            //retorna o dado de um contato
            if(!empty($id)){
                $query = "SELECT * FROM contacts WHERE id = :id ";
        
                $stmt = $conn->prepare($query);
        
                $stmt->bindParam(":id", $id);
        
                $stmt->execute();
        
                $contact = $stmt->fetch();
        
            }else{
            // retorna todos os contatos
                $contacts = [];
            
                $query = "SELECT* FROM contacts";
            
                $stmt = $conn->prepare($query);
            
                $stmt->execute();
            
                $contacts = $stmt->fetchAll();
            }
        }

        
    

    //fechar conexão
    $conn = null;
?>