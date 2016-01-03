<?php /* Template Name: Page Contacts */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php if( have_rows('employe') ): ?>

        <table class="contact-table">
          <?php while( have_rows('employe') ): the_row();
            // vars
            $photo = get_sub_field('photo');
            $name = get_sub_field('name');
            $post = get_sub_field('post');
            $email = get_sub_field('email');
            $phone = get_sub_field('phone');
          ?>
            <tr>
              <td>
                <?php if( $photo ): ?>
                  <img src="<?php echo $photo; ?>" alt="<?php echo $name; ?>">
                <?php endif; ?>
              </td>
              <td>
                <?php echo $name; ?><br>
                <?php echo $post; ?><br>
                email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
                Mobil: <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
              </td>
            </tr>
          <?php endwhile; ?>
        </table>

      <?php endif; ?>

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
<?php get_footer(); ?>
