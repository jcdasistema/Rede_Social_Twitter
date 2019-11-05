<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
      $senha = md5($_POST['senha']);

    $objDb = new db();
    $link = $objDb->conecta_mysql();

//Verificação se usuário já está cadastrado
$usuario_cadastrado = false;
$email_cadastrado = false;

//verificando o usuário cadastrado
$sql = "select * from usuarios where usuario = '$usuario'";

if ($resultado = mysqli_query($link,$sql)){
	$dados = mysqli_fetch_array($resultado);
	
	if(isset($dados['usuario'])){
		$usuario_cadastrado = true;		
		
	}
	
}

//verificando email cadastrado
$sql = "select * from usuarios where email = '$email'";

if ($resultado = mysqli_query($link,$sql)){
	$dados = mysqli_fetch_array($resultado);
	
	if(isset($dados['email'])){
		$email_cadastrado = true;		
		
	}
	
}

if ($usuario_cadastrado || $email_cadastrado){
	$retorno = '';
	
	if ($usuario_cadastrado){
		$retorno .= "UsuarioJaExiste=1&";
	}
	 
	if ($email_cadastrado){
		$retorno .= "EmailJaExiste=1&";
	}
	
	
	
	header('Location: inscrevase.php?'.$retorno);
	die();
}




    $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Cadastro com sucesso!";
    }else{
        echo "Algo deu errado!";
    }

?>




