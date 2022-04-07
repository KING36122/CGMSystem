<?php
include "cabecalho.php";
include "funcoes.php";
$servidor 	= "localhost";
	$usuario 	= "root";
	$senha 		= "";
	$banco		= "cgmsystem";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro ao conectar ao banco de dados");
	mysqli_set_charset($conexao, "utf8");
$pesquisar = $_POST['pesquisar'];
    		
    $result_cursos = "SELECT * FROM produto WHERE Nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conexao, $result_cursos);
		    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
		        echo "Nome do curso: ".$rows_cursos['Nome']."<br>";
		    	echo "<div class='listar-all-table'>";
			echo '<table id="my-table" class="table">';
			echo "<thead>";
				echo '
				<tr>
					<th>Nº</th>
					<th>Nome</th>
					<th>Imagem</th>
					<th>Desc</th>
					<th>Info</th>
					<th>Editar</th>
					<th>Excluir</th>

				</tr>';
			echo "</thead>";
			echo "<tbody>";
			
			$produto=listarProdutoLike($conexao,$pesquisar);
			$n = 1;
			// echo "Total: ".count($eventos);
		//	$p = laike($conexao,$idprod);
			foreach($produto as $p){
				echo '<tr>';
				echo '<td>'.$n.'</td>';
				echo '<td>'.$rows_cursos["Nome"].'</td>';
				echo '<td>'.$rows_cursos["Imagem"].'</td>';
				echo '<td>'.$rows_cursos["Descricao"].'</td>';
				
				//$idprod = $$rows_cursos["IdProduto"];
				//$p = laike($conexao,$idprod);
				// $fornecedor = listarFornecedorProd($conexao,$idprod);
				// foreach ($fornecedor as $for):
				// 	echo '<option value="For">'.$for["Nome"].'</option>';
					
				// endforeach;
				echo '</td>';
				echo '<td><a href="eventos-perfil.php?evento='.$rows_cursos["IdProduto"].'"><i class="bx bx-file-find"></i></a></td>';
				echo '<td><a href="eventos-editar.php?evento='.$rows_cursos["IdProduto"].'"><i class="bx bx-edit-alt"></i></a></td>';
				echo '<td><a href="eventos-excluir.php?evento='.$rows_cursos["IdProduto"].'"><i class="bx bx-message-alt-x"></i></td></tr>';
				echo '</tr>';
				$n += 1;
			}
		echo "</tbody>";
		echo "</table>";
	echo "</div>";
		    }

