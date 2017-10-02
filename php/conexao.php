<?php
    function conectar(){
    	try{
    		$pdo = new PDO("mysql:host=localhost;dbname=DBCadastro","root","");
    	}catch(PDOException $erro){
    		echo $erro->getMessage();
    	}
    	return $pdo;
    }
?>