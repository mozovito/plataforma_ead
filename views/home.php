<!DOCTYPE html>
<html>
<head>
	<title>GV_EAD</title>
</head>
<body id="back-black">
	<div class="container-fluid mt-3">
		<div class="row justify-content-center" id="dark-blue">
			<?php if(empty($info->getFoto())):?>
				<img class="w-25" src="<?php echo BASE?>assets/imagens/home.png">
			<?php else:?>
				<img style="height:300px;width:300px;border-radius:150px;" src="<?php echo BASE?>assets/imagens/usuarios/<?php echo $info->getFoto()?>">
			<?php endif;?>
		</div>
		<div class="row">
			<div class="list-group list-group-horizontal">
				<button id="destaques" class="list-group-item mr-2" style="background-color:black;">Destaques</button>
				<button id="Cursos" class="list-group-item" style="background-color:black;">Cursos Da Plataforma</button>
			</div>
		</div>
		<h1 class="desq" style="display:none;">Em destaque</h1>
		<?php if($tem_desq):?>
			<div class="row desq" style="display:none;">
				<div class="col-md-12 d-sm-inline-flex">
					<?php foreach($categorias as $key=>$categoria):?>
						<?php if(array_key_exists($key,$carousel)):?>
							<div class="slide carousel ml-2 mt-3" data-ride="carousel" data-interval="5000" id="cursoSlideHome<?php echo $key?>" style="width:300px;">
								
								<div class="carousel-inner">
									<?php foreach($carousel[$key] as $key1=>$curso):?>
										<?php if($categoria['id']==$curso['id_categoria']):?>
											<?php if($key1==0):?>
												<div class="carousel-item active">
													<a href="<?php echo BASE;?>cursos/entrar/<?php echo $curso['id']?>">
														<div class="card" id="dark-blue">
															<div class="card-header">
																<h4 align="center"><?php echo $categoria['categoria']?></h4>
															</div>
															<img  class="card-img-top img-fluid" src="<?php echo BASE;?>assets/imagens/cursos/<?php echo $curso['imagem']?>" style="height:200px;" class="w-100">
															<div class="card-body">
																<h5 class="card-title" align="center"><?php echo utf8_encode($curso['nome'])?></h3>
															</div>
														</div>
													</a>
												</div>
											<?php else:?>
												<div class="carousel-item">
													<a  href="<?php echo BASE;?>cursos/entrar/<?php echo $curso['id']?>">
														<div class="card" id="dark-blue">
															<div class="card-header">
																<h4 align="center"><?php echo $categoria['categoria']?></h4>
															</div>
															<img  class="card-img-top" src="<?php echo BASE;?>assets/imagens/cursos/<?php echo $curso['imagem']?>" style="height:200px;" class="w-100 img-fluid img-fluid">
															<div class="card-body">
																<h5 class="card-title" align="center"><?php echo utf8_encode($curso['nome'])?></h5>
															</div>
														</div>
													</a>
												</div>
											<?php endif;?>
										<?php endif;?>
									<?php endforeach;?>
								</div>
								<a href="#cursoSlideHome<?php echo $key?>" class="carousel-control-prev" data-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								</a>
								<a href="#cursoSlideHome<?php echo $key?>" class="carousel-control-next" data-slide="next">
									<span class="carousel-control-next-icon"></span>
								</a>
								
							</div>
						<?php endif;?>
					<?php endforeach;?>
				</div>
			</div>
		<?php else:?>
			<div class="row desq" style="display:none;">
				<h3>Não há cursos em destaque ainda</h3>
			</div>
		<?php endif;?>
		<div class="row justify-content-center cursos">
			<nav>
				<ul class="pagination">
					<?php for($page=0;$page<=$total_regs;$page++):?>
						<li class="page-item"><a style="color:white;" id="dark-blue" class="page-link" href="?pagina=<?php echo $page?>"><?php echo $page+1?></a></li>
					<?php endfor;?>
				</ul>
			</nav>
		</div> 
		<div class="row justify-content-center cursos">
			<?php foreach($curso_paginaçao as $cr):?>
				<a href="<?php echo BASE?>cursos/entrar/<?php echo $cr['id']?>" class="card ml-3 mb-3" id="dark-blue">
					<img src="<?php echo BASE?>assets/imagens/cursos/<?php echo $cr['imagem']?>" class="card-img-top img-fluid" style="width:300px;height:300px;">
					<div class="card-body">
						<h5 align="center"><?php echo utf8_encode($cr['nome'])?></h5>
					</div>
				</a>
			<?php endforeach;?>
		</div>
	</div>
	<footer>
	</footer>
</body>
</html>
