<!-- suprimentos -->
  <section id="suprimentos" class="suprimentos">
    <div class="container">
      <h2 class="text-center">
        Suprimentos de impressão e informática e materiais de escritório <br>
        <small> <?php echo get_field('sub_titulo') ?> </small>
      </h2>

      <?php echo get_field('texto_suprimentos') ?>
      <?php
      if (have_rows('itens_suprimentos')) {
        while(have_rows('itens_suprimentos')){ the_row();
          $img = get_sub_field('imagem_suprimento');
          ?>
          <div class="row">
            <div class="col-md-5 col-md-offset-2">
              <h4> <?php the_sub_field('titulo') ?></h4>
              <?php the_sub_field('descricao') ?>
            </div>
            <div class="col-md-3">
              <figure>
                <img src="<?php echo $img['url'] ?>" class="img-responsive" >
              </figure>
            </div>
          </div>
          <?php
        }
      }
       ?>
    </div>
  </section>
  <!-- / suprimentos -->
