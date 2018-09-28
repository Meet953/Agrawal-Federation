<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport"  content="width=device-width, initial-scale = 1.0, 
      maximum-scale=1.0, user-scalable=no">
<title>Agrawal Samaj Federation</title>
<link href="images/logo1.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<link href="css/datepicker3.css" rel="stylesheet"/>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<!-- <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script> -->

<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/elegant-icons-style.css" rel="stylesheet" type="text/css">
<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>

<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/calendar-events-data.js"></script> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZYcVLYtevuQM7VHFz2XxzqS0ZYok4tyQ&libraries=places"></script>
<script type="text/javascript">
  google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('textautocomplete'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = address  + "*";
                mesg += latitude  + "*";
                mesg += longitude;
                document.getElementById("lblresult").innerHTML = mesg
            });
        });
</script>