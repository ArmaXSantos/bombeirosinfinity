<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
<?php
	session_start();
	include_once('conexao.php');
	
	$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
	$idB = filter_input(INPUT_POST,'idB',FILTER_SANITIZE_STRING);
	$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
	$funcao = filter_input(INPUT_POST,'funcao',FILTER_SANITIZE_STRING);
	$totalh = filter_input(INPUT_POST,'totalh',FILTER_SANITIZE_STRING);
	$bonif = filter_input(INPUT_POST,'bonif',FILTER_SANITIZE_STRING);
	$subida = filter_input(INPUT_POST,'subida',FILTER_SANITIZE_STRING);

	
	
	$result_usuario = "UPDATE bombeiros_horas SET idB='$idB', nome='$nome',funcao='$funcao',totalh='$totalh',bonif='$bonif',subida='$subida' WHERE id='$id'";
	$resultado_usuario= mysqli_query($conn, $result_usuario);
	
	header('Location:listar_contato.php');
		
?>
