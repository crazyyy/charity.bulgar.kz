<?php /* Template Name: Page Contacts */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <table class="contact-table">
        <?php if( have_rows('employe') ): while ( have_rows('employe') ) : the_row(); ?>

            <tr>
              <td>
                <?php if(  get_sub_field('photo') ): ?>
                  <img src="<?php the_sub_field('photo'); ?>" alt="<?php the_sub_field('name'); ?>">
                <?php endif; ?>
              </td>
              <td>
                <?php the_sub_field('name'); ?><br>
                <?php the_sub_field('post'); ?><br>
                email: <a href="mailto:<?php echo $email; ?>"><?php the_sub_field('email'); ?></a><br>
                Mobil: <a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
              </td>
            </tr>

        <?php endwhile; else : endif; ?>
      </table>

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
<?php get_footer(); ?>
