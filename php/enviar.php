<?php
    include_once("conexao.php");
     try{
	    $pdo = conectar();
		$pdo->exec("SET CHARACTER SET utf8");
    }catch(PDOException $erro){
	    echo $erro->getMessage();				
	}
    
    $codigoDaMercadoria = $_POST['codigoDaMercadoria'];
    $tipoDaMercadoria = $_POST['tipoDaMercadoria'];
    $nomeDaMercadoria = $_POST['nomeDaMercadoria'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $tipoDoNegocio = $_POST['tipoDoNegocio'];
    
     if(isset($_POST['codigoDaMercadoria'])){
        try{
			$insert = $pdo->prepare("INSERT INTO TBMercadoria (codigoDaMercadoria, tipoDaMercadoria, nomeDaMercadoria, quantidade, preco, tipoDoNegocio) 
                                         VALUES (:codigoDaMercadoria,:tipoDaMercadoria,:nomeDaMercadoria,:quantidade,:preco,:tipoDoNegocio)"); 
                                             
            $insert->bindValue(":codigoDaMercadoria",$codigoDaMercadoria);
            $insert->bindValue(":tipoDaMercadoria",$tipoDaMercadoria);
            $insert->bindValue(":nomeDaMercadoria",$nomeDaMercadoria);
            $insert->bindValue(":quantidade",$quantidade);
            $insert->bindValue(":preco",$preco);
            $insert->bindValue(":tipoDoNegocio",$tipoDoNegocio);
			$insert->execute();
			
			echo json_encode("<div class='alert alert-success'>Cadastro realizado com sucesso!</div>");
				
		}catch(PDOException $erro){
			echo $erro->getMessage();				
		}
    }
    
    if(isset($_GET['id']) && isset($_GET['acao'])){
        $id = $_GET['id'];
        $acao = $_GET['acao'];
        if(!empty($acao) && !empty($id)){
            if($acao == "del"){
                try{
                    $delete = $pdo->prepare("DELETE FROM TBMercadoria WHERE id=:id"); 
                    $delete->bindValue(":id",$id);
        			$delete->execute();
                    echo json_encode("<div class='alert alert-success'>Registro deletado com sucesso!</div>");
                }catch(PDOException $erro){
	                echo $erro->getMessage();
                }
            }else if($acao == "edit"){
                 try{
                    $query = $pdo->prepare("SELECT * FROM TBMercadoria WHERE id=:id"); 
                    $query->bindValue(":id",$id);
        			$query->execute();
        			$ln = $query->fetchAll(PDO::FETCH_ASSOC);
                    echo json_encode($ln);
                }catch(PDOException $erro){
	                echo $erro->getMessage();
                }
            }
        }
   }
                            
                            
    
?>