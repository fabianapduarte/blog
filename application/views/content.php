		<div class="container">
			<div class="row justify-content-between">
				<div class="col-7">
					<div class="display-4 my-5">Novas publicações</div>

					<div class="card-group">
						<div class="card">
							<!--<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="Imagem de capa do card">-->
							<div class="card-body"> <?php foreach ($post as $p) {?>
								<h5 class="card-title"><?php echo $p->titulo; ?></h5>
								<p class="card-text"><?php echo $p->descricao; ?></p>
								<p class="card-text"><small class="text-muted"><?php echo $p->datacadastro; ?></small></p> <?php } ?>
							</div>
						</div>
						<div class="card">
							<!--<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="Imagem de capa do card">-->
							<div class="card-body"> <?php foreach ($post as $p) {?>
								<h5 class="card-title"><?php echo $p->titulo; ?></h5>
								<p class="card-text"><?php echo $p->descricao; ?></p>
								<p class="card-text"><small class="text-muted"><?php echo $p->datacadastro; ?></small></p> <?php } ?>
							</div>
						</div>
						<div class="card">
							<!--<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="Imagem de capa do card">-->
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
		</div>

		