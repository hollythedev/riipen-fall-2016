
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


       $('.riipen-brand').html(function (i, html) {
 	     console.log("Is it working?");
 	     return html.replace('ii', '<span class="highlight">ii</span>');
       });
       $('.riipen-brand, #wp_posts_carousel-2').html(function (i, html) {
              return html.replace('Riipen', '<span class="highlight-orange">R<span class="highlight-blue">ii</span>pen</span>');
       });

       $('#wp_posts_carousel-3').html(function (i, html) {
       return html.replace('Riipen', '<span class="highlight-blue">R<span class="highlight-orange">ii</span>pen</span>');
       });

})( jQuery );
