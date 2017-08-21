<!-- promoção da semana -->
  <section class="promocoes">
    <div class="container">
      <h2 class="text-center"> Promoção da Semana </h2>
      <!--  itens promoções -->
      <div class="row">
        <?php
        if (have_rows('itens_promocao')) {
          while(have_rows('itens_promocao')){ the_row();
            $imgPromocao = get_sub_field('imagem_promocao');
            ?>
            <div class="col-md-4">
              <figure>
                <img src="<?php echo $imgPromocao['url'] ?>" alt="" class="img-responsive">
              </figure>
            </div>
            <?php
          }
        }
        ?>
      </div>
      <!-- / final itens promoções -->
      <p class="text-center" style="color:#fff; margin-top:15px;">
        Enquanto durarem os estoques
      </p>
    </div>
  </section>
  <!-- /promoção da semana -->
