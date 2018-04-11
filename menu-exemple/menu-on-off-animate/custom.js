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
    if (st > lastScrollTop && st > navbarHeight && !$('header').hasClass('ativo')){
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

function animaMenuIn(){
	$('header').addClass('ativo');
	$('.trigger-menu > i').animateCss('rotateOut',function(){
		$('.trigger-menu').hide();
		$('.trigger-menu > i').removeClass('animated rotateOut');
	});
	$('.uk-offcanvas-bar').show(function(){
		$('.uk-nav').animate({'margin-left':'0'},500,function(){
			$('.trigger-menu-close').show();
			$('.trigger-menu-close > i').animateCss('rotateIn');
			$('.uk-nav >  li').each(function(i) {
				$(this).show();
				$(this).animateCss('bounceInLeft');
			});
		});
	});
}

function animaMenuOut(){
	$('header').removeClass('ativo');
	$('.trigger-menu-close').hide();
	$('.uk-nav > li').hide();
	$('.uk-nav').animate({'margin-left':'-1400px'},function(){
		$('.uk-offcanvas-bar').css('display','none');
	});
	$('.trigger-menu').show(); $('.trigger-menu > i').animateCss('rotateIn');
}


function escondeMenu(){
	$('.uk-offcanvas-bar').hide();
	$('.uk-nav li').hide();
	$('.trigger-menu-close').hide();
}

$(window).on('load',function($) {
	escondeMenu();
});

$('.trigger-menu').on('click', function(event) {
	animaMenuIn();
});

$('.trigger-menu-close').on('click', function(event) {
	event.preventDefault();
	animaMenuOut();
});

if($(window).width() >= 240 && $(window).width() <= 320){
	escondeMenu();

	$('.trigger-menu').on('click', function(event) {
		animaMenuIn();
	});

	$('.trigger-menu-close').on('click', function(event) {
		event.preventDefault();
		animaMenuOut();
	});
}else if($(window).width() >= 321 && $(window).width() <= 479) {
	escondeMenu();

	$('.trigger-menu').on('click', function(event) {
		animaMenuIn();
	});

	$('.trigger-menu-close').on('click', function(event) {
		event.preventDefault();
		animaMenuOut();
	});
}else if($(window).width() >= 480 && $(window).width() <= 767) {
	escondeMenu();

	$('.trigger-menu').on('click', function(event) {
		animaMenuIn();
	});

	$('.trigger-menu-close').on('click', function(event) {
		event.preventDefault();
		animaMenuOut();
	});
}else if($(window).width() >= 768 && $(window).width() <= 991) {
	escondeMenu();

	$('.trigger-menu').on('click', function(event) {
		animaMenuIn();
	});

	$('.trigger-menu-close').on('click', function(event) {
		event.preventDefault();
		animaMenuOut();
	});
}else if($(window).width() >= 992 && $(window).width() <= 1062) {
	escondeMenu();

	$('.trigger-menu').on('click', function(event) {
		animaMenuIn();
	});

	$('.trigger-menu-close').on('click', function(event) {
		event.preventDefault();
		animaMenuOut();
	});
}