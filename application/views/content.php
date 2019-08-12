		<div class="slideshow">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <?php 
            $item_class = ' active';
            $image = ' ';
            foreach ($posts as $post) {
              if ($post->img == null) {
                $image = 'img0.jpg';
              }
              else {
                $image = $post->img;
              }
           ?>
          <div class="carousel-item <?php echo $item_class; ?>">
            <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/<?php echo $image; ?>" alt="Segundo Slide">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1><?php echo $post->titulo ?></h1>
              <p><?php echo $post->descricao != null ? $post->descricao: ''; ?></p>
            </div>
          </div>

          <?php 
              $item_class = ' ';
            }
           ?>
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

		