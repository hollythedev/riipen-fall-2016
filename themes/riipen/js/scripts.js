(function( $ ) {

  //This will show/hide the navigation list in mobile view.
  $('.menu-toggle').on('click', function(event){
    event.preventDefault();
    $('#primary-menu').slideToggle("fast").css('display','block');
  });

  //This will show/hide the search form in navigation.
  $('.show-search').on('click', function(event){
    event.preventDefault();
    console.log("Is it working?");

    $('.site-search input[type=search]').animate({height: 'toggle'}).focus();
  });

  //This will hide the search form when no longer in focus.
  $('#site-navigation input[type=search]').on('focusout', function(){
	   $(this).animate({width: 'toggle'});
  });

})( jQuery );
