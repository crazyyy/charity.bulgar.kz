<?php /* Template Name: Page Gray */ get_header(); ?>
  </div><!-- /.inner -->
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article class="our-parners-slider">
      <div class="inner">
        <h6 class="title-red">NAŠÍ PARTNEŘI</h6>
        <div class="owl-carousel owl-carousel-parners">
          <div class="item">
            <div class="owl-carousel-parners-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/partners/parners-1.png" alt="">
            </div><!-- owl-carousel-parners-img -->
            <div class="owl-carousel-parners-descr">
              <p>Obchodní podmínky se nevztahují na případy, kdy osoba, která má v úmyslu nakoupit zboží od prodávajícího, je právnickou osobou či osobou, jež jedná</p>
              <p>při objednávání zboží v rámci své podnikatelské činnosti nebo v rámci svého samostatného výkonu povolání.</p>
            </div><!-- /.owl-carousel-parners-descr -->
          </div><!-- item -->
          <div class="item">
            <div class="owl-carousel-parners-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/partners/parners-1.png" alt="">
            </div><!-- owl-carousel-parners-img -->
            <div class="owl-carousel-parners-descr">
              <p>Obchodní podmínky se nevztahují na případy, kdy osoba, která má v úmyslu nakoupit zboží od prodávajícího, je právnickou osobou či osobou, jež jedná</p>
              <p>při objednávání zboží v rámci své podnikatelské činnosti nebo v rámci svého samostatného výkonu povolání.</p>
            </div><!-- /.owl-carousel-parners-descr -->
          </div><!-- item -->
        </div><!-- owl-carousel owl-carousel-parners -->
      </div><!-- /.inner -->
    </article><!-- /.our-parners-slider -->

    <article class="our-parners-logos">
      <div class="inner">
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/our-parners-logos-1.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/our-parners-logos-2.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/our-parners-logos-3.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/our-parners-logos-4.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/our-parners-logos-5.png" alt=""></li>
        </ul>
      </div><!-- /.inner -->
    </article><!-- /.our-parners-logos -->

    <article class="be-partners">
      <div class="inner">
        <h5 class="be-partners-red">Stante naším partnerem</h5>
        <h5 class="be-partners-blue">DĚTI JE NALÉHAVÉ  V VÁŠÍ ZAPOTŘEBÍ</h5>
        <span class="be-partners-phone">TEL. <a href="tel:+420776260478" class="">+420 776 260 478</a></span>
      </div><!-- /.inner -->
    </article><!-- /.be-partners -->
  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
  <div class="inner">
<?php get_footer(); ?>
