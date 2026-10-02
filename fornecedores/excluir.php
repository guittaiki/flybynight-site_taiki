<?php
// fornecedores/excluir.php
require_once "../src/fornecedor_crud.php";
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === null || $id === false || $id < 1) {
	header("location:listar.php");
	exit;
}

excluirFornecedor($conexao, $id);
header("location:listar.php");
exit;
