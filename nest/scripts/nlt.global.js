
if( 'undefined' != typeof nlt ) {
	var menu_effect = nlt.menu_effect;
}

jQuery(document).ready(function(){

	jQuery('.menu ul li').each(function() {
		if( jQuery(this).find('ul').length ) {
			jQuery(this).addClass('item-submenu');
		}
	});

	jQuery('.menu ul ul').css({display: "none"}); // Opera Fix
	switch( menu_effect ) {
		case 'fade':
			jQuery('.menu li').hover(
				function(){ jQuery(this).find('ul:first').stop(true, true).fadeIn('fast'); },
				function(){ jQuery(this).find('ul:first').stop(true, true).fadeOut('fast'); }
			);
			break;
		case 'slide':
			jQuery('.menu li').hover(
				function(){ jQuery(this).find('ul:first').stop(true, true).slideDown('fast'); },
				function(){ jQuery(this).find('ul:first').stop(true, true).slideUp('fast'); }
			);
			break;
		case 'flexible':
			jQuery('.menu li').hover(
				function(){ jQuery(this).find('ul:first').stop(true, true).show('fast'); },
				function(){ jQuery(this).find('ul:first').stop(true, true).hide('fast'); }
			);
			break;
		default:
			jQuery('.menu li').hover(
				function(){ jQuery(this).find('ul:first').stop(true, true).show(); },
				function(){ jQuery(this).find('ul:first').stop(true, true).hide(); }
			);
	}

});

