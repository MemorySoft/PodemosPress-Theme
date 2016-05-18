$(document).ready(function() {
	$('form#contactForm').submit(function() {
    $('form#contactForm .error').remove();
    var hasError = false;
    $('.requiredField').each(function() {
      if(jQuery.trim($(this).val()) == '') {
        var labelText = $(this).prev('label').text();
        $(this).parent().append('<span class="error">Has olvidado introducir tu '+labelText+'.</span>');
        hasError = true;
      } else if($(this).hasClass('email')) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if(!emailReg.test(jQuery.trim($(this).val()))) {
          var labelText = $(this).prev('label').text();
          $(this).parent().append('<span class="error">Has introducido un '+labelText+' inválido.</span>');
          hasError = true;
        }
      }
    });
    if(!hasError) {
      $('form#contactForm li.buttons button').fadeOut('normal', function() {
        $(this).parent().append('<img src="/wp-content/themes/td-v3/images/template/loading.gif" alt="Loading&hellip;" height="31" width="31" />');
      });
      var formInput = $(this).serialize();
      $.post($(this).attr('action'),formInput, function(data){
        $('form#contactForm').slideUp("fast", function() {           
          $(this).before('<p class="thanks"><strong>¡Gracias!</strong> Tu mensaje ha sido enviado con éxito.</p>');
        });
      });
    }
    
    return false;
    
  });
});