$(document).ready(function() {

  // FOUNDATION INIT
  $(document).foundation();
  
  // CARRUSELES
  $(".-carrusel-un-item--sin-controles").owlCarousel({
    autoPlay: true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    pagination : false
  });

  $(".-carrusel-tres-items--paginacion").owlCarousel({
    autoPlay: true,
    navigation: false,
    pagination: true,
    items : 3,
    itemsDesktop : [1200,3],
    itemsDesktopSmall : [400,1]
  });

  $(".-carrusel-tres-items--navegacion").owlCarousel({
    autoPlay: true,
    navigation: true,
    navigationText: ["«","»"],
    pagination: false,
    items : 3,
    itemsDesktop : [1200,3],
    itemsDesktopSmall : [400,1]
  });

});