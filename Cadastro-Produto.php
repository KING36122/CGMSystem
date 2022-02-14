<?php
	define("TITULO", "CADASTRO DE PRODUTOS");
	//include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	if(!isset($_GET['cad'])){
	echo '<center><div class="jumbotron jumbotron-fluid">';
		echo '<center><h3 class="Sword">CADASTRO DE PRODUTOS</h3></center>';
		echo '</div>';
	echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get">'; #enctype="multipart/form-data"
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Nome: <input type="text" class="form-control" name="nome" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Imagem: <input type="text" class="form-control" name="imagem" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Descrição: <textarea class="form-control" name="desc" required autocomplete="off"></textarea>';
				echo '</label>';
				echo '</div>';
				$fornecedor = listarFornecedor($conexao);
				echo '<div class="form-group">';
					echo '<label>';
					echo 'Fornecedores: <br>';
					echo '<select class="form-control" name="fornecedor">';
					foreach ($fornecedor as $for):
					echo '<option value="'.$for['IdFornecedor'].'">'.$for['Nome'].'</option>';
					endforeach;
					echo '</select>';
					echo '</label>';
					echo '</div>';
				echo '<input type="submit" class="btn btn-primary col-sm-4" value="Cadastrar" name="cad">';
				echo '</div>';
			echo '</div>';
		echo '</form></center>';
	}else{
		$nome 		= $_GET['nome'];
		$imagem 	= $_GET['imagem'];
		$descricao 	= $_GET['desc'];
		$idFornecedor = $_GET['fornecedor'];
		
		$cadastro = cadastrarProduto($conexao, $nome, $imagem, $descricao, $idFornecedor);
		header("Location:organizador-listar.php?produto");
}
	
  $local = $_SERVER['PHP_SELF'];
  $env = visu($conexao, $local);
  include "rodape.php";
  ?>
