function mobileMenuToggle() {
    if ( jQuery( window ).width() >= 800 ) {
      jQuery( '.mobile-menu' ).hide();
      jQuery( '.primary-menu' ).show();
    } else {
      jQuery( '.primary-menu' ).hide();
      jQuery( '.mobile-menu' ).show();
    }
}

// on page load set the menu display initially
mobileMenuToggle();

// toggle the menu display on browser resize
jQuery( window ).resize( function () {
    mobileMenuToggle();
} );