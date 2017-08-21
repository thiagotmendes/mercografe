<!--  diferencias -->
  <section class="titulo-diferenciais">
    <div class="container">
      <h2 class="text-center"> Nossos diferencias </h2>
    </div>
  </section>
<!-- adiciona os itens dos diferenciais -->
  <section class="itens-diferenciais">
    <div class="container">
      <div class="row">
        <?php  
        if(have_rows('sessao_diferencial')){
          while(have_rows('sessao_diferencial')){ the_row();
            $imgIcones = get_sub_field('img_diferencial');
            $tituloDiferencias = get_sub_field('titulo_diferencial');
            $descricaoDiferenciais = get_sub_field('texto_diferencial');
            ?>
            <div class="col-md-3">
              <figure>
                <img src="<?php echo $imgIcones['url'] ?>" alt="" class="img-responsive center-block">
              </figure>
              <h3 class="text-center"> <?php echo $tituloDiferencias ?> </h3>
              <p class="text-center">
                <?php echo $descricaoDiferenciais ?>
              </p>
            </div>
            <?php
          }
        }
        ?>

      </div>
    </div>
  </section>
  <!-- /Diferenciais -->