(function( $ ) {

  //This will look for the iis in Riipen and give them a span
  $('.riipen-brand').html(function (i, html) {
    return html.replace('Riipen ', '<span class="highlight-orange">R<span class="highlight-blue">ii</span>pen</span> ');
  });

  $('#wp_posts_carousel-2').html(function (i, html) {
    return html.replace('Riipened', '<span class="highlight-orange">R<span class="highlight-blue">ii</span>pened</span>');
  });

  $('#wp_posts_carousel-3').html(function (i, html) {
    return html.replace('Riipened', '<span class="highlight-blue">R<span class="highlight-orange">ii</span>pened</span>');
  });

 //This will show/hide the navigation list in mobile view.
 $('.menu-toggle').on('click', function(){
   event.preventDefault();
   $('#primary-menu').animate({width:'toggle'},350);
  });

  $('.menu-toggle').on('focusout', function(){
    event.preventDefault();
    //$('#primary-menu').slideToggle(350);
   });

 //This will show/hide the search form in navigation.
 $('.show-search').on('click', function(event){
   event.preventDefault();
   $('.site-search input[type=search]').slideToggle("fast").css('display','block').focus();
 });

 //This will hide the search form when no longer in focus.
 $('.site-search input[type=search]').on('focusout', function(){
   $(this).slideToggle(350);
 });

})( jQuery );
