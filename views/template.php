<!DOCTYPE html>
<html> 
<head> 
	<link href="https://fonts.googleapis.com/css?family=Bangers|Noticia+Text|Saira+Condensed:300|ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE;?>assets/css/template.css">
	<link rel="stylesheet" href="<?php echo BASE?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css"/>
	<script type="text/javascript" src="<?php echo BASE;?>assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE?>assets/js/bootstrap.bundle.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>GV_EAD</title>
</head> 
<body> 
	<div class="container-fluid" id="dark-blue">
		<nav class="navbar navbar-expand-lg d-flex justify-content-center" id="dark-blue">
			<a class="navbar-brand logo" href="<?php echo BASE;?>">PEIXOTAO_EAD</a>
			<button id="perfil_oculto" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topo_principal">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</button>
			<div class="navbar-collapse collapse" id="topo_principal">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="<?php echo BASE?>painel/home">Instrutor</a>
					<a class="nav-item nav-link" href="<?php echo BASE?>home/meus_cursos">Meus Cursos</a>
				</div>
			</div>
			<div id="modais">
			
			</div>
			<div class="dropleft btn-group mr-3">
				<?php if(!empty($dados['info']->getFoto())):?>
					<img id="perfil" class="dropdown-toggle" data-toggle="dropdown" src="<?php echo BASE;?>assets/imagens/usuarios/<?php echo $dados['info']->getFoto()?>" style="width: 40px;height: 40px;border-radius: 20px;">
				<?php else:?>
					<img id="perfil" class="dropdown-toggle" data-toggle="dropdown" src="<?php echo BASE;?>assets/imagens/usuario.png" style="width: 60px;height: 60px;">
				<?php endif;?>
				<div class="dropdown-menu" id="back-black">
					<a href="<?php echo BASE;?>home/conta_usuario/<?php echo $_SESSION['aluno']?>"class="dropdown-item">Conta</a>
					<a href="<?php echo BASE;?>painel/home"class="dropdown-item">Instrutor</a>
					<a href="http://localhost/ead/system_chat/"class="dropdown-item">Chat</a>
					<a href="<?php echo BASE;?>login/logout"class="dropdown-item">Sair</a>
				</div>
			</div>
			<form method="GET" class="form-inline" action="<?php echo BASE?>Busca">
				<select name="categoria" class="btn">
					<option value="0">Todas categorias</option>
					<?php foreach($dados['categorias'] as $categoria):?>
						<option <?php echo (!empty($dados['categoria_ativa']) && $dados['categoria_ativa']==$categoria['id']?'selected':'')?> value="<?php echo $categoria['id']?>"><?php echo $categoria['categoria']?></option>
					<?php endforeach;?>
				</select>
				<input type="search" class="form-control" name="busca" value="<?php echo (!empty($dados['busca'])?$dados['busca']:'')?>" placeholder="Pesquise aqui" id="busca" required="required">
				<input style="background-color:white; color:black;border:none;" type="submit" class="btn" value ="pesquisar"></input>
			</form>
		</nav>
	</div>
	<script>
		const BASE="<?php echo BASE?>"
		const SESSION=<?php echo $_SESSION['aluno']?>
	</script>
	<?php $this->loadInTemplate($name,$dados)?>
	<script type="text/javascript" src="<?php echo BASE;?>assets/js/script.js"></script>
	<footer>
		<div class="rodape">
			<div class="jumbotron">
				<h3 class="display-4">Suporte</h3>
				<h5>sandramariagv11@gmail.com</h5>
				<h5>Aleixandre Peixoto e responsável por esse sistema</h5>
				<a href="https://www.facebook.com/profile.php?id=100011563714434">
					<img src="<?php echo BASE?>assets/imagens/facebook.jpg" style="width:50px;height:50px;">
				</a>
			</div>
			<div class="jumbotron">
				<h1>Seja um Instrutor você também</h1>
				<a href="<?php echo BASE?>painel" class="btn btn-lg w-100">Clique aqui!</a>
			</div>
		</div>
	</footer>
</body>
</html>