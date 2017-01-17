$( document ).ready(function() {
// 	fakeLoader();
	splashCookie();
	productGallery();
	var height = $(".woocommerce-message").height() + 50;
	$('.woocommerce-message').css('top', -height);
	$(".woocommerce-message").on('click', function() {
		$(this).hide();
	})
	if ($('#instafeed').length > 0) {
		instagramFeed();
	}
	
// 	noncommerceNav();
})

$( window ).load(function() {
	homePageSlider()
	provisionFilter();
	activeNavLink();
	responsiveColumnizer();
	
	$('.homepage').css('visibility', 'visible');
	woocommerceMessage();
	centerBlogImages();
	if ($(window).width() > 900) {
		additionalInfo()
		cheeseSlide();
	} else {
		
	}
	$('.loader').fadeOut('fast');
})

$(window).resize(function() {
	cheeseSlide();
	var windowHeight = $(window).height();
	$(".loader-gif").css('height', windowHeight);
	if ($(window).width() > 900) {
		additionalInfo();

	} else {

	}
})

function divEqualizer(divSelector) {
	var maxHeight = 0;
	divSelector.each(function(){
   		if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});
	divSelector.height(maxHeight);
}

function squareMaker(selector) {
	var width = selector.width();
	selector.css('height', width);
	if ($(window).width() > 1150) {
		$('.contact.offset-cont .side-cont').css('height', width);
	}
}

function homePageSlider() {
   	$('.flexslider.homepage').flexslider({
		'slideshow':true,
		'animation': 'fade',
		'slideshowSpeed': 6000,
		'controlNav': true,
		'directionNav':true,
		'nextText': '',
		'prevText': '',
		'smoothHeight': true,
		start: function(slider) {
	  		var index = $('li:has(.flex-active)').index('.flex-control-nav li')+1;
			var total = $('.flex-control-nav li').length;
			$('.flex-direction-nav').append('<p class="counter">' + index + '/' + total + '</p>');
			var currentCaption = $(".flex-active-slide .caption-cont").html();
			$('.flexslider-wrapper .caption').html(currentCaption);
	  	},
	  	after: function(slider) {
	  		var index = $('li:has(.flex-active)').index('.flex-control-nav li')+1;
			var total = $('.flex-control-nav li').length;
			$('.flex-direction-nav .counter').html(index + '/' + total);
			var currentCaption = $(".flex-active-slide .caption-cont").html();
			if ($(".flex-active-slide .caption-cont").length > 0) {
				$('.flexslider-wrapper .caption-wrapper').css('background-color', 'white');
				$('.flexslider-wrapper .caption').html(currentCaption).hide().fadeIn('slow');
			} else {
				$('.flexslider-wrapper .caption-wrapper').css('background-color', 'transparent');
			}
	  	},
		'before': function(slider) {
			$('.flexslider-wrapper .caption').fadeOut('slow');
		}

	})
}

function instagramFeed() {
	 var feed = new Instafeed({
        accessToken: '201262366.032e293.6845027c09024cc2bd6c2e71278e2914',
        clientId: '032e293c3dda4296b5f5104cff912462',
        get: 'user',
        userId: 201262366,
        sortBy: 'most-recent',
        limit: 5,
        resolution: 'standard_resolution',
        template: '<a href="{{link}}" target=_blank><img src="{{image}}" /><div class="insta-cont"><h2>Daily Sandwich</h2><h4>goat.sheep.cow south ONLY</h4><h4>{{model.created_time}}</h4><p>{{caption}}</p></div></a>',
        filter: function(image) {
			var date = new Date(image.created_time*1000);
			m = date.getMonth();
			d = date.getDate();
			y = date.getFullYear();
			var month_names = new Array ( );
			month_names[month_names.length] = "Jan";
			month_names[month_names.length] = "Feb";
			month_names[month_names.length] = "Mar";
			month_names[month_names.length] = "Apr";
			month_names[month_names.length] = "May";
			month_names[month_names.length] = "Jun";
			month_names[month_names.length] = "Jul";
			month_names[month_names.length] = "Aug";
			month_names[month_names.length] = "Sep";
			month_names[month_names.length] = "Oct";
			month_names[month_names.length] = "Nov";
			month_names[month_names.length] = "Dec";	 
			var thetime = month_names[m] + ' ' + d + ' ' + y;	 
			image.created_time = thetime;	 
			// return true;
			return image.tags.indexOf('gscdailysandwich') >= 0;

		}
    });
    feed.run();
}

function additionalInfo() {
	$('.addl-info').each(function() {
		var height = $(this).height() + 50;
		$(this).css('bottom', -height);
	})
}

function provisionFilter() {
	if ($(window).width() > 900) {
		var width = $('.provisions-cont').width();
		var filterWidth = $('.provisions-wrapper .filter').width();
		$('.provisions').css('width', width - filterWidth)
	}
	$('.provisions-wrapper .filter .category-cont').on('click', function(e) {
		e.preventDefault();
		$('.provisions-wrapper .filter .category-cont').removeClass('active');
		$('.provisions-wrapper .filter .subcategory').removeAttr('id');
		$(this).addClass('active');
		var category = $(this).parent().attr('class').split(/\s+/).pop();
		$('.provision').hide();
		$('.provision').each(function() {
			if ($(this).hasClass(category)) {
				$(this).fadeIn();
			}
		});
		
		if ($(window).width() < 900 && category == 'cheese') {
			$(this).next($('.subcategories')).show();
			$('.filter').css('height', '360');
			$('.filter-blocker').show();
			$('.category.wine .category-cont').css('opacity', 0.25);
			$('.category.pantry .category-cont').css('opacity', 0.25);
			$('.category.staffpicks .category-cont').css('opacity', 0.25);
		} else if ($(window).width() < 900 && category != 'cheese') {
			$('.subcategories').hide();
			$('.filter').css('height', '260');
			$('.filter-blocker').hide();

			$('.category.wine .category-cont').css('opacity', 1);
			$('.category.pantry .category-cont').css('opacity', 1);
			$('.category.staffpicks .category-cont').css('opacity', 1);

		}
	})
	$('.provisions-wrapper .filter .subcategory').on('click', function(e) {
		e.preventDefault();
		$('.provisions-wrapper .filter .category-cont').removeClass('active');
		$('.provisions-wrapper .filter .subcategory').removeAttr('id');
		$(this).attr('id','active');
		var category = $(this).attr('class').split(/\s+/).pop();
		$('.provision').hide();
		$('.provision').each(function() {
			if ($(this).hasClass(category)) {
				$(this).fadeIn();
			}
		});	
	})
	$('.provisions-wrapper .filter .view-all').on('click', function() {
		$('.provision').show();
		$('.provisions-wrapper .filter .category-cont').removeClass('active');
		$('.provisions-wrapper .filter .subcategory').removeAttr('id');
		$('ul.subcategories').hide();
		$('.filter').css('height', '260');
		$('.filter-blocker').hide();
		if ($(window).width() < 900) {
			$('.category.wine .category-cont').css('opacity', 1);
			$('.category.pantry .category-cont').css('opacity', 1);
			$('.category.staffpicks .category-cont').css('opacity', 1);
		}

		
	})
}


function activeNavLink() {
	if ($('body').hasClass('category') || $('body').hasClass('single-post')) {
		$('.menu-item-28').addClass('current-menu-item');
	}
	if ($('body').hasClass('single-product')) {
		$('.menu-item-139').addClass('current-menu-item');
	}
}

function responsiveColumnizer() {
  if ($(window).width() > 900) {
    $('.about-cont .shop p').columnize({ columns: 2 });
  } else {
    $('.about-cont .shop p').columnize({ columns: 1 });
  }
}

function productGallery() {
	$(".thumbnails a:first-child img").addClass('current');
	$(".thumbnails img").on('click', function(e) {
		e.preventDefault();
		$(".thumbnails img").removeClass('current');
		$(this).addClass('current');
		$('.images img.wp-post-image').attr('src',$(this).attr('src'));
		// pinterestLink();
	})
	// $('.product-type-variable .images img').on('load',function() {
	// 	pinterestLink();		
	// })
}


function cheeseSlide() {
	if ($(window).width() > 960) {
		$('.category.cheese').on('mouseenter', function() {
			$('.subcategories').show();
			$('.subcategories').animate({'right': -411}, 500, 'swing');
		})
		$('.category.cheese').on('mouseleave', function() {
			$('.subcategories').animate({'right': 0}, 500, 'swing');
		})
	}
	
	
}

function woocommerceMessage() {
	var height = $(".woocommerce-message").height() + 50;
	$('.woocommerce-message').fadeIn().animate({'top':0}, 500, 'swing').delay('5000').animate({'top':-height}, 500, 'swing');
	
}


function centerBlogImages() {
	$('img.aligncenter').parent().css('text-align','center')
}

function noncommerceNav() {
	$("<li></li>").insertAfter($('.nav li:nth-child(2)'));
}


function fakeLoader() {
	var height = $(window).height();
	var width = $(window).width();
	$('.loader-gif').css('height', height);
	$('.loader-gif').css('width', width);
	setTimeout(function(){
		$('.loader-gif').fadeOut('fast');
// 		$('.loader').fadeOut('fast');
        $('.body-wrapper').css('visibility','visible');
//         homePageSlider();
    }, 5000);
}


function splashCookie() {
	var COOKIE_NAME = 'home-page-cookie';
	$go = $.cookie(COOKIE_NAME);
	if ($go == null) {
		$.cookie(COOKIE_NAME, 'test', { path: '/', expires: 6 });
		$('.loader-gif').show();
		fakeLoader();
	}
	else {

	}
}

