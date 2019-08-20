    <div class="container">
      <div class="row justify-content-center my-4">
        <div class="col-12">
          <div class="font-serif display-4 text-center">Todas as Publicações</div>
        </div>

        <div class="col-12">
          <a href="<?php echo base_url(); ?>posts/novopost" class="btn btn-outline-primary mb-5 rounded-0">Nova publicação</a>
        </div>
      </div>

      <div class="row justify-content-between">
        <?php
          if (!empty($posts)) {
            foreach ($posts as $p) {
        ?>
        <div class="col-md-6">
          <div class="card-group mb-5 font">
						<div class="card rounded-0">
							<img class="card-img-top rounded-0" src="<?php echo base_url(); ?>assets/img/<?php echo $p->img; ?>" alt="Imagem de capa do card">
							<div class="card-body">
								<h5 class="card-title font-serif"><?php echo $p->titulo; ?></h5>
                <p class="card-text"><?php echo $p->descricao; ?></p>
                <a href="#" class="btn btn-outline-primary rounded-0">Ver mais</a>
							</div>
						</div>
					</div>
        </div>
        <?php
            }
          }
        ?>
      </div>
    </div>