    <div class="container">
    <div class="font-serif display-4 text-center my-4">Nova Publicação</div>
      <form class="my-5">
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputTitulo">Título</label>
            <input type="text" class="form-control" id="inputTitulo" placeholder="Título da publicação" required>
          </div>

          <div class="form-group col-md-4">
            <label for="inputCategoria">Categoria</label>
            <select id="inputCategoria" class="form-control" required>
              <option selected>Escolher...</option>
              <?php 
                foreach ($categoria as $c) {
              ?>
              <option value="<?php echo $c->id; ?>"><?php echo $c->nome; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputDescricao">Descrição</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Descrição da publicação (opcional)">
        </div>

        <div class="form-group">
          <label for="inputText">Texto</label><br>
          <textarea class="form-control" id="inputText" rows="20" required></textarea>
        </div>

        <div class="form-group">
          <label for="img">Selecionar imagem</label>
          <input type="file" class="form-control-file" id="img">
        </div>

        <a href="#" class="btn btn-outline-primary rounded-0">Publicar</a>
      </form>
    </div>