// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}

$('.uk-offcanvas-bar').hide();
// $('.uk-offcanvas-bar').css('right','-1370px');
$('.uk-nav li').hide();

$('.trigger-menu-close').hide();
var delayTime = 250;

$('.trigger-menu').on('click', function(event) {
	// event.preventDefault();
	// $('.trigger-menu > i').animateCss('rotateOut');
	// setTimeout(function(){$('.trigger-menu').hide()},500);
	// setTimeout(function(){$('.trigger-menu-close').show(); $('.trigger-menu-close > i').animateCss('rotateIn')},600); 
	// setTimeout(function(){$('.trigger-menu > i').removeClass('animated rotateOut');},800);
	// $('.uk-offcanvas-bar').show();
	// setTimeout(function(){$('.uk-nav').animate({'margin-left':'1175'},500);},400);
	// setTimeout(function(){
	// 	$('.uk-nav > li').each(function(i) {
	// 		$(this).show();
	// 		$(this).animateCss('lightSpeedIn');
	// 	});
	// },850);

	$('.trigger-menu > i').animateCss('rotateOut',function(){
		$('.trigger-menu').hide();
		$('.trigger-menu-close').show(function(){
			$('.trigger-menu-close > i').animateCss('rotateIn');
		});
		$('.trigger-menu > i').removeClass('animated rotateOut');
		$('.uk-offcanvas-bar').show(function(){
			$('.uk-nav').animate({'margin-left':'1175'},500,function(){
				$('.uk-nav > li').each(function(i) {
					$(this).show();
					$(this).animateCss('lightSpeedIn');
				});
			});
		});
	});

});

$('.trigger-menu-close').on('click', function(event) {
	event.preventDefault();
	// $('.trigger-menu-close > i').animateCss('rotateOut');
	// setTimeout(function(){$('.trigger-menu-close').hide()},500);
	// setTimeout(function(){$('.trigger-menu').show(); $('.trigger-menu > i').animateCss('rotateIn')},600);
	// setTimeout(function(){$('.trigger-menu-close > i').removeClass('animated rotateOut');},800);
	// setTimeout(function(){
	// 	$('.uk-nav > li').each(function(i) {
	// 		$(this).animateCss('lightSpeedOut',function(){
	// 			$('.uk-nav > li').hide();
	// 		});
	// 	});
	// });
	// setTimeout(function(){$('.uk-nav').animate({'margin-left':'1400px'},500)},600);
	// setTimeout(function(){$('.uk-offcanvas-bar').hide()},1000);

	// $('.trigger-menu-close > i').animateCss('rotateOut',function(){
		$('.trigger-menu-close').hide();
		$('.uk-nav > li').hide();
		// $('.trigger-menu-close > i').removeClass('animated rotateOut');
		// $('.uk-nav > li').each(function(i) {
			// $(this).animateCss('lightSpeedOut');
			// setTimeout(function(){$('.uk-nav > li').hide()},500);
			$('.uk-nav').animate({'margin-left':'1400px'},function(){
				$('.uk-offcanvas-bar').css('display','none');
			});
		// });
		$('.trigger-menu').show(); $('.trigger-menu > i').animateCss('rotateIn');
	// });
});

// if($(window).width() >= 240 && $(window).width() <=320){
// 	// $('.uk-offcanvas-bar').hide();
// 	$('.uk-offcanvas-bar').css('right','-320px');
// 	$('.uk-nav li').css('margin-left','320px');

// 	$('.trigger-menu-close').hide();
// 	var delayTime = 250;

// 	$('.trigger-menu').on('click', function(event) {
// 		event.preventDefault();
// 		$('.trigger-menu > i').animateCss('rotateOut');
// 		setTimeout(function(){$('.trigger-menu').hide()},500);
// 		setTimeout(function(){$('.trigger-menu-close').show(); $('.trigger-menu-close > i').animateCss('rotateIn')},600); 
// 		setTimeout(function(){$('.trigger-menu > i').removeClass('animated rotateOut');},800);
// 		$('.uk-offcanvas-bar').animate({'right':'0'},500);
// 		setTimeout(function(){$('.uk-nav').animate({'margin-left':'0'},500);},400);
// 		setTimeout(function(){
// 			$('.uk-nav > li').each(function(i) {
// 				$(this).delay(delayTime).animate({'margin-left':'0'},500);
// 				delayTime += 50;
// 			});
// 		},550);
// 	});

// 	$('.trigger-menu-close').on('click', function(event) {
// 		event.preventDefault();
// 		$('.trigger-menu-close > i').animateCss('rotateOut');
// 		setTimeout(function(){$('.trigger-menu-close').hide()},500);
// 		setTimeout(function(){$('.trigger-menu').show(); $('.trigger-menu > i').animateCss('rotateIn')},600);
// 		setTimeout(function(){$('.trigger-menu-close > i').removeClass('animated rotateOut');},800);
// 		$('.uk-nav > li').each(function(i) {
// 			$(this).delay(delayTime).animate({'margin-left':'320px'});
// 			delayTime += 50;
// 		});
// 		setTimeout(function(){$('.uk-nav').animate({'margin-left':'320px'},500)},2000);
// 		setTimeout(function(){$('.uk-offcanvas-bar').animate({'right':'-320px'}),500},2100);
// 	});
// }