<?php /* template name: home */ ?>
<?php get_header() ?>
  <section class="banner">
    <div class="bannerHome">
      <?php
      if (have_rows('adicionar_novo_banner','option')) {
        while(have_rows('adicionar_novo_banner','option')){ the_row();
          $imgBanner = get_sub_field('banner');
          //var_dump($imgBanner);
          ?>
          <img src="<?php echo $imgBanner['url'] ?>" class="img-responsive">
          <?php
        }
      }
     ?>
    </div>
  </section>


  <?php if(have_posts()): ?>
    <?php while ( have_posts() ): the_post(); ?>
		<?php get_template_part('parts/content-diferenciais' ); ?>
		<?php get_template_part('parts/content-locacao' ); ?>
		<?php get_template_part('parts/content-clientes' ); ?>
		<?php get_template_part('parts/content-promocoes' ); ?>
		<?php get_template_part('parts/content-suprimentos' ); ?>
		<?php get_template_part('parts/content-outsourcing' ); ?>
		<?php get_template_part('parts/content-quemsomos' ); ?>
    <?php endwhile ?>
  <?php endif; ?>
<?php get_footer() ?>
