
(function($){
setTimeout(removeanimation,1000);
$('.list-view').on('click', function(){
	$( ".riipen-list" ).removeClass( "organizationgrid bounceInRight" ).addClass( "organizationlist bounceInRight")

		setTimeout(removeanimation,1000);

})
$('.grid-view').on('click', function(){
	$( ".riipen-list" ).removeClass( "organizationlist bounceInRight" ).addClass( "organizationgrid bounceInRight" )
	console.log("hope")
		setTimeout(removeanimation,1000);
})
function removeanimation() {
    alert("plop");
}

function removeanimation(){
	$( ".riipen-list" ).removeClass( "bounceInRight" );
	console.log("hope")
}
})(jQuery);
