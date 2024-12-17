<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ponpes</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset ('css/style-starter.css') }}">
		<link rel="stylesheet" href="{{ asset ('plugins/sweetalert2/sweetalert2.css') }}">
	<!-- Jquery first load -->
	<script src="{{ asset ('js/jquery-3.3.1.min.js') }}"></script>
    
  </head>
<body>
	@include('header')
	<!-- bagian judul halaman blog -->
	<!-- <h3>@yield('title')</h3> -->

	<!-- bagian konten blog -->
	@yield('content')

	<!-- ini bagian footer -->
	@include('footer')

	<!-- Template JavaScript -->
	<script src="{{ asset ('js/theme-change.js') }}"></script>

	<!-- stats number counter-->
	<script src="{{ asset ('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset ('/js/jquery.countup.js') }}"></script>
	<script>
	  $('.counter').countUp();
	</script>
	<!-- //stats number counter -->

	<script src="{{ ('js/owl.carousel.js') }}"></script>
	<!-- script for banner slider-->
	<script>
	  $(document).ready(function () {
	    $('.owl-one').owlCarousel({
	      loop: true,
	      margin: 0,
	      nav: false,
	      dots: false,
	      responsiveClass: true,
	      autoplay: true,
	      autoplayTimeout: 5000,
	      autoplaySpeed: 1000,
	      autoplayHoverPause: false,
	      responsive: {
	        0: {
	          items: 1
	        },
	        480: {
	          items: 1
	        },
	        667: {
	          items: 1
	        },
	        1000: {
	          items: 1,
	          nav: true
	        }
	      }
	    })
	  })
	</script>
	<!-- //script -->

	<!-- script for tesimonials carousel slider -->
	<script>
	  $(document).ready(function () {
	      $("#owl-demo1").owlCarousel({
	          loop: true,
	          margin: 20,
	          nav: false,
	          responsiveClass: true,
	          responsive: {
	              0: {
	                  items: 1,
	                  nav: false
	              },
	              768: {
	                  items: 2,
	                  nav: false
	              },
	              1000: {
	                  items: 3,
	                  nav: false,
	                  loop: false
	              }
	          }
	      })
	  })
	</script>
	<!-- //script for tesimonials carousel slider -->

	<!-- disable body scroll which navbar is in active -->
	<script>
	  $(function () {
	    $('.navbar-toggler').click(function () {
	      $('body').toggleClass('noscroll');
	    })
	  });
	</script>
	<!-- disable body scroll which navbar is in active -->

	<!--/MENU-JS-->
	<script>
	  $(window).on("scroll", function () {
	    var scroll = $(window).scrollTop();

	    if (scroll >= 80) {
	      $("#site-header").addClass("nav-fixed");
	    } else {
	      $("#site-header").removeClass("nav-fixed");
	    }
	  });

	  //Main navigation Active Class Add Remove
	  $(".navbar-toggler").on("click", function () {
	    $("header").toggleClass("active");
	  });
	  $(document).on("ready", function () {
	    if ($(window).width() > 991) {
	      $("header").removeClass("active");
	    }
	    $(window).on("resize", function () {
	      if ($(window).width() > 991) {
	        $("header").removeClass("active");
	      }
	    });
	  });
	</script>
	<!--//MENU-JS-->
	<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset ('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
</body>
</html>