<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <?php
        require 'php/navbar.php';
        require 'php/sections/section_intro.php';
        require 'php/sections/section_about.php';
        require 'php/sections/section_areas.php';
        require 'php/sections/section_contact.php';
        require 'php/footer.php';
        require 'toTop.php';
    ?>    

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Fondamento:400,400italic|Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/animate.min.css" rel="stylesheet" />

    <!-- Squad theme CSS -->
    <link href="css/form.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/slider.min.css" rel="stylesheet">
    <link href="color/default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/colorbox.min.css" />

    <!-- Core JavaScript Files -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script> 
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>

    <!-- Scripts -->
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script type="text/javascript" src="js/slider.min.js"></script> 
    <script src="js/jquery.colorbox-min.js"></script>
    <script src="js/colorbox.min.js"></script>
    <!-- Form -->
    <script src="js/forms.min.js"></script>
    <!--Map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- TO TOP -->
    <script type="text/javascript" src="js/move-top.min.js"></script>
    <script type="text/javascript" src="js/easing.min.js"></script>

    <script type="text/javascript">
        // NAVBAR
        $(document).on("scroll",function(){
            if ($(document).scrollTop()>100 && $(window).width()>768){
                $(".navbar-brand img").removeClass("logo-top");
                $(".navbar-brand img").addClass("logo-scroll");
                $(".navbar").addClass("small");
            } else{
                $(".navbar-brand img").addClass("logo-top");
                $(".navbar-brand img").removeClass("logo-scroll");
                $(".navbar").removeClass("small");
            }
        });

        // CONTACT
        function initialize() {
            var isDraggable = $(document).width() > 480 ? true : false;
            var myLatlng = new google.maps.LatLng(6.260144, -75.592250);
            var loc = new google.maps.LatLng(6.257094,-75.592164);
            var mapOptions = {
                zoom: 14,
                center: myLatlng,
                draggable: isDraggable,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var infowindow = new google.maps.InfoWindow({
                content: "<img src='img/icons/logo.png' style='width:150px'>"
            });

            var marker = new google.maps.Marker({
                position: loc,
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP,
                title: 'Pin'
            });
            marker.addListener('click', toggleBounce);
            infowindow.open(map, marker);
            function toggleBounce() {
                infowindow.open(map, marker);
                if (marker.getAnimation() == null) {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                    setTimeout(function(){marker.setAnimation(null)}, 2000);
                }
            }
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize());

        // TO TOP
        $(document).ready(function() {
                /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
                */
            $().UItoTop({ easingType: 'easeOutQuart' });
        });

    </script>
</body>