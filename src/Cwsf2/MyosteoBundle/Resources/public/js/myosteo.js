$(function(){
  $('li a').each(function(){
    if($(this).attr('href') == window.location.pathname) {
      $(this).parent().addClass('active');
    }
  });
  
  $('.alert-message .close').click(function(){
	$(this).parent().fadeOut(1000, function () {
	  $(this).remove();
    });
  });
});