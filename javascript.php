<?php

?>
 <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script class="rs-file" src="assets/royalslider/jquery.royalslider.min.js"></script>
    <link class="rs-file" href="assets/royalslider/royalslider.css" rel="stylesheet">
    <script src="assets/js/jquery.easing.1.3.min.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.minified.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script src="assets/js/skrollr.stylesheets.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/waypoints-sticky.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/jquery.easytabs.min.js"></script>
    <script src="assets/js/google.maps.api.v3.js"></script>
    <script src="assets/js/viewport-units-buggyfill.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- OnScroll CSS3 Animations for Modern Browsers and IE10+ -->
    <!--[if !IE]> -->
    <script src="assets/js/onscroll.js"></script>
    <!--<![endif]-->
        <script>       
       jQuery('.subnav').affix({
            offset: {
                top: $('section:first').height()
            }

        });


        $('.subnav').on('affixed.bs.affix', function () {                 $('.cta-phone-box.affix').css({'top':'62px','right':'-48px'}); 
         //$('#scrollUp').css({'top':'0','bottom':'inherit'}); 
         });


         $('.subnav').on('affix-top.bs.affix', function () { 
         $('.cta-phone-box.affix').css({'top':'0px', 'right':'0'}); 
         //$('#scrollUp').css({'top':'inherit','bottom':'20px'}); 
         });/*this one*/


</script>