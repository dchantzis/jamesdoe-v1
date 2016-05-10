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
<title>James Doe: Portfolio v.1 (remix 2012)</title>

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

<body id="index">

	<div id="notice">
    	jamesdoe.com version 1 (remix 2012): <span class="bold">This website is no longer updated.</span> It exists online only for demonstration purposes.
    </div>
	<div id="wrapper">
    	
        <header>
            
        	<div id="logo">
            	<img src="layout/images/jdlogo.png" id="" class="" alt="James Doe" width="450" height="123"/>
            </div>
            <nav>
            <ul class="navi" id="navi_prime">
            	
            	<li><a href="#illustrations" title="" class="" id="">illustrations</a></li>
            	<li><a href="#news" title="" class="" id="">news</a></li>
                <li><a href="#sketches" title="" class="" id="">sketches</a></li>
                <li><a href="#links" title="" class="" id="">links</a></li>
                <li><a href="blog.php" title="" class="" id="">blog</a></li>
                <li><a href="#about" title="" class="" id="">about</a></li>
                
            </ul>
        	</nav>
        </header><!--header-->
        
        <div class="clearboth"></div>
        
        <div id="cover">
        	
            <div id="slides">
            	<ul class="slides_container">
                	<li id='slide_01'>
                    	<a href='images/gallery/Clint_Eastwood_01.gif' data-title-id='sli_01' data-fancybox-group="gallery" class="group_cover">
                    	<img src='layout/images/carousel/Clint_Eastwood_01.jpg' height='400'/>
                        <div class='displaynone'>Clint Eastwood<span>year: 2005</span></div>
                        <span id='sli_01' class='displaynone'>
                            <span class='ititle'>Clint Eastwood</span> | 
                            <span>Year: 2005</span> | 
                            <span>Uploaded on: 31.12.2005, 13:15</span>
                    	</span>
                        </a>                        
                    </li>
                	<li id='slide_02'>
                    	<a href='images/gallery/Elisa_Cuthbert_01.gif' data-title-id='sli_02' data-fancybox-group="gallery" class="group_cover">
                    	<img src='layout/images/carousel/Elisa_Cuthbert_01.jpg' height='400'/>
                        <div class='displaynone'>Elisa Cuthbert<span>year: 2004</span></div>
                        <span id='sli_02' class='displaynone'>
                            <span class='ititle'>Clint Eastwood</span> | 
                            <span>Year: 2004</span> | 
                            <span>Uploaded on: 31.12.2005, 12:25</span>
                    	</span>
                        </a>
                    </li>
                	<li id='slide_03'>
                    	<a href='images/gallery/Estella_01.gif' data-title-id='sli_03' data-fancybox-group="gallery" class="group_cover">
                    	<img src='layout/images/carousel/Estella_01.jpg' height='400'/>
                        <div class='displaynone'>Estalla Warren<span>year: 2004</span></div>
                        <span id='sli_03' class='displaynone'>
                            <span class='ititle'>Estalla Warren</span> | 
                            <span>Year: 2004</span> | 
                            <span>Uploaded on: 31.12.2005, 12:31</span>
                    	</span>
                        </a>
                    </li>
                	<li id='slide_04'>
                    	<a href='images/gallery/Kirsten_Dunst_01.gif' data-title-id='sli_04' data-fancybox-group="gallery" class="group_cover">
                    	<img src='layout/images/carousel/Kirsten_Dunst_01.jpg' height='400'/>
                    	<div class='displaynone'>Kirsten Dunst<span>year: 2004</span></div>
                        <span id='sli_04' class='displaynone'>
                            <span class='ititle'>Kirsten Dunst</span> | 
                            <span>Year: 2004</span> | 
                            <span>Uploaded on: 31.12.2005, 12:40</span>
                    	</span>
                        </a>
                    </li>
                    <li id='slide_05'>
                    	<a href='images/gallery/Scan20008.gif' data-title-id='sli_05' data-fancybox-group="gallery" class="group_cover">
                    	<img src='layout/images/carousel/Scan20008.jpg' height='400'/>
                    	<div class='displaynone'>Woman Portrait<span>year: 2006</span></div>
                        <span id='sli_05' class='displaynone'>
                            <span class='ititle'>Woman Portrait</span> | 
                            <span>Year: 2006</span> | 
                            <span>Uploaded on: 31.12.2005, 12:40</span>
                    	</span>
                        </a>
                    </li>
                </ul>
                <div class="clearboth"></div>
            </div>
            
        </div><!--cover-->
        <div id="cover_controls">
        	<div class='main_controls' id='prev'></div>
            <div class='bullet' id='control_01'></div>
            <div class='bullet' id='control_02'></div>
            <div class='bullet' id='control_03'></div>
            <div class='bullet' id='control_04'></div>
            <div class='bullet' id='control_05'></div>
            <div class='main_controls' id='next'></div>
        </div>
        
        
        <div id="content">
        
        	<section id="news_section">
            	<a id='news'></a>
            	<div class="title">news</div>
                <div class="separator">&nbsp;</div>
                <div class="subtitle">Gallery updates and news</div>
                
                <? news_get(); ?>
            
            </section><!--news-->
        
        	<section id="illustrations_section">
            	<a id="illustrations"></a>
            	<div class="title">illustrations</div>
                <div class="separator">&nbsp;</div>
                <div class="subtitle">Where you can see some of my finished work.</div>
                
                <? gallery_get("illustrations"); ?>
            	<div id='more_illustrations' class='toggle_entries'>more</div>
            </section><!--illustrations-->
        
        	<section id="sketches_section">
            	<a id="sketches"></a>
            	<div class="title">sketches</div>
                <div class="separator">&nbsp;</div>
                <div class="subtitle">Where you can view sketches and doodles that I didn't care enough to finish.</div>
                
                <? gallery_get("sketches"); ?>
            	<div id='more_sketches' class='toggle_entries'>more</div>
            </section><!--sketches-->
            
           	
            <section id="links_section">
            	<a id="links"></a>
            	<div class="title">links</div>
                <div class="separator">&nbsp;</div>
                <div class="subtitle">Where you can visit stuff in the interwebs that I like.</div>
                
                <? links_get(); ?>
            </section>
            
            <section id="about_section">
            	<a id="about"></a>
            	<div class="title">about</div>
                <div class="separator">&nbsp;</div>
                <div class="subtitle">Where I explain who I am and how you can contact me.</div>
            
            	<div id="about_info_container">
                	<div id="avatar">
                    	<img src='layout/images/jdavatar.png' alt='' width="125"/>
                    </div>
                	<div id="description">
                        <p>
                            <span class='intro'>the story so far:</span> Born not very far from here, not so long ago. His birth was marked by great galactic phenomena of paramount importance.
                        </p>
                        <p>
                            Often the center of attention and the object of desire, he had to learn to be humble among common people.
                            He wishes you well. Be glad if he's on your side.
                        </p>
                        <p>
                        	He likes to sketch, draw, write and travel the world without moving at 30.27 km/sec. Currently he packs 8 kinds of awesome. 
                        </p>
                        <p>
                        	He lives in somewhere in the Milky Way.
                        </p>
                    </div>
                </div>
            	<div id='siteinfo_contact'>
                		<div class='title'>Contact</div>
                        <div id='contact_container'>
                        
                            <div id='contact_loader' class='displaynone'></div>
                            <div id='contact_messages' class='displaynone' class='messages'></div>
                            
                            <ul id='contact'>
                                <li>
                                    <input class='formtext' type='text' name='contact_name' id='contact_name' maxlength='70' value='[type your name][required]' />
                                    <span id='contact_name_message' class='messages'></span>
                                </li>
                                <li>
                                    <input class='formtext' type='text' name='contact_email' id='contact_email' maxlength='70' value='[type your email][required]' />
                                    <span id='contact_email_message' class='messages'></span>
                                </li>
                                <li>
                                    <input class='formtext' type='text' name='contact_regarding' id='contact_regarding' maxlength='180' value='[regarding][not required]' />
                                    <span id='contact_regarding_message' class='messages'></span>
                                </li>
                                <li>
                                    <textarea class='formtext' name='contact_message' id='contact_message' cols='' rows=''>[type your message][required]</textarea>
                                    <span id='contact_message_message' class='messages'></span>
                                </li>
                                <li class='charcounters'><span class='counters' id='scounter'>2500</span> remaining characters</li>
                                <li><input class='button' type='submit' name='contact_send' id='contact_send' value='send' /></li>
                            </ul>
                        </div><!--contact_container-->
                </div><!--siteinfo_contact-->    
            
            </section><!--info-->
            
        
        </div><!--content-->
        
        
        <footer>
        	<ul class="navi" id="navi_sec">
            	<li><a href="#news" title="" class="" id="">news</a></li>
                <li><a href="#illustrations" title="" class="" id="">illustrations</a></li>
                <li><a href="#sketches" title="" class="" id="">sketches</a></li>
                <li><a href="#links" title="" class="" id="">links</a></li>
                <li><a href="#about" title="" class="" id="">about</a></li>
                <li><a href="blog.php" title="" class="" id="">blog</a></li>
            </ul>
            <div id="copyright">&copy; 2005-2012 <a href="http://www.dimitrioschantzis.com" class="signature" id="" title="">Dimitrios Chantzis</a></div>
        </footer><!--footer-->
        
    </div><!--wrapper-->

</body>
</html>