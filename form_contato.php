<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
	session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bombeiros</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript">
			function validar_form_contato(){
				var nome = formcontato.nome.value;
				var email = formcontato.email.value;
				var assunto = formcontato.assunto.value;
				var mensagem = formcontato.mensagem.value;
				
				if(nome == ""){
					alert("Campo nome é obrigatorio");
					formcontato.nome.focus();
					return false;
				}if(email == ""){
					alert("Campo email é obrigatorio");
					formcontato.email.focus();
					return false;
				}if(assunto == ""){
					alert("Campo assunto é obrigatorio");
					formcontato.assunto.focus();
					return false;
				}if(mensagem == ""){
					alert("Campo mensagem é obrigatorio");
					formcontato.mensagem.focus();
					return false;
				}
			}
		</script>
	<head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Adicionar Bombeiro</h1>
			</div>
			<form class="form-horizontal" name="formcontato" method="POST" action="salva_mensagem.php">
			<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						ID: 
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="idB" placeholder="ID do Bombeiro" 
						<?php
							if(!empty($_SESSION['value_idB'])){
								echo "value='".$_SESSION['value_idB']."'";
								unset($_SESSION['value_idB']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_idB'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_idB']."</p>";
								unset($_SESSION['vazio_idB']);
							}
						 ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Nome: 
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome" placeholder="Nome Completo" 
						<?php
							if(!empty($_SESSION['value_nome'])){
								echo "value='".$_SESSION['value_nome']."'";
								unset($_SESSION['value_nome']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_nome'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_nome']."</p>";
								unset($_SESSION['vazio_nome']);
							}
						 ?>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Função: 
					</label>
					<div class="col-sm-10">
						 <input type="text" class="form-control" name="funcao" placeholder="Função Do Bombeiro" 
						<?php
							if(!empty($_SESSION['value_funcao'])){
								echo "value='".$_SESSION['value_funcao']."'";
								unset($_SESSION['value_funcao']);
							}
						 ?>>
						 <?php
							if(!empty($_SESSION['vazio_funcao'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_funcao']."</p>";
								unset($_SESSION['vazio_funcao']);
							}
						 ?>
					</div>
				</div>
				
				
				
				<input class="btn btn-success" type="submit" value="Enviar" onclick="return validar_form_contato()">
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>