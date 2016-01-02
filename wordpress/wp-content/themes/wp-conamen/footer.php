    </div><!-- /.inner -->
  </section><!-- /section -->

</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="inner">

    <div class="footer-block footer-block-left">
      <span class="phone">tel. <a href="tel:+420776260478">+420 776 260 478</a></span>
      <a href="mailto:charita@conamen.cz" class="mail">charita@conamen.cz</a>
      <p class="copyright">
        &copy; <?php echo date("Y"); ?> Собственность <?php bloginfo('name'); ?>.
      </p><!-- /copyright -->
    </div><!-- /.footer-block footer-block-left -->

    <div class="footer-block footer-block-middle">
      <?php wpeFootNav(); ?>
    </div><!-- /.footer-block footer-block-middle -->

    <div class="footer-block footer-block-right">
      <p>
        BANKOVNÍ SPOJENÍ<br>
        Raiffeisenbank a.s.<br>
        Hvězdova 1716/2B, 140 78 Praha 4<br>
        Veřejná sbírka<br>
        Číslo účtu: 2223 2224/5500<br>
        BIC/SWIFT: RZBCCZPP<br>
        IBAN: CZ2755000000000022232224<br>
        Provozní účet<br>
        Číslo účtu: 640 840 6001/5500<br>
        BIC/SWIFT: RZBCCZPP<br>
        IBAN: CZ275500000000006408406001
      </p>
    </div><!-- /.footer-block footer-block-right -->

  </div><!-- /.inner -->
</footer><!-- /footer -->

    <?php wp_footer(); ?>

<script>
$(document).ready(function() {
  $(".owl-carousel-single").owlCarousel({
    navigation: true,
    navigationText: ["<",">"],
    slideSpeed: 300,
    pagination: false,
    paginationSpeed : 400,
    singleItem : true,
    autoPlay : 3000,
    stopOnHover : true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    autoHeight : true,
    transitionStyle:"fade"
  });
});
</script>


<script>

$(document).ready(function() {
  $(".owl-carousel-fourth").owlCarousel({
    items : 4,
    navigation: true,
    navigationText: ["<",">"],
    slideSpeed: 300,
    pagination: false,
    paginationSpeed : 400,
    autoPlay : 3000,
    stopOnHover : true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    transitionStyle:"fade"
  });
});

</script>


</body>
</html>
