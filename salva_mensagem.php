<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
<?php
	session_start();
	include_once('conexao.php');
	if(empty($_POST['idB'])){
		$_SESSION['vazio_idB'] = "Campo Id  é obrigatório";
		$url = 'http://localhost/excel/form_contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_idB'] = $_POST['idB'];
	};
	if(empty($_POST['nome'])){
		$_SESSION['vazio_nome'] = "Campo nome é obrigatório";
		$url = 'http://localhost/excel/form_contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_nome'] = $_POST['nome'];
	}
	
	if(empty($_POST['funcao'])){
		$_SESSION['vazio_funcao'] = "Campo função é obrigatório";
		$url = 'http://localhost/excel/form_contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_funcao'] = $_POST['funcao'];
	}
	
	
	$idB = mysqli_real_escape_string($conn, $_POST['idB']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$funcao = mysqli_real_escape_string($conn, $_POST['funcao']);
	
	
	
	$result_msg_contato = "INSERT INTO bombeiros_horas(idB, nome, Funcao) VALUES ('$idB', '$nome', '$funcao')";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
		
	header('Location:listar_contato.php');
?>


