$(document).ready(function() {
  
  // FOUNDATION INIT
  $(document).foundation();

  // CARRUSELES
  $(".-carrusel-un-item").owlCarousel({
    autoPlay: true,
    slideSpeed : 600,
    paginationSpeed : 600,
    pagination: true,
    navigation: true,
    navigationText: ["←","→"],
    singleItem:true,
    pagination : false
  });

  $(".-carrusel-tres-items").owlCarousel({
    autoPlay: false,
    navigation: true,
    navigationText: ["←","→"],
    pagination: false,
    items : 3,
    itemsDesktop : [1200,3],
    itemsDesktopSmall : [400,1]
  });

  $(".-carrusel-cuatro-items").owlCarousel({
    autoPlay: false,
    navigation: true,
    navigationText: ["←","→"],
    pagination: false,
    items : 4,
    itemsDesktop : [1200,4],
    itemsDesktopSmall : [400,1]
  });
  $(".-carrusel-seis-items").owlCarousel({
    autoPlay: false,
    navigation: true,
    navigationText: ["←","→"],
    pagination: false,
    items : 6,
    itemsDesktop : [1200,6],
    itemsDesktopSmall : [400,1]
  });

  // TARJETAS
  $('.control-abrir').click(function() {
    $(this).parents('.tarjeta').find('.tarjeta-reverso').slideDown('fast');
  });
  $('.control-cerrar').click(function() {
    $(this).parents('.tarjeta').find('.tarjeta-reverso').slideUp('fast');
  });

  // MENU
  $('.menu--responsive').click(function() {
    $('.top-bar-menu').toggle('fast');
  });
  
});
