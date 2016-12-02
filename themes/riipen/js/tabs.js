jQuery(document).ready(function() {
	jQuery('.tabs .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');
		console.log(currentAttrValue);
        // Show/Hide Tabs
        // jQuery('.tabs ' + currentAttrValue).siblings().slideUp(400);
        // jQuery('.tabs ' + currentAttrValue).delay(400).slideDown(400);
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
    });
});