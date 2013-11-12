<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title><?php echo $layoutTitle ?></title>

        <!-- Loading Bootstrap -->
        <link href="<?php echo BASE_URL;?>/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Loading Flat UI -->
        <link href="<?php echo BASE_URL;?>/css/flat-ui.css" rel="stylesheet">

        <link rel="shortcut icon" href="<?php echo BASE_URL;?>/images/favicon.ico">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="<?php echo BASE_URL;?>/js/html5shiv.js"></script>
        <![endif]-->



    </head>
    <body>
        <div class="container">
            <?php echo $layoutContent ?>
        </div>
        
    <!-- Load JS here for greater good =============================-->
    <script src="<?php echo BASE_URL;?>/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo BASE_URL;?>/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?php echo BASE_URL;?>/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo BASE_URL;?>/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL;?>/js/bootstrap-select.js"></script>
    <script src="<?php echo BASE_URL;?>/js/bootstrap-switch.js"></script>
    <script src="<?php echo BASE_URL;?>/js/flatui-checkbox.js"></script>
    <script src="<?php echo BASE_URL;?>/js/flatui-radio.js"></script>
    <script src="<?php echo BASE_URL;?>/js/jquery.tagsinput.js"></script>
    <script src="<?php echo BASE_URL;?>/js/jquery.placeholder.js"></script>
    <script src="<?php echo BASE_URL;?>/js/jquery.stacktable.js"></script>
    <script src="http://vjs.zencdn.net/c/video.js"></script>
    <script src="<?php echo BASE_URL;?>/js/application.js"></script>
    
    </body>
</html>
