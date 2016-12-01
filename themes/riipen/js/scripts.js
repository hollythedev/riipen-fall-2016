(function( $ ) {

 //This will show/hide the navigation list in mobile view.
 $('.menu-toggle').on('click', function(){
   event.preventDefault();
   $('#primary-menu').toggle();
  });

  $('.menu-toggle').on('focusout', function(){
    event.preventDefault();
    $('#primary-menu').hide();
   });

 //This will show/hide the search form in navigation.
 $('.show-search').on('click', function(event){
   event.preventDefault();
   $('.site-search input[type=search]').slideToggle("fast").css('display','block').focus();
 });

 //This will hide the search form when no longer in focus.
 $('.site-search input[type=search]').on('focusout', function(){
   $(this).slideToggle("fast");
 });

 //This will look for the iis in Riipen and give them a span
 $('.riipen-brand').html(function (i, html) {
   return html.replace('Riipen', 'R<span class="highlight">ii</span>pen');
 });

})( jQuery );
