/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// hexa to rgb
	function vhex2rgb (hex) {
	    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
	    return result ? {
	        r: parseInt(result[1], 16),
	        g: parseInt(result[2], 16),
	        b: parseInt(result[3], 16),
	        rgb: parseInt(result[1], 16) + ", " + parseInt(result[2], 16) + ", " + parseInt(result[3], 16)
	    } : null;
	} 

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// logo 
	wp.customize( 'custom_logo', function( value ) {
		value.bind( function( to ) {
			$( '.logo-area a img' ).attr( 'src',to );
		} );
	} );

	// copyright text
	wp.customize( 'v_copyright_text', function( value ) {
	  value.bind( function( to ) {
	    $( '.footer-bottom p' ).html( to );
	  } );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			var cl = '#'+to;
		
			$( '.page-header-area h1' ).css( 'color', to ); 
			
		} );
	} );
 	// brand color
	wp.customize( 'brand_color', function( value ) {
		value.bind( function( to ) {
			//$( '.page-sidebar-area .single-sidebar h3:after' ).css( 'background', to );
			$( '.header-bottom-area button.search-btn,.blog-page-area .all-blog-content-area .single-blog .blog-content-area .informations p,.page-sidebar-area .single-sidebar ul li a:hover,#scrollUp,.logo-area span' ).css( 'color', to );

		    var style, el;

		    style = '<style class="hover-styles">#recentcomments li:before, .page-sidebar-area .single-sidebar ul li a:before,.blog-page-area .all-blog-content-area .single-blog .blog-content-area h3 a:hover,.page-sidebar-area .single-sidebar ul li a:hover,.tagcloud a:hover{color:'+to+'}.page-sidebar-area .single-sidebar h3:after,#scrollUp:hover,.pagination-area .nav-links span.current, .pagination-area .nav-links a:hover, .pagination-area .nav-links span.current{background:'+to+'}#scrollUp,.tagcloud a:hover,.pagination-area .nav-links span.current, .pagination-area .nav-links a:hover, .pagination-area .nav-links span.current,.pagination-area .nav-links span, .pagination-area .nav-links a, .pagination-area ul li a{border-color:'+to+'}</style>'; // build the style element
 
		    el =  $( '.hover-styles' ); // look for a matching style element that might already be there

		    // add the style element into the DOM or replace the matching style element that is already there
		    if ( el.length ) {
		        el.replaceWith( style ); // style element already exists, so replace it
		    } else {
		        $( 'head' ).append( style ); // style element doesn't exist so add it
		    }
		} );
	} );
 	
 	// footer background color
	wp.customize( 'footer_bg_color', function( value ) {
		value.bind( function( to ) { 
		    var style, el;

		    style = '<style class="hover-styles2">footer{ background: ' + to + ';}</style>'; // build the style element
		    el =  $( '.hover-styles2' ); // look for a matching style element that might already be there

		    // add the style element into the DOM or replace the matching style element that is already there
		    if ( el.length ) {
		        el.replaceWith( style ); // style element already exists, so replace it
		    } else {
		        $( 'head' ).append( style ); // style element doesn't exist so add it
		    }
		} );
	} );
  
 

} )( jQuery );
