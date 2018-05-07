
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url() ?>assets/translate/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url() ?>assets/translate/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url() ?>assets/translate/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url() ?>assets/translate/js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url() ?>assets/translate/js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url() ?>assets/translate/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url() ?>assets/translate/css/custom.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/translate/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets/translate/js/screenfull.js"></script>
        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }

            

            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
            

            
        });
        </script>

<!----->

<!--pie-chart--->
<script src="<?php echo base_url() ?>assets/translate/js/pie-chart.js" type="text/javascript"></script>
<!--skycons-icons-->
<script src="<?php echo base_url() ?>assets/translate/js/skycons.js"></script>
<!--//skycons-icons-->
</head>