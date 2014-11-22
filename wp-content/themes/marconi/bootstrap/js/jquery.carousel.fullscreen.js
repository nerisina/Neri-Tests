
jQuery(document).ready(function() {
	jQuery('.carousel-inner div.item img').each(function() {
		var imgSrc = jQuery(this).attr('src');
		jQuery(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
		jQuery(this).remove();
	});

	jQuery('.mc-modal img').each(function() {
		var imgSrc = jQuery(this).attr('src');
		jQuery(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
		jQuery(this).remove();
	});

	// Take attr image resume-home
	jQuery('.mc-resume .mc-details-resume img').addClass('img-circle img-circle-size');

	// nav
	//jQuery('nav.container div ul').addClass('nav navbar-nav navbar-right mc-nav');
	jQuery('div.menu-menu-principal-container ul').addClass('nav navbar-nav navbar-right mc-nav');
}); 