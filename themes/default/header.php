<?php
Assets::add_css(array());
Assets::add_js(array());
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <title><?php
        echo isset($page_title) ? "{$page_title} : " : '';
        e(class_exists('Settings_lib') ? settings_item('site.title') : 'Bonfire');
    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php e(isset($meta_description) ? $meta_description : ''); ?>">
    <meta name="author" content="<?php e(isset($meta_author) ? $meta_author : ''); ?>">
    <?php
    /* Modernizr is loaded before CSS so CSS can utilize its features */
    echo Assets::js('modernizr-2.5.3.js');
    ?>
    <?php echo Assets::css(); ?>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>logo.ico">
    <script>
    var base_url = "<?php echo base_url(); ?>";
    </script>
    <!-- Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="<?php echo base_url(); ?>assets/css/menuzord-megamenu.css" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="<?php echo base_url(); ?>assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="<?php echo base_url(); ?>assets/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="<?php echo base_url(); ?>assets/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="<?php echo base_url(); ?>assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="<?php echo base_url(); ?>assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link  href="<?php echo base_url(); ?>assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link  href="<?php echo base_url(); ?>assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="<?php echo base_url(); ?>assets/css/colors/theme-skin-color-set6.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body class="has-side-panel side-panel-right fullwidth-page">
