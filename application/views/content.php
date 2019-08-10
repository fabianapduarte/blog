		<div class="slideshow">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-5 border">
                  <h1>Título da publicação</h1>
                  <h4>Descrição da publicação</h4>
                  <button class="btn btn-primary">Ler mais</button>
                </div>
                <div class="col-md-7">
                  <img class="w-100" src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="Primeiro Slide">
                </div>
              </div>
              
            </div>
            
          </div>

          <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/img2.jpg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/img3.jpg" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>
    

    <!--<div class="container">
			<div class="row justify-content-between">
				<div class="col-7">
					<div class="display-4 my-5">Novas publicações</div>

					<div class="card-group">
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="Imagem de capa do card">
							<div class="card-body"> <?php foreach ($post as $p) {?>
								<h5 class="card-title"><?php echo $p->titulo; ?></h5>
								<p class="card-text"><?php echo $p->descricao; ?></p>
								<p class="card-text"><small class="text-muted"><?php echo $p->datacadastro; ?></small></p> <?php } ?>
							</div>
						</div>
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="Imagem de capa do card">
							<div class="card-body"> <?php foreach ($post as $p) {?>
								<h5 class="card-title"><?php echo $p->titulo; ?></h5>
								<p class="card-text"><?php echo $p->descricao; ?></p>
								<p class="card-text"><small class="text-muted"><?php echo $p->datacadastro; ?></small></p> <?php } ?>
							</div>
						</div>
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="Imagem de capa do card">
							<div class="card-body"> <?php foreach ($post as $p) {?>
								<h5 class="card-title"><?php echo $p->titulo; ?></h5>
								<p class="card-text"><?php echo $p->descricao; ?></p>
								<p class="card-text"><small class="text-muted"><?php echo $p->datacadastro; ?></small></p> <?php } ?>
							</div>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="border my-5">
						<p>about me</p>
					</div>
				</div>	

			</div>
		</div>-->

		