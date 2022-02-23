<?php

function cadastrarFornecedor($conexao, $nome, $descricao){
	$query = mysqli_query($conexao, "INSERT INTO  (Nome, Descricao) VALUES 	('$nome', '$descricao')");
	return $query;
}
function listarFornecedor($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM fornecedor");
	while($linha = mysqli_fetch_assoc($query)){
		$fornecedor[] = $linha;
	}
	return $fornecedor;
}

function alterarFornecedor($conexao, $nome, $descricao,$idfornecedor){
	$query = mysqli_query($conexao, "UPDATE fornecedor SET Nome='{$nome}', Descricao='{$descricao}' WHERE IdFornecedor = '{$idFornecedor}'");
	return $query;
}

function excluirFornecedor($conexao, $idFornecedor){
	$query = mysqli_query($conexao, "DELETE FROM fornecedor  WHERE IdFornecedor = '{$idFornecedor}'");
	return $query;
}
// fim das funções do Fornecedor
// inicio das funções do Administrador
function cadastrarAdministrador($conexao, $login, $senha, $tipo){
	$query = mysqli_query($conexao, "INSERT INTO  (Login, Senha, Tipo) VALUES 	('$login', '$senha','$tipo')");
	return $query;
}
function listarAdministrador($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM administrador");
	while($linha = mysqli_fetch_assoc($query)){
		$administrador[] = $linha;
	}
	return $administrador;
}
function alterarAdministrador($conexao, $login, $senha,$tipo,$idAdministrador){
	$query = mysqli_query($conexao, "UPDATE administrador SET Login='{$login}', Senha='{$senha}', Tipo='{$tipo}' WHERE IdAdministrador = '{$idAdministrador}'");
	return $query;
}

function excluirAdministrador($conexao, $idAdministrador){
	$query = mysqli_query($conexao, "DELETE FROM administrador  WHERE IdAdministrador = '{$idAdministrador}'");
	return $query;
}
//fim das funções do Administrador
//funcções do custo_extra
function cadastrarCustoExtra($conexao, $idProduto, $valorSacola, $valorTag, $valorGasolina, $valorBrinde){
	$query = mysqli_query($conexao, "INSERT INTO  (IdProduto, Valor_Sacola, Valor_Tag, Valor_Gasolina,Valor_Brinde) VALUES 	('$idProduto','$valorSacola', '$valorTag','$valorGasolina', $valorBrinde)");
	return $query;
}
function listarCustoExtra($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM custo_extra");
	while($linha = mysqli_fetch_assoc($query)){
		$custo_extra[] = $linha;
	}
	return $custo_extra;
}

function alterarCustoExtra($conexao, $idProduto, $valorSacola, $valorTag, $valorGasolina, $valorBrinde,$idce){
	$query = mysqli_query($conexao, "UPDATE custo_extra SET IdProduto='{$idProduto}', Valor_Sacola='{$valorSacola}', Valor_Tag='{$valorTag}', Valor_Gasolina='{$valorGasolina}', Valor_Brinde='{$valorBrinde}' WHERE IdCE = '{$idce}'");
	return $query;
}

function excluirCustoExtra($conexao, $idce){
	$query = mysqli_query($conexao, "DELETE FROM custo_extra  WHERE IdCE = '{$idce}'");
	return $query;
}
//Inicio das funções da caracteristica_produto
function cadastrarCaracProd($conexao, $idProduto, $valor_bruto, $valor_vendido, $quantidade, $tamanho, $modelo){
	$query = mysqli_query($conexao, "INSERT INTO  (IdProduto, Valor_Bruto, Valor_Vendido, Quantidade,Tamanho, Modelo) VALUES 	('$idProduto','$valor_bruto', '$valor_vendido','$quantidade', $tamanho,'$modelo')");
	return $query;
}
function listarCaracProd($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM caracteristica_produto");
	while($linha = mysqli_fetch_assoc($query)){
		$caracteristica_produto[] = $linha;
	}
	return $caracteristica_produto;
}

function alterarCaracProd($conexao, $idProduto, $valor_bruto, $valor_vendido, $quantidade, $tamanho, $modelo,$idcp){
	$query = mysqli_query($conexao, "UPDATE caracteristica_produto SET IdProduto='{$idProduto}', Valor_Bruto='{$valor_bruto}', Valor_Vendido='{$valor_vendido}',Quantidade='{$quantidade}', Tamanho='{$tamanho}', Modelo='{$modelo}' WHERE IdCP = '{$idcp}'");
	return $query;
}

function excluirCaracProd($conexao, $idcp){
	$query = mysqli_query($conexao, "DELETE FROM caracteristica_produto  WHERE IdCP = '{$idcp}'");
	return $query;
}
// fim das funcões Caracteristicas_Produto

// Inicio das funções do cliente
function cadastrarCliente($conexao, $nome){
	$query = mysqli_query($conexao, "INSERT INTO  (Nome) VALUES 	('$nome')");
	return $query;
}
function listarCliente($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM cliente");
	while($linha = mysqli_fetch_assoc($query)){
		$cliente[] = $linha;
	}
	return $cliente;
}

function alterarCliente($conexao, $nome){
	$query = mysqli_query($conexao, "UPDATE cliente SET Nome='{$nome}' WHERE IdCliente = '{$idCliente}'");
	return $query;
}

function excluirCliente($conexao, $idCliente){
	$query = mysqli_query($conexao, "DELETE FROM cliente  WHERE idCliente = '{$idCliente}'");
	return $query;
}
//fim das funções do cliente
?>
