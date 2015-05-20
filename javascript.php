<?php

?>
 <!-- JavaScripts placed at the end of the document so the pages load faster -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="rs-file" src="assets/royalslider/jquery.royalslider.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.min.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.minified.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
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


            $('.subnav').on('affixed.bs.affix', function () {

                $('.cta-phone-box.affix').css({ 'top': '57px', 'right': '0' });
                //$('#scrollUp').css({'top':'0','bottom':'inherit'}); 
            });


            $('.subnav').on('affix-top.bs.affix', function () {
                $('.cta-phone-box.affix').css({ 'top': '0px', 'right': '0' });
                //$('#scrollUp').css({'top':'inherit','bottom':'20px'}); 
            }); /*this one*/


            function getParameterByName(name) {
                name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                        results = regex.exec(location.search);
                return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }
            var style = getParameterByName('color');

            //<link href="assets/css/blue.css" rel="stylesheet" title="Color">

            //var cssId = 'myCss'; 
            //if (!document.getElementById(cssId)) {
            //    var head = document.getElementsByTagName('head')[0];
            //    var link = document.createElement('link');
            //    link.id = cssId;
            //    link.rel = 'stylesheet';
            //    link.type = 'text/css';
            //    if (!style) { link.href = 'assets/css/blue.css'; }
            //    else {   link.href = 'assets/css/' + style + '.css';}

            //    link.media = 'all';
            //    head.appendChild(link);
            //}

</script>
