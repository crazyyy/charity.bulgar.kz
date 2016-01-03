<?php get_header(); ?>
<?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <article class="article-slide article-loop-slide">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="inner">
        <div class="article-slide-left">
          <h2 class="title-red"><?php the_title(); ?></h2>
          <h3 class="title-subtitle">POMOC PRO <?php the_field('name'); ?> <span><?php if( have_rows('donations') ): $sum = 0; while ( have_rows('donations') ) : the_row(); $number = get_sub_field('сontributions'); $sum += $number; endwhile; echo $sum; else : echo '0'; endif; ?>,-</span></h3>
          <?php the_field('description'); ?>
          <a href="" class="btn btn-blue">ČIST DALŠÍ</a>
          <a href="" class="btn btn-red">PŘÍBĚH DÍTĚTE</a>
        </div><!-- /.article-slide-left -->
        <div class="article-slide-right">
          <div class="owl-carousel-single">
            <?php $images = get_field('gallery'); if( $images ): ?>
              <?php foreach( $images as $image ): ?>
                <div class="item"><img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>"></div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div><!-- /.article-slide-right -->
        <div class="article-slide-bottom"></div><!-- /.article-slide-bottom -->
      </div><!-- /.inner -->
    <?php endwhile; else: endif; ?>
  </article><!-- /.article-slide -->

<?php get_template_part('pagination'); ?>
<?php get_footer(); ?>
