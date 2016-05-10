<?
	session_start();
	require("functions/get.inc.php");
	require("functions/common.inc.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="Shortcut Icon" href="layout/images/dchfavicon.ico" />
<title>Blog - James Doe: Portfolio v.1 (remix 2012)</title>

<link rel="stylesheet" href="layout/css/cssreset.css">
<link rel="stylesheet" href="layout/css/style.css">
<link rel="stylesheet" href="layout/css/jquery.fancybox.css?v=2.1.0"/>

<script type="text/javascript" src="scripts/modernizr.js"></script>
<script type="text/javascript" src="scripts/jquery/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="scripts/jquery/jquery.fancybox.js?v=2.1.0"></script>
<script type="text/javascript" src="scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.carouFredSel-5.6.4-packed.js"></script>
<script type="text/javascript" src="scripts/main.inc.js"></script>

</head>

<body id="blog">

	<div id="notice">
    	jamesdoe.com version 1 (remix 2012): <span class="bold">This website is no longer updated.</span> It exists online only for demonstration purposes.
    </div>
    <div id="wrapper">
    
    	<header>
            
        	<div id="logo">
            	<a href="index.php"><img src="layout/images/jdlogo.png" id="" class="" alt="James Doe" width="340" height=""/></a>
            </div>
            <nav>
            <ul class="navi" id="navi_prime">
              <li><a href="index.php#news" title="" class="" id="">news</a></li>
              <li><a href="index.php#illustrations" title="" class="" id="">illustrations</a></li>
              <li><a href="index.php#sketches" title="" class="" id="">sketches</a></li>
              <li><a href="index.php#links" title="" class="" id="">links</a></li>
              <li><a href="index.php#about" title="" class="" id="">about</a></li>
              <li><a href="blog.php" title="" class="" id="">blog</a></li>               
            </ul>
        	</nav>
        </header><!--header-->
    
    	<div id="content">
        
        	<section>
            	<a id='blog'></a>
            	<div class="title">blog</div>
                <div class="separator">&nbsp;</div>
                
                <?=blog_get()?>
                
            </section>
        
        </div><!--content-->
    
        <footer>
          <ul class="navi" id="navi_sec">
              <li><a href="index.php#news" title="" class="" id="">news</a></li>
              <li><a href="index.php#illustrations" title="" class="" id="">illustrations</a></li>
              <li><a href="index.php#sketches" title="" class="" id="">sketches</a></li>
              <li><a href="index.php#links" title="" class="" id="">links</a></li>
              <li><a href="index.php#about" title="" class="" id="">about</a></li>
              <li><a href="blog.php" title="" class="" id="">blog</a></li>
          </ul>
          <div id="copyright">&copy; 2005-2012 <a href="http://www.dimitrioschantzis.com" class="signature" id="" title="">Dimitrios Chantzis</a></div>
        </footer><!--footer-->    
    
    </div><!--wrapper-->
    <div id='loader' class='displaynone'><img src='layout/images/loader.gif' /></div>
</body>
</html>