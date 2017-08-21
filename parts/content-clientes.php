<!-- clientes -->
  <section class="clientes">
    <div class="container">
      <h2 class="text-center"> Nossos fornecedores   </h2>
    </div>
  </section>
  <!-- lista de clientes -->
  <section class="lista-fornecedor">
    <div class="container">
      <div class="row">
        <?php
        if (have_rows('logos_fornecedores')) {
          while(have_rows('logos_fornecedores')){ the_row();
            $imgCliente = get_sub_field('img_logo');
            ?>
              <div class="col-md-4">
                <figure>
                  <img src="<?php echo $imgCliente['url'] ?>" class="img-responsive center-block">
                </figure>
              </div>
            <?php
          }
        }
         ?>
      </div>
      <!-- receba noticias -->
      <div class="receba-noticias">
        <?php echo do_shortcode('[contact-form-7 id="86" title="Form-news"]') ?>
        <!--<div class="row">
          <div class="col-md-4 text-center">
            <span>Receba notícias em seu email</span>
          </div>
          <div class="col-md-8">
            <form action="index.html" method="post">
              <div class="row">
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="" size="70">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <button type="button" name="button" class="btn btn-site btn-block"> enviar </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>-->
      </div>
    </div>
  </section>
  <!-- nossos fornecedores -->
