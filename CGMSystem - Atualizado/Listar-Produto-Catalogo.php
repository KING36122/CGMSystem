	<div class="sidebar close">
		<div class="logo-details">
			<a href="menuInicial.php">
				<i class='bx bxs-store-alt'></i>
			</a>
			<span class="logo-name">Afrodite Moda's</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="#">
					<i class='bx bx-search-alt-2'></i>
					<span class="link-name">PESQUISA</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link-name" href="">PESQUISA</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bx-group'></i>
						<span class="link-name">ADMINISTRADOR</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link-name" href="">ADMINISTRADOR</a></li>
					<li><a href="Cadastro-Administrador.php">Cadastar Administrador</a></li>
					<li><a href="Listar-Administrador.php">Visualizar Administrador</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bx-closet'></i>
						<span class="link-name">PRODUTO</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link-name" href="">PRODUTO</a></li>
					<li><a href="Cadastro-Produto.php">Cadastar Produto</a></li>
					<li><a href="Listar-Produto.php">Visualizar Produto</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bxs-truck'></i>
						<span class="link-name">FORNECEDOR</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link-name" href="">FORNECEDOR</a></li>
					<li><a href="Cadastro-Fornecedor.php">Cadastar Fornecedor</a></li>
					<li><a href="Listar-Fornecedor.php">Visualizar Fornecedor</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bxs-user-detail'></i>
						<span class="link-name">CLIENTE</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link-name" href="">CLIENTE</a></li>
					<li><a href="Cadastro-Cliente.php">Cadastar Cliente</a></li>
					<li><a href="Listar-Cliente.php">Visualizar Cliente</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bx-wallet'></i>
						<span class="link-name">DÍVIDA</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link-name" href="">DÍVIDA</a></li>
					<li><a href="Cadastro-Divida.php">Cadastar Dívida</a></li>
					<li><a href="Listar-Divida.php">Visualizar Dívida</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bx-detail'></i>
						<span class="link-name">RELATÓRIOS</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link-name" href="">RELATÓRIOS</a></li>
					<li><a href="Cadastro-Relatorios.php">Cadastar Relatórios</a></li>
					<li><a href="Listar-Relatorios.php">Visualizar Relatórios</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bxs-briefcase'></i>
						<span class="link-name">FUNCIONÁRIOS</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link-name" href="">FUNCIONÁRIOS</a></li>
					<li><a href="Cadastro-Funcionarios.php">Cadastar Funcionários</a></li>
					<li><a href="Listar-Funcionarios.php">Visualizar Funcionários</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="index.html">
						<i class='bx bx-log-out'></i>
						<span class="link-name">SAIR</span>
					</a>
				</div>
			</li>
		</ul>	
	</div>

	<div class="home-section">
	    <div class="home-content">
	      <i class='bx bx-menu'></i>
	    </div>
	    <?php
			define("TITULO", "CADASTRO DE PRODUTOS");
			include "cabecalho.php";
			include_once "conn/conexao.php";
			include "funcoes.php";
			include "rodape.php";

			echo "<div class='listar-all'>";
				$produto 	= listarProduto($conexao);
				$carac		= listarCaracProd($conexao);
				foreach ($produto as $p):
					echo "<div class='produto h-100 card-color'>";
						echo "<div class='card-body'>";
							echo '<h3 class="color-name">'.$p['Nome'].'</h3>';
							echo '<h5>'.$p['Descricao'].'</h5>';
							// foreach ($carac as $c):
							// 	if($p['IdProduto'] == $c['IdProduto']){
							// 		echo '<h3>'.$c['Valor_Bruto'].'</h3>';
							// 	}
							// endforeach;
							echo '<div class="img">';
								echo '<img src="Produtos/'.$p['Imagem'].'">';
							echo "</div>";
						echo "</div>";
						echo "<div class='card-button'>";
							echo "<div class='text-center'>";
								echo "<a class='btn btn-outline-warning' href='#'>Adicionar</a>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				endforeach;				
			echo "</div>";
		?>
	</div>
	
	<script>
		let arrow = document.querySelectorAll(".arrow");
		
		for(var i = 0; i < arrow.length; i++){
			arrow[i].addEventListener("click",(e)=>{
				let arrowParent = e.target.parentElement.parentElement;
				arrowParent.classList.toggle("showMenu");
			});
		}
		let sidebar = document.querySelector(".sidebar");
  		let sidebarBtn = document.querySelector(".bx-menu");
  		console.log(sidebarBtn);
  		sidebarBtn.addEventListener("click", ()=>{
    		sidebar.classList.toggle("close");
  		});
	</script>