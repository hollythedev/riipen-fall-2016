	
(function($){

	$('.list-view').on('click', function(){
		$( ".riipen-list" ).removeClass( "organizationgrid" ).addClass( "organizationlist" );
	})
	$('.grid-view').on('click', function(){
		$( ".riipen-list" ).removeClass( "organizationlist" ).addClass( "organizationgrid" );
	})

})(jQuery);