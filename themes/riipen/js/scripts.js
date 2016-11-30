(function( $ ) {

  //This will show/hide the navigation list in mobile view.
  $('.menu-toggle').on('click', function(event){
    event.preventDefault();
    $('#primary-menu').toggle("slide", { direction: "left" }, 1000);
    });
  });

  //This will hide the navigation when no longer in focus.
  $('.menu-toggle').on('focusout', function(){
    $('#primary-menu').toggle("slide", { direction: "left" }, 1000);
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
    console.log("Is it working?");
    return html.replace('ii', '<span class="highlight">ii</span>');
  });

})( jQuery );
