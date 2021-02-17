<?php
session_start();
include_once("conexao.php");


$id = $_GET["id"];

$result_user = "DELETE FROM bombeiros_horas WHERE idB=".$id;
$resultado_user = mysqli_query($conn,$result_user);



header('Location:listar_contato.php');



?>