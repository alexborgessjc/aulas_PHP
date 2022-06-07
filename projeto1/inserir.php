<?php
    //Fazendo a conexão
	//Criando e salvando a conexão em uma variavel
    $conexao = mysqli_connect ("localhost","root","");
    //Verificando a conexao
    if(mysqli_connect_errno())
    {
        //Imprime a tela de erro de conexao
        echo "falha ao conectar: ". mysqli_connect_error(); die();
    }
    //Seleciona o banco desejado
    mysqli_select_db($conexao,"escola_db");

    //Armazenando o valor do campo nome em uma variavel
    $cpf = $_POST['campo_cpf'];
    $nome = $_POST['campo_nome'];
    $sexo = $_POST['campo_sexo'];
    $data = $_POST['campo_data'];

    //Criando uma variavel para armazenar a SQL de inserção
    $sql_inserir = "INSERT INTO `aluno`(`cpf`, `nome`, `sexo`, `data_de_nascimento`) 
    VALUES ($cpf,'$nome','$sexo','$data')";

    $resultado = mysqli_query($conexao,$sql_inserir);

    if($resultado){
        echo "Enviado!";
    }else{
        echo "Não enviado";
    }
?>