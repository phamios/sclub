<!DOCTYPE html>
<!-- saved from url=(0030)https://www.etq-amsterdam.com/ -->
<html lang="en" class="csscalc supports no-touchevents lastchild nthchild cssvwunit cssvhunit cssmask csstransforms csstransitions csstransforms3d mti-inactive wf-inactive"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, minimal-ui">

        <title>Home - ETQ Amsterdam</title>

        <link href="https://www.etq-amsterdam.com/app/themes/etq2016/assets/ux/favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="<?php echo base_url() ?>/templates/index_files/app.min.css">
        <script type="text/javascript" async="" src="<?php echo base_url() ?>/templates/index_files/hotjar-557198.js.tải xuống"></script>
        <script type="text/javascript" async="" src="<?php echo base_url() ?>/templates/index_files/analytics.js.tải xuống"></script>
        <script src="<?php echo base_url() ?>/templates/index_files/554619414746552" async=""></script>
        <script async="" src="<?php echo base_url() ?>/templates/index_files/fbevents.js.tải xuống"></script>
        <script async="" src="<?php echo base_url() ?>/templates/index_files/gtm.js.tải xuống"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/templates/index_files/modernizr.min.js.tải xuống"></script>

        <!--[if gte IE 8]>
            <link rel="stylesheet" href="https://www.etq-amsterdam.com/app/themes/etq2016/build/ie9.css">
            <script>var browser = 'ie9';</script>
        <![endif]-->

        <meta name="google-site-verification" content="d3N7Vn5vAyjyJL1k1eVTyPGqday2fsSAyBRi4I5Jl74">


        <!-- This site is optimized with the Yoast SEO plugin v3.4.2 - https://yoast.com/wordpress/plugins/seo/ -->
        <!-- <meta name="description" content="ETQ Amsterdam creates a modern minimalist perspective on footwear. Shop the latest collection online with free worldwide shipping.">
        <meta name="robots" content="noodp">
        <link rel="canonical" href="https://www.etq-amsterdam.com/">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Home - ETQ Amsterdam">
        <meta property="og:description" content="ETQ Amsterdam creates a modern minimalist perspective on footwear. Shop the latest collection online with free worldwide shipping.">
        <meta property="og:url" content="https://www.etq-amsterdam.com/">
        <meta property="og:site_name" content="ETQ Amsterdam">
        <meta property="og:image" content="https://www.etq-amsterdam.com/app/uploads/2016/08/ETQHeaderDesktop2.jpg">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:description" content="ETQ Amsterdam creates a modern minimalist perspective on footwear. Shop the latest collection online with free worldwide shipping.">
        <meta name="twitter:title" content="Home - ETQ Amsterdam">
        <meta name="twitter:site" content="@ETQAmsterdam">
        <meta name="twitter:image" content="https://www.etq-amsterdam.com/app/uploads/2016/08/ETQHeaderDesktop2.jpg">
        <meta name="twitter:creator" content="@ETQAmsterdam"> -->
        <!-- / Yoast SEO plugin. -->

        <!-- <link rel="https://api.w.org/" href="https://www.etq-amsterdam.com/wp-json/">
        <link rel="shortlink" href="https://www.etq-amsterdam.com/">
        <link rel="alternate" type="application/json+oembed" href="https://www.etq-amsterdam.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.etq-amsterdam.com%2F">
        <link rel="alternate" type="text/xml+oembed" href="https://www.etq-amsterdam.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.etq-amsterdam.com%2F&amp;format=xml">
  -->
  
        <script type="text/javascript" src="<?php echo base_url() ?>/templates/index_files/mt.js.tải xuống"></script>
        <link id="MonoTypeFontApiFontTracker" type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/templates/index_files/1.css">
        <script async="" src="<?php echo base_url() ?>/templates/index_files/modules-6d735a6d66d71e4b5154e075915a0fc8.js.tải xuống"></script>
        <style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>

        <link rel="stylesheet" href="<?php echo base_url() ?>/templates/style_rebase.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/templates/font/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&amp;subset=vietnamese" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="is-desktop has-header-background is-loading">
 
        <div class="header">
            <?php $this->load->view('widget/header');?>
        </div>

        <aside id="sidemenu" class="sidemenu">
            <?php $this->load->view('widget/menu');?>
        </aside>
        <aside id="shoppingcart" class="shoppingcart" data-quantity="0">
             <?php $this->load->view('widget/menu_right');?>
        </aside>
        <main id="js-page-view" class="page-view app-started">	
            <main id="home" class="page home-page" style="opacity: 1;">
                <!-- -----------Load------- -->
                <?php if ($this->router->fetch_class() == "home"): ?>
                    <?php if ($this->router->fetch_method() == "index"): ?>
                        <?php $this->load->view('main/index');?> 
                    <?php endif; ?>
                    <?php if ($this->router->fetch_method() == "login"): ?>
                        <?php $this->load->view('main/login/index');?> 
                    <?php endif; ?>
                <?php endif;?>
                <!-- ------------End load-------------- -->
            </main>
        </main>

         

        <footer>

        </footer>		
        <div id="compare-layout">
            <div class="region-compare__bar">
            </div>
            <div class="region-compare__products">
            </div>
        </div>
        <div id="popup-holder"></div>

        <script>
            window.BIA = window.BIA || {};
            BIA.BASE_URL = 'https://www.etq-amsterdam.com';
            BIA.IS_DEV = false;
            BIA.THEME_URL = 'https://www.etq-amsterdam.com/app/themes/etq2016';
            BIA.AJAX_URL = 'https://www.etq-amsterdam.com/wp/wp-admin/admin-ajax.php';
        </script>

        <script type="text/javascript" src="<?php echo base_url() ?>/templates/index_files/app.min.js.tải xuống"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/templates/index_files/wp-embed.min.js.tải xuống"></script>

        <div id="ads"></div>
    </body>
</html>