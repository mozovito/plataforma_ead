<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body id="back-black">
	<div class="container-fluid mt-3">
		<div class="row justify-content-center" id="dark-blue">
			<img class="w-25" src="<?php echo BASE?>assets/imagens/home.png">
        </div>

        <?php if(empty($cursos)):?>
            <h1 class="mt-5">Nenhum curso encontrado</h1>
        <?php else:?>
            <h1>Você está procurando por "<?php echo $busca?>"</h1>
        <?php endif;?>
        <div class="row mt-5">
            <?php foreach($cursos as $curso):?>
                <a href="<?php echo BASE?>cursos/entrar/<?php echo $curso['id']?>" class="card ml-3 mb-3" id="dark-blue">
                    <div class="card-header">
                        <h4 align="center"><?php echo $nome_categoria?></h4>
                    </div>
					<img src="<?php echo BASE?>assets/imagens/cursos/<?php echo $curso['imagem']?>" class="card-img-top img-fluid" style="width:300px;height:300px;">
					<div class="card-body">
						<h5 align="center"><?php echo $curso['nome']?></h5>
					</div>
				</a>
			<?php endforeach;?>
        </div>
        
    </div>
</body>
</html>