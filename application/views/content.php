		<?php
      if (!empty($carousel)) {
    ?>
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
            foreach ($carousel as $post) {
           ?>
          <div class="carousel-item <?php echo $item_class; ?>">
            <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/<?php echo $post->img; ?>" alt="Segundo Slide">
            <div class="carousel-caption d-md-block text-left mb-5">
              <h1><?php echo $post->titulo ?></h1>
              <p><?php echo $post->descricao != null ? $post->descricao: ''; ?></p>
            </div>
          </div>

          <?php 
                $item_class = ' ';
              }
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
    

    <div class="container">
			<div class="row justify-content-between">
				<div class="col-md-7">
					<div class="display-4 my-5 font-serif">Novas publicações</div>
          <?php
          if (!empty($posts)) {
            foreach ($posts as $p) {
            
          ?>
          <div class="card-group mb-5 font">
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/<?php echo $p->img; ?>" alt="Imagem de capa do card">
							<div class="card-body">
								<h5 class="card-title font-serif"><?php echo $p->titulo; ?></h5>
                <p class="card-text"><?php echo $p->descricao; ?></p>
                <a href="#" class="btn btn-primary">Ver mais</a>
							</div>
						</div>
					</div>
          <?php
            }
          ?>
          <div>
            <a href="#" class="btn btn-primary mb-5">Todas as publicações</a>
          </div>
          <?php
          }
          else {
            echo "<p class='mb-5'>Não há novas publicações.</p>";
          }
          ?>
				</div>

				<div class="col-md-4">
					<div class="about my-5 p-3">
            <?php foreach ($usuario as $user) { ?>
						<h3 class="text-center font-serif">Sobre mim</h3>
            <div class="img-user my-4">
              <img src="<?php echo base_url(); ?>assets/img/<?php echo $user->img; ?>" class="w-100" height="270">
            </div>
            <div class="font-serif position-relative">
              <h5 class="text-center"><?php echo $user->nome; ?></h5>
              <p><?php echo $user->sobre; ?></p>
            </div>
          <?php } ?>
          </div>
				</div>	
			</div>
		</div>
