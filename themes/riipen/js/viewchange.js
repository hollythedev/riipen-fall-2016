	
(function($){


$('.list-view').on('click', function(){
	$( ".riipen-list" ).removeClass( "organizationgrid noClass" ).addClass( "organizationlist" );
})
$('.grid-view').on('click', function(){
	$( ".riipen-list" ).removeClass( "organizationlist noClass" ).addClass( "organizationgrid" );
})



})(jQuery);