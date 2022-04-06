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
					<li><a href="">Cadastar Administrador</a></li>
					<li><a href="">Visualizar Administrador</a></li>
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
					<li><a href="organizador-cadastro.php">Cadastar Produto</a></li>
					<li><a href="">Visualizar Produto</a></li>
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
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bxs-user-detail'></i>
						<span class="link-name">CLIENTE</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bx-money-withdraw'></i>
						<span class="link-name">DÍVIDA</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bx-detail'></i>
						<span class="link-name">RELATÓRIOS</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#">
						<i class='bx bxs-briefcase'></i>
						<span class="link-name">FUNCIONÁRIOS</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
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
  		let sidebarBtn = document.querySelector(".logo-name");
  		console.log(sidebarBtn);
  		sidebarBtn.addEventListener("click", ()=>{
    		sidebar.classList.toggle("close");
  		});
	</script>