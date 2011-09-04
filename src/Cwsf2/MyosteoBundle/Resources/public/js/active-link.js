$(function(){
  $('li a').each(function(){
    if($(this).attr('href') == window.location.pathname) {
      $(this).parent().addClass('active');
    }
  });
});