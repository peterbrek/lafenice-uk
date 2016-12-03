<?php
if (!empty($page_description)) {
    $description = $page_description;
} else {
    $description = 'La Fenice – exclusive home textiles, curtain fabrics';
}

if (!empty($page_keywords)) {
    $keywords = $page_keywords;
} else {
    $keywords = 'exclusive home textiles, curtain fabrics';
}

if ($index_page) {
    $title = "La Fenice – exclusive home textiles, curtain fabrics";
} else {
    $title = $page_title." | La Fenice – exclusive home textiles, curtain fabrics";
}
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title><?= $title?></title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="description" content="<?= $description?>">
        <meta name="keywords" content="<?= $keywords?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon-->
        <!-- TODO -->
        <!--<link rel="icon" type="image/png" href="<?= URL?>assets/img/favicon.ico">-->

        <!-- Css Global Compulsory -->
        <link rel="stylesheet" href="<?= URL?>/assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Css Implementing Plugins -->
        <link rel="stylesheet" href="<?= URL?>/assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= URL?>/assets/plugins/lightbox/css/lightbox.css">
        <!-- Css Theme -->
        <link rel="stylesheet" href="<?= URL?>/assets/css/style.css">
        <!-- Web Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset;=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!-- Google Map -->
        

    </head>
    <body>

        <!-- Header (navigation menu, and logo) -->
        <nav class="navbar navbar-default header-navbar" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?= URL?>">
                                <!-- Logo Image -->
                                <img src="/assets/img/logo-header.png" height="65px" alt="La Fenice">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <!-- <li class="active"><a href="index.html">Home</a></li> -->
                                <li><a href="<?= URL?>/about">About</a></li>
                                <li><a href="<?= URL?>/services">Services</a></li>
                                <li><a href="<?= URL?>/references">References</a></li>
                                <li><a href="<?= URL?>/contact">Contact</a></li>

                            </ul>
                        </div>
                    </div>



                </div><!-- /row -->
            </div><!-- /container -->
        </nav>
        <!-- End Header -->
