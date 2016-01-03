// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());

// Place any jQuery/helper plugins in here.
$(document).ready(function() {
  $(".owl-carousel-single").owlCarousel({
    navigation: true,
    navigationText: ["<",">"],
    slideSpeed: 300,
    pagination: false,
    paginationSpeed : 400,
    singleItem : true,

    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    autoHeight : true,
    transitionStyle:"fade"
  });
});
$(document).ready(function() {
  $(".owl-carousel-parners").owlCarousel({
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

    transitionStyle:"fade"
  });
});
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
