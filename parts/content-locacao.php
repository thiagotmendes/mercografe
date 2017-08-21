<!-- locação impressoras -->
  <section id="locacao" class="locacao-impressora">
    <div class="container">
      <h2 class="text-center"> Locação de Impressoras e Copiadoras </h2>
      <p class="text-center">
        <?php echo get_field('sub_titulo_locação') ?>
      </p>
      <div class="row">
        <div class="col-md-3">
          <?php $imgLocacao = get_field('img_impressora') ?>
          <figure>
            <img src="<?php echo $imgLocacao['url'] ?>" alt="" class="img-responsive">
          </figure>
        </div>
        <div class="col-md-4">
          <?php echo get_field('texto_sessao_locacao') ?>
        </div>
        <div class="col-md-5">
          <h4 class="titulo-contato text-center"> ENTRE AGORA EM CONTATO CONOSCO </h4>
          <div class="formulario">
            <!-- campos formulário -->
            <?php echo do_shortcode('[contact-form-7 id="10" title="Formulário de contato 1"]' ); ?>
            <!-- /campos formulário -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="atendimento">
    <div class="container">
      <p class="text-center">
        <?php echo get_field('texto_final_da_sessão') ?>
      </p>
    </div>
  </section>
  <!-- /locação impressoras -->
