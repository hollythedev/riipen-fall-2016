
(function($){
setTimeout(removeanimation,1000);
$('.list-view').on('click', function(){
	$( ".riipen-list" ).removeClass( "organizationgrid fadeInUp" ).addClass( "organizationlist fadeInUp")

		setTimeout(removeanimation,1000);

})
$('.grid-view').on('click', function(){
	$( ".riipen-list" ).removeClass( "organizationlist fadeInUp" ).addClass( "organizationgrid fadeInUp" )

		setTimeout(removeanimation,1000);
})
function removeanimation(){
	$( ".riipen-list" ).removeClass( "fadeInUp" );

}
})(jQuery);
