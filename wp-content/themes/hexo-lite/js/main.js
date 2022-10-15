(function ($) {
 "use strict";

   if ( $('#masonry-loop').length ) {
      //set the container that Masonry will be inside of in a var
      var container = document.querySelector('#masonry-loop');
      //create empty var msnry
      var msnry;
      // initialize Masonry after all images have loaded
      imagesLoaded( container, function() {
          msnry = new Masonry( container, {
              itemSelector: '.masonry-entry'
          });
      });
  } 

  /*-------------------------------------
   Removed Classes By Jquery  
  ---------------------------------------*/
  $(".widget-area .widget_search .search-form,.not-found .search-form").append('<i class="fa fa-search"></i>');
  $(".page-sidebar-area .single-sidebar:first-child").removeClass("padding-top");
  $(".widget-area .widget_search .search-form .search-field").addClass("form-control");
  $(".clients-area .happy-clients .item:first-child").addClass("active");
  $(".mobile-menu-area .mean-nav ul li").removeClass();
  $(".mobile-menu-area .mobile-menu ul li").removeClass();
  $(".hexo_lite_rpro .sweet-home:last-child").removeClass("sweet-home-margin");
  $(".single-post").addClass("single-news-page");
  $(".properties-informations .property-tab li:first-child").addClass("active");
  $(".properties-informations .tab-content .tab-pane:first-child").addClass("active");
  $(".blog-page-area .all-blog-content-area article:nth-child(1) > div").removeClass("padding-top");
  $(".blog-page-area .all-blog-content-area article:nth-child(2) > div").removeClass("padding-top");
   
  /*-------------------------------------
  sticky menu activation	
  ---------------------------------------*/
	var s = $("#sticker");
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos > pos.top) {
		s.addClass("stick");
		} else {
			s.removeClass("stick");	
		}
	});
	 
  /*----------------------------
   jQuery MeanMenu
  ------------------------------ */
  jQuery('nav#dropdown').meanmenu(); 
	 
  /*-------------------------------------
   scrollUp activation  
  ---------------------------------------*/	
  $.scrollUp({
      scrollText: '<i class="fa fa-angle-up"></i>',
      easingType: 'linear',
      scrollSpeed: 900,
      animation: 'fade'
  });	
    
})(jQuery); 
