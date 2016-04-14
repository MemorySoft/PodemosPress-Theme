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

var image_field;
jQuery(function($){
  $(document).on('click', 'input.select-img', function(evt){
    image_field = $(this).siblings('.img');
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
    return false;
  });
  window.send_to_editor = function(html) {
    imgurl = $('img', html).attr('src');
    image_field.val(imgurl);
    tb_remove();
  }
});