<?php
  query_posts( array( 'post_type' => child, 'showposts' =>150 ) );
  $alldonations = 0;
  while ( have_posts() ) : the_post();

    if( have_rows('donations') ):
      $sum = 0;
      while ( have_rows('donations') ) : the_row();
        $number = get_sub_field('сontributions');
        $sum += $number;
      endwhile;
      else :
        $sum = 0;
      endif;

      $alldonations += $sum;
    endwhile;
  wp_reset_query();
  $alldonations = number_format($alldonations, 2, ',', ' ');
?>
<article class="middle-row">
  <h6 class="middle-row-title"> Díky vam jsme od doposud pomohli dětem a rodinám<br>v celé ČR  v hodnotě  <br><span><?php echo $alldonations; ?> Kč</span></h6>
</article><!-- /.middle-row -->



