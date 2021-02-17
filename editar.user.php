<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
 
	session_start();
	include_once("conexao.php");
	
	$id = $_GET["id"];
	
	 $result_user= "SELECT id,idB,nome,totalh,funcao,bonif,subida FROM bombeiros_horas WHERE id = '$id'";
	 $resultado_user = mysqli_query($conn,$result_user);
	 
	 
	
	
	 
 ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bombeiros</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	<head>
	<body>
		<?php while($row_user = mysqli_fetch_assoc($resultado_user)){?>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Editar Bombeiro</h1>
			</div>
			<form class="form-horizontal" name="formcontato" method="POST" action="proc_edita_user.php">
				
			<input type="hidden"  name="id" value="<?php echo $row_user["id"];?>">
			
			<div class="form-group">
			
		
					<label for="inputEmail3" class="col-sm-2 control-label">
						ID: 
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="idB" placeholder="ID do Bombeiro" value="<?php echo $row_user["idB"];?>"
						
						<br>
						
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Nome: 
					</label>
					<div class="col-sm-10">
	 <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="<?php echo $row_user["nome"];?>" 
						<br>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Função: 
					</label>
					<div class="col-sm-10">
						 <input type="text" class="form-control" name="funcao" placeholder="Função Do Bombeiro" value="<?php echo $row_user["funcao"];?>"
						<br>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Total De Horas: 
					</label>
					<div class="col-sm-10">
						 <input type="text" class="form-control" name="totalh" placeholder="Total De Horas Do Bombeiro" value="<?php echo $row_user["totalh"];?>"
						<br>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Bonificação: 
					</label>
					<div class="col-sm-10">
						 <input type="text" class="form-control" name="bonif" placeholder="Bonificação Do Bombeiro" value="<?php echo $row_user["bonif"];?>"
						<br>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Subida: 
					</label>
					<div class="col-sm-10">
						 <input type="text" class="form-control" name="subida" placeholder="Função Do Bombeiro" value="<?php echo $row_user["subida"];?>"
						<br>
					</div>
				</div>
				
				
				<input class="btn btn-success" type="submit" value="Editar" onclick="return validar_form_contato()">
		<?php } ?>
 			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>