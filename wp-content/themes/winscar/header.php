<!DOCTYPE html>
<html lang="en">

<head>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112305235-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112305235-1');
</script>

    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
   <link rel="icon" type="imagem/png" href="<?php echo get_template_directory_uri() . '/img/favicon.png'; ?>" />
    <title>Winscar</title>

    <!-- Bootstrap Core CSS --
    <link href="" />

    <!-- Custom CSS --
    <link href="" /> -->
     
     <!-- Meu css -->
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/style.css'; ?>" />
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/animacao.css'; ?>" />
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/ganha-carro.css'; ?>" />
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap.css'; ?>" />
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/modern-business.css'; ?>" />
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css'; ?>" />
         <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
       $(document).ready(function() {  $('.item:first-child').addClass('active');});
    </script>
    <!-- Custom Fonts --
    <link rel="stylesheet" type="text/css" href="" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head ();  ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top nav-branco" role="navigation">
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand a-logo" href="<?php bloginfo('url')?>/principal">
                <img class="imagem-fixa" id="imagem-logo" src="<?php echo get_field('logo_marca', 123); ?>"></a>
            </div>
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script>
             // $(function(){   
             //     var nav = $('#imagem-logo');   
             //     $(window).scroll(function () { 
             //         if ($(this).scrollTop() > 150){ 
             //             nav.addClass("imagem-fixa"); 
             //         } else { 
             //             nav.removeClass("imagem-fixa"); 
             //         } 
             //     });  
             // });
            </script>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="menu-mobile">
            <div id="nav-trigger" class="nav-trigger open">
                  <span class="line"></span>
                  <span class="line"></span>
                  <span class="line"></span>
                </div>
                <nav id="nav-mobile" class="out">
                  <ul class="mobile">
                    <?php wp_nav_menu( array(
                       'theme_location' => 'header-menu',
                       'container' =>false,
                       'menu_class' => 'mobile',
                       'echo' => true,
                       'before' => '',
                       'after' => '',
                       'link_before' => '',
                       'link_after' => '',
                       'depth' => 0,
                       'walker' => new description_walker())
                        ); ?>
                  </ul>
                </nav>
                </div>
                <script>
                    // selected elements
var navTrigger = document.getElementById('nav-trigger');
var nav = document.getElementById('nav-mobile');
var header = document.getElementById('header');
var heading = document.getElementById('heading');
var labels = document.getElementsByClassName('nav-label');

// sizing
var windowHeight = window.innerHeight;
var windowWidth = window.innerWidth;
var fontSize = windowHeight*0.1;
var headingSize = windowWidth*0.1;

// Event Listening
navTrigger.addEventListener('click', navToggle);
window.addEventListener('resize', resize);

function resize() {
  windowHeight = window.innerHeight;
  windowWidth = window.innerWidth;
  fontSize = windowHeight*0.1;
  headingSize = windowWidth*0.1;
  if(headingSize > windowHeight*0.3) headingSize = windowHeight*0.3; 
  
  for(var i = 0; i < labels.length; i++) {
    labels[i].style.fontSize = fontSize+'px';
    labels[i].style.height = fontSize+'px';
    labels[i].style.marginTop = '-'+fontSize*0.6+'px';
  }

  header.style.height = windowHeight+'px';
  heading.style.fontSize = headingSize+'px';
  heading.style.height = headingSize+'px';
  heading.style.marginTop = '-'+headingSize*0.6+'px';
  
}

function navToggle(e) {
  var closed = (navTrigger.className.indexOf('close') > 0); 
  if(closed) {
    navTrigger.className = 'nav-trigger open';
    nav.className = 'out';
  } else {
    navTrigger.className = 'nav-trigger close';
    nav.className = 'in';
  }
}

window.onload = resize;
                </script>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <?php wp_nav_menu( array(
               'theme_location' => 'header-menu',
               'container' =>false,
               'menu_class' => 'nav-branco',
               'echo' => true,
               'before' => '',
               'after' => '',
               'link_before' => '',
               'link_after' => '',
               'depth' => 0,
               'walker' => new description_walker())
				); ?>
            </div>
            <!-- /.navbar-collapse -->
            <div class="container">
        </div>
        <!-- /.container -->
    </nav>