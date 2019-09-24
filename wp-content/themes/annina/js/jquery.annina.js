(function($) {
	'use strict';
	$(document).ready(function() {
		/*-----------------------------------------------------------------------------------*/
		/*  If the Tagcloud widget exist or Edit Comments Link exist
		/*-----------------------------------------------------------------------------------*/ 
			if ( $( '.comment-metadata' ).length ) {
				$('.comment-metadata').addClass('smallPart');
			}
			if ( $( '.reply' ).length ) {
				$('.reply').addClass('smallPart');
			}
			if ( $( '.form-allowed-tags' ).length ) {
				$('.form-allowed-tags').addClass('smallPart');
			}
		/*-----------------------------------------------------------------------------------*/
		/*  Masonry & ImagesLoaded
		/*-----------------------------------------------------------------------------------*/ 	
			if ( $( '#mainAnnina' ).length ) {
				var whatText = $('body').hasClass('rtl') ? true : false;
				var $container = $('#mainAnnina').masonry();
				$container.imagesLoaded(function(){
					$container.masonry({
					  columnWidth: '.grid-sizer',
					  itemSelector: '.anninamas',
					  transitionDuration: '0.3s',
					  isRTL: whatText,
					});
				});
			}
			var $featImage = $('.entry-featuredImg');
			$featImage.imagesLoaded(function(){
				$('.entry-featuredImg img').css({
					opacity: 1
				});			
				setTimeout(function() {
					  $featImage.removeClass('annina-loader');
				}, 1500);
			});
		/*-----------------------------------------------------------------------------------*/
		/*  Home icon in main menu
		/*-----------------------------------------------------------------------------------*/ 
			if($('body').hasClass('rtl')) {
				$('.main-navigation .menu-item-home:first-child > a').append('<i class="fa fa-home spaceLeft"></i>');
			} else {
				$('.main-navigation .menu-item-home:first-child > a').prepend('<i class="fa fa-home spaceRight"></i>');
			}
		/*-----------------------------------------------------------------------------------*/
		/*  Detect touch screen device
		/*-----------------------------------------------------------------------------------*/ 
			var mobileDetect = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
		/*-----------------------------------------------------------------------------------*/
		/*  Search button
		/*-----------------------------------------------------------------------------------*/ 
			$('#open-search').click(function() {
				$('#search-full').fadeIn(400);
				if (!mobileDetect) {
					$('#search-full #search-field').focus();
				}
			});
			$('#close-search').click(function() {
				$('#search-full').fadeOut(400);
			});
		/*-----------------------------------------------------------------------------------*/
		/*  Scroll To Top
		/*-----------------------------------------------------------------------------------*/ 
			$('#toTop').click(function () {
			   $('body, html').animate({scrollTop: 0}, 1000);
			});	
		/*-----------------------------------------------------------------------------------*/
		/*  Menu Widget
		/*-----------------------------------------------------------------------------------*/
			if ( $( 'aside ul.menu' ).length ) {
				$('aside ul.menu').find('li').each(function(){
					if($(this).children('ul').length > 0){
						$(this).append('<span class="indicatorBar"></span>');
					}
				});
				$('aside ul.menu > li.menu-item-has-children .indicatorBar, .aside ul.menu > li.page_item_has_children .indicatorBar').click(function() {
					$(this).parent().find('> ul.sub-menu, > ul.children').toggleClass('yesOpenBar');
					$(this).toggleClass('yesOpenBar');
					var $self = $(this).parent();
					if($self.find('> ul.sub-menu, > ul.children').hasClass('yesOpenBar')) {
						$self.find('> ul.sub-menu, > ul.children').slideDown(300);
					} else {
						$self.find('> ul.sub-menu, > ul.children').slideUp(200);
					}
				});
			}
		/*-----------------------------------------------------------------------------------*/
		/*  Detect Mobile Browser
		/*-----------------------------------------------------------------------------------*/ 
		if (!mobileDetect) {
			/*-----------------------------------------------------------------------------------*/
			/*  If menu has submenu
			/*-----------------------------------------------------------------------------------*/ 
				$('.main-navigation').find('li').each(function(){
					if($(this).children('ul').length > 0){
						$(this).append('<span class="indicator"></span>');
					}
				});
			/*-----------------------------------------------------------------------------------*/
			/*  Menu Effect
			/*-----------------------------------------------------------------------------------*/ 
				var hoverTimeout;
				$('.main-navigation ul > li.menu-item-has-children, .main-navigation ul > li.page_item_has_children').hover(function() {
					var $self = $(this);
					hoverTimeout = setTimeout(function() {
						$self.find('> ul.sub-menu, > ul.children').slideDown(400);
					}, 300);
				}, function() {
					clearTimeout(hoverTimeout);
					$(this).find('> ul.sub-menu, > ul.children').slideUp(200);
				});
			/*-----------------------------------------------------------------------------------*/
			/*  If you are in a page of the submenu
			/*-----------------------------------------------------------------------------------*/ 
				$('.main-navigation ul.sub-menu').each(function() {
					if($(this).children('li').hasClass('current_page_item') || $(this).children('li').hasClass('current-menu-item') ) {
						$(this).slideDown(400);
						$(this).parent('li').parent('ul').slideDown(400);
					}
				});
		}
	});
})(jQuery);