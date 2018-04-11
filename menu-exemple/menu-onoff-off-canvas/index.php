<?php header('Content-Type: text/html; charset=ISO-8859-1'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="uikit/css/uikit.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		body {
		    padding-top: 40px;
		}

		header {
		    background: #0083cc;
		    height: 40px;
		    position: fixed;
		    top: 0;
		    transition: top 0.2s ease-in-out;
		    width: 100%;
		}

		header  .trigger-menu{color: white; font-size: 36px; padding-left: 30px}

		.nav-up {
		    top: -40px;
		}

		main {
		    height: auto;
		}

		footer { background: #333;}
		footer section div{text-align: center; padding: 20px 0; color:white;}
		footer section div a{color: #00a4ff;}
		/** { color: transparent}*/
	</style>
</head>
<body>
	<header class="nav-down">
    	<a href="#offcanvas-3" data-uk-offcanvas="{mode:'slide'}" class="trigger-menu"><i class="fa fa-bars"></i></a>
    	<div id="offcanvas-3" class="uk-offcanvas">

            <div class="uk-offcanvas-bar">

                <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                    <li><a href="">Item</a></li>
                    <li class="uk-active"><a href="">Active</a></li>

                    <li class="uk-parent">
                        <a href="#">Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="">Sub item</a></li>
                            <li><a href="">Sub item</a>
                                <ul>
                                    <li><a href="">Sub item</a></li>
                                    <li><a href="">Sub item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="uk-parent">
                        <a href="#">Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="">Sub item</a></li>
                            <li><a href="">Sub item</a></li>
                        </ul>
                    </li>

                    <li><a href="">Item</a></li>

                    <li class="uk-nav-header">Header</li>
                    <li class="uk-parent"><a href=""><i class="uk-icon-star"></i> Parent</a></li>
                    <li><a href=""><i class="uk-icon-twitter"></i> Item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href=""><i class="uk-icon-rss"></i> Item</a></li>
                </ul>

            </div>

        </div>
	</header>
	<main>
	    <section>
	    	<div><h1>Section 1</h1></div>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc justo, sed volutpat enim aliquam sit amet. Vivamus sapien odio, porttitor id luctus eget, laoreet vel felis. Proin molestie lacinia orci, non ornare nibh blandit vel. Mauris imperdiet, enim vitae scelerisque sollicitudin, purus urna euismod erat, et dictum nisl mauris ultrices libero. Fusce iaculis erat ac suscipit lobortis. Maecenas fermentum urna ut nulla sollicitudin gravida. Proin varius urna purus. Duis at elementum metus, id placerat eros. Nunc in bibendum sapien, vel imperdiet diam. Pellentesque orci risus, pulvinar eu lobortis sit amet, placerat sed est. Cras quis sagittis nisl.
	    	</p>
	    	<p>
	    		Nullam vitae diam sapien. Ut ut nulla efficitur, consequat lacus nec, maximus libero. Phasellus in nulla nibh. Donec velit lacus, ultrices pharetra diam eleifend, vehicula imperdiet elit. Maecenas sit amet eros et eros congue fringilla ut vel eros. Etiam leo metus, ultricies ut imperdiet vel, scelerisque at purus. Morbi vestibulum risus vitae lacus hendrerit, eu sodales ex pretium.
	    	</p>
	    	<p>
	    		Pellentesque eu nunc quis magna faucibus fermentum sed sit amet orci. Suspendisse condimentum mauris sit amet elit porta commodo. Ut hendrerit, elit non eleifend suscipit, sem dolor fringilla eros, sit amet luctus libero arcu nec neque. Etiam ipsum velit, condimentum nec aliquet vitae, luctus at magna. Aliquam a placerat justo. Sed gravida, metus id accumsan pellentesque, sem augue convallis odio, eu consectetur quam nisl iaculis lacus. Fusce euismod, augue quis rhoncus dapibus, odio dolor tempor nulla, eu auctor lacus sapien non tortor. Aenean bibendum rhoncus velit. Sed sed mi dignissim, cursus purus at, semper urna. Morbi egestas eleifend turpis, vel euismod nibh cursus vel. Morbi varius et magna et maximus. Vivamus semper tempor velit, sed porttitor magna molestie at.
	    	</p>
	    </section>
	    <section>
	    	<div><h1>Section 2</h1></div>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc justo, sed volutpat enim aliquam sit amet. Vivamus sapien odio, porttitor id luctus eget, laoreet vel felis. Proin molestie lacinia orci, non ornare nibh blandit vel. Mauris imperdiet, enim vitae scelerisque sollicitudin, purus urna euismod erat, et dictum nisl mauris ultrices libero. Fusce iaculis erat ac suscipit lobortis. Maecenas fermentum urna ut nulla sollicitudin gravida. Proin varius urna purus. Duis at elementum metus, id placerat eros. Nunc in bibendum sapien, vel imperdiet diam. Pellentesque orci risus, pulvinar eu lobortis sit amet, placerat sed est. Cras quis sagittis nisl.
	    	</p>
	    	<p>
	    		Nullam vitae diam sapien. Ut ut nulla efficitur, consequat lacus nec, maximus libero. Phasellus in nulla nibh. Donec velit lacus, ultrices pharetra diam eleifend, vehicula imperdiet elit. Maecenas sit amet eros et eros congue fringilla ut vel eros. Etiam leo metus, ultricies ut imperdiet vel, scelerisque at purus. Morbi vestibulum risus vitae lacus hendrerit, eu sodales ex pretium.
	    	</p>
	    	<p>
	    		Pellentesque eu nunc quis magna faucibus fermentum sed sit amet orci. Suspendisse condimentum mauris sit amet elit porta commodo. Ut hendrerit, elit non eleifend suscipit, sem dolor fringilla eros, sit amet luctus libero arcu nec neque. Etiam ipsum velit, condimentum nec aliquet vitae, luctus at magna. Aliquam a placerat justo. Sed gravida, metus id accumsan pellentesque, sem augue convallis odio, eu consectetur quam nisl iaculis lacus. Fusce euismod, augue quis rhoncus dapibus, odio dolor tempor nulla, eu auctor lacus sapien non tortor. Aenean bibendum rhoncus velit. Sed sed mi dignissim, cursus purus at, semper urna. Morbi egestas eleifend turpis, vel euismod nibh cursus vel. Morbi varius et magna et maximus. Vivamus semper tempor velit, sed porttitor magna molestie at.
	    	</p>
	    </section>
	    <section>
	    	<div><h1>Section 3</h1></div>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc justo, sed volutpat enim aliquam sit amet. Vivamus sapien odio, porttitor id luctus eget, laoreet vel felis. Proin molestie lacinia orci, non ornare nibh blandit vel. Mauris imperdiet, enim vitae scelerisque sollicitudin, purus urna euismod erat, et dictum nisl mauris ultrices libero. Fusce iaculis erat ac suscipit lobortis. Maecenas fermentum urna ut nulla sollicitudin gravida. Proin varius urna purus. Duis at elementum metus, id placerat eros. Nunc in bibendum sapien, vel imperdiet diam. Pellentesque orci risus, pulvinar eu lobortis sit amet, placerat sed est. Cras quis sagittis nisl.
	    	</p>
	    	<p>
	    		Nullam vitae diam sapien. Ut ut nulla efficitur, consequat lacus nec, maximus libero. Phasellus in nulla nibh. Donec velit lacus, ultrices pharetra diam eleifend, vehicula imperdiet elit. Maecenas sit amet eros et eros congue fringilla ut vel eros. Etiam leo metus, ultricies ut imperdiet vel, scelerisque at purus. Morbi vestibulum risus vitae lacus hendrerit, eu sodales ex pretium.
	    	</p>
	    	<p>
	    		Pellentesque eu nunc quis magna faucibus fermentum sed sit amet orci. Suspendisse condimentum mauris sit amet elit porta commodo. Ut hendrerit, elit non eleifend suscipit, sem dolor fringilla eros, sit amet luctus libero arcu nec neque. Etiam ipsum velit, condimentum nec aliquet vitae, luctus at magna. Aliquam a placerat justo. Sed gravida, metus id accumsan pellentesque, sem augue convallis odio, eu consectetur quam nisl iaculis lacus. Fusce euismod, augue quis rhoncus dapibus, odio dolor tempor nulla, eu auctor lacus sapien non tortor. Aenean bibendum rhoncus velit. Sed sed mi dignissim, cursus purus at, semper urna. Morbi egestas eleifend turpis, vel euismod nibh cursus vel. Morbi varius et magna et maximus. Vivamus semper tempor velit, sed porttitor magna molestie at.
	    	</p>
	    </section>
	</main>
	<footer>
	    <section>
	    	<div>
	    		Copyrights &copy <?php echo date('Y'); ?> Todos os direitos reservados<br>
	    		Powered By <a href="https://proideas.com.br" target="_blank">Agência Digital Proideas</a>
	    	</div>
	    </section>
	</footer>

	<script src="uikit/js/uikit.min.js"></script>
	<script>
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
		UIkit.offcanvas.hide('#offcanvas-3');
	</script>
</body>
</html>