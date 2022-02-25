<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>imagem</title>
	<head>
	<body>
		<h1>Cadastro de imagem</h1>
		<form method="POST" action="" enctype="multipart/form-data";>
			<div>
				<img src="icone2.jpg" style="width:200px; height: 150px; float: left;">
			</div>
			<div style=" height: 150px; margin-left:5px;">
				Foto do Produto: <br><input type="file" name="imagem" id="imagem" onchange="previewImagem()"><br><br><br>Produto:<input type=""><br><br>
				<input type="submit" value="cadastrar">
			</div>
		</form>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>	
			function previewImagem(){
				var imagem = document.querySelector('input[name=imagem]').files[0];
				var preview = document.querySelector('img');
			
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = "";
				}
			}
		</script>

	</body>

</htm>