<?php /* Template Name: Home Page Template */ get_header(); ?>
  <article class="article-bordered article-bordered-left">
    <h1 class="title-bordered"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article><!-- article-bordered -->

  <article class="middle-row">
    <h6 class="middle-row-title"> Díky vam jsme od doposud pomohli dětem a rodinám<br>v celé ČR  v hodnotě  <br><span>625 620 Kč</span></h6>
  </article><!-- /.middle-row -->

  <article class="article-slide">

    <?php query_posts( array( 'post_type' => child, 'showposts' => 1 ) ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
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
      <?php endwhile; ?>
    <?php wp_reset_query(); ?>

  </article><!-- /.article-slide -->

  <article class="article-carousel article-carousel-right">
    <h5 class="article-carousel-title">POMOC, PROSÍM!</h5>
    <div class="owl-carousel owl-carousel-fourth">
      <?php query_posts( array( 'post_type' => child, 'showposts' => 25 ) ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="item">
            <?php $images = get_field('gallery'); $image_1 = $images[0]; ?>
            <img src="<?php echo $image_1[url]; ?>" alt="<?php the_title(); ?>">
            <span class="title-name"><?php the_field('name'); ?></span>
            <span class="contib"><?php if( have_rows('donations') ): $sum = 0; while ( have_rows('donations') ) : the_row(); $number = get_sub_field('сontributions'); $sum += $number; endwhile; echo $sum; else : echo '0'; endif; ?>,-</span>
          </div><!-- item -->
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div><!-- owl-carousel-fourth -->
  </article><!-- /.article-carousel article-carousel-right -->

  <article class="article-bordered article-bordered-centered">
    <h3 class="title-bordered">JAK MŮŽU POMOCT?</h3>
    <h4 class="title-subtitle title-subtitle-centered">KDYŽ VY CHCETE POMOCT, MÁ NĚKOLIK SPÚSOBU:</h4>
    <ul class="howtohelp">
      <li>
        <h5>Zasláním finančního daru na konkrétní dítě</h5>
        <p>V sekci "komu pomáháme" si můžete přečíst příběhy všech dětí, které podporujeme. Každé dítě má přidělen svůj variabilní symbol, pod tímto symbolem můžete přispět libovolnou částkou na konkrétní dítě. Můžete také poslat finanční dar bez uvedení variabilního symbolu, tento příspěvek bude rozdělen  mezi děti, které v součastné době podporujeme.</p>
        <p>Transparentní účet Č.ú. veřejné sbírky 2223 2224/5500</p>
        <a href="">DALŠÍ</a>
      </li>
      <li>
        <h5>Koupí benefičního předmětu</h5>
        <p>Ve vašem městě můžete potkat prodejce s benefičními předměty Conamen o.s., tyto prodejci mají vždy na sobě oblečení Conamen o.s. a benefiční předměty jsou označené našim logem a webovými stránkami. Koupí předmětu přispějete též na veřejnou sbírku.</p>
        <a href="">DALŠÍ</a>
      </li>
      <li>
        <h5>Mužete poslát SMS</h5>
        <p>Ve vašem městě můžete potkat prodejce s benefičními předměty Conamen o.s., tyto prodejci mají vždy na sobě oblečení Conamen o.s. a benefiční předměty jsou označené našim logem a webovými stránkami. Koupí předmětu přispějete též na veřejnou sbírku.</p>
        <p>Telefon je 877 637 777</p>
        <a href="">DALŠÍ</a>
      </li>
      <li>
        <h5>Můžete dát do své internet stranky náš banner</h5>
        <p>Darováním zdravotnické či kompenzační pomůcky, které je cílem veřejné sbírky a tak pomoci přímo dítěti. Darováním kancelářských potřeb (papír, psací potřeby atd.) <br>
        Poskytnutí služby – např. tisku plakátů či výroby propagačních materiálů, darováním poukazu na pohonné hmoty apod. V případě, že se rozhodnete takto pomoci, prosím kontaktujte nás info@conamen.cz
        <br>Děkujeme.</p>
        <a href="">DALŠÍ</a>
      </li>
      <li>
        <h5>Můžete též pomoci hmotnou věcí či poskytnutím služby</h5>
        <p>Darováním zdravotnické či kompenzační pomůcky, které je cílem veřejné sbírky a tak pomoci přímo dítěti. Darováním kancelářských potřeb (papír, psací potřeby atd.) <br>
        Poskytnutí služby – např. tisku plakátů či výroby propagačních materiálů, darováním poukazu na pohonné hmoty apod. V případě, že se rozhodnete takto pomoci, prosím kontaktujte nás info@conamen.cz Děkujeme.</p>
        <a href="">DALŠÍ</a>
      </li>
    </ul>
  </article><!-- /.article-bordered article-bordered-centered -->

  <article class="article-carousel article-carousel-left article-carousel-gray">
    <h5 class="article-carousel-title">KOMU JSME POMOHLI?</h5>
    <div class="owl-carousel owl-carousel-fourth owl-carousel-blue">
      <?php query_posts( array( 'post_type' => child, 'showposts' => 25 ) ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="item">
            <span class="title-name"><?php the_field('name'); ?></span>
            <?php $images = get_field('gallery'); $image_1 = $images[0]; ?>
            <img src="<?php echo $image_1[url]; ?>" alt="<?php the_title(); ?>">
            <span class="darovana">Darovaná částka</span>
            <span class="contib"><?php if( have_rows('donations') ): $sum = 0; while ( have_rows('donations') ) : the_row(); $number = get_sub_field('сontributions'); $sum += $number; endwhile; echo $sum; else : echo '0'; endif; ?>,-</span>
          </div><!-- item -->
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div><!-- owl-carousel-fourth -->
  </article><!-- /.article-carousel article-carousel-left article-carousel-gray -->

  <article class="be-partners">
    <h5 class="be-partners-red">Stante naším partnerem</h5>
    <h5 class="be-partners-blue">DĚTI JE NALÉHAVÉ  V VÁŠÍ ZAPOTŘEBÍ</h5>
    <span class="be-partners-phone">TEL. <a href="tel:+420776260478" class="">+420 776 260 478</a></span>
  </article><!-- /.be-partners -->

  <article class="our-parners-slider">
    <h6 class="title-red">NAŠÍ PARTNEŘI</h6>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem facilis ipsa sapiente reiciendis harum et illo, odio vel esse, ab facere asperiores, eius nostrum pariatur libero obcaecati id architecto magnam.
  </article><!-- /.our-parners-slider -->

  <article class="our-parners-logos">
    <ul>
      <li><img src="" alt=""></li>
      <li><img src="" alt=""></li>
      <li><img src="" alt=""></li>
      <li><img src="" alt=""></li>
      <li><img src="" alt=""></li>
    </ul>
  </article><!-- /.our-parners-logos -->



<?php get_footer(); ?>
