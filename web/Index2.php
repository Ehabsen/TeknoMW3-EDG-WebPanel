<?php include_once "auth.php"; ?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>EDG WebPanel</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />
<!-- Included CSS Files -->
<link rel="stylesheet" href="stylesheets/main.css" />
<link rel="stylesheet" href="stylesheets/devices.css" />
<link rel="stylesheet" href="stylesheets/paralax_slider.css" />
<link rel="stylesheet" href="stylesheets/jquery.fancybox.css?v=2.1.2" type="text/css"  media="screen" />
<!--[if IE]>
<link rel="stylesheet" href="stylesheets/ie.css"> 
<![endif]-->


</head>

<body>

<!--********************************************* Main wrapper Start *********************************************-->
<div id="footer_image">
  <div id="main_wrapper"> 
    
    <!--********************************************* Logo Start *********************************************-->
    <div id="logo"> <a href="#"><img alt="alt_example" src="./images/logo.png"  /></a>
      <div id="social_ctn"> 
      <a href="http://www.youtube.com/channel/UCZHTWYNCUA2mYRIwYENNq1A" target="YouTube" id="you_tube"><img alt="alt_example" src="./images/blank.gif" width="100%" height="37px" /></a> 
      
      </div>
    
    </div>
    <!--********************************************* Logo end *********************************************--> 
    
    <!--********************************************* Main_in Start *********************************************-->
    <div id="main_in"> 
    
    <!--********************************************* Mainmenu Start *********************************************-->
    <div id="menu_wrapper">
      <div id="menu_left"></div>
      <ul id="menu">
        <li><a href="http://edg-tkg.de/Home.html">Home</a></li>
        <li><a href="http://edg-tkg.de/ts3wi/" target="TS3 WebPanel">TS3 WebPanel</a></li>
        <li><a href="http://edg-tkg.de/" target="EDG Website" >EDG WebSite</a></li>
        <li><a href="http://edg-tkg.de/wi/SvZ/functions/index2.php">SvZ Server</a></li>
        <li><a href="./logout.php">logout</a></li>
        <li></li>
        <li></li>
        <li>        	<ul>
                <li><a href="#">Submenu example</a></li>
                <li><a href="#">Submenu example 2</a></li>
                <li><a href="#">Submenu example 3</a></li>
                <li class="drop_last"><a href="#" >Submenu example 4</a></li>
            </ul>
		</li>
      </ul>
        <a href="#" id="pull">Menu</a>
      <div id="menu_right"></div>
      <div class="clear"></div>
    </div>
    
    <!--********************************************* Mainmenu end *********************************************--> 
    
    <!--********************************************* Banner start *********************************************--><!--********************************************* Banner end *********************************************-->
    
    <div class="top_shadow"></div>
    
    <!--********************************************* Hot news start *********************************************-->
    <div id="hot_news">
      <div class="header">
        <h1><span>Welcome to the webinterface!!!</span></h1>
      </div>
      
      <!-- Previous and next selector --> 
      <a id="prev" class="prev" href="#"><img alt="alt_example" src="./images/blank.gif" width="21" height="33" border="0" /></a> <a id="next" class="next" href="#"><img alt="alt_example" src="./images/blank.gif" width="21" height="33" border="0" /></a>
      <ul id="hot_news_box">
        <li>
          <h2><a href="./SinScript.php" target="SinScript Editor">SinScript Editor</a></li>
        </li>
        <li>
          <h2><a href="./AdminScript.php" target="AdminScript Editor">AdminScript Editor</a></li>
        </li>
        <li>
          <h2><a href="./PermBanList.php" target="PermBanList">PermBanList</a></li>
        </li>
        <li>
          <h2><a href="./IPBanList.php" target="IPBanList">IPBanList</a></li>
        </li>
        <li>
          <h2><a href="./chatlog.php" target="ChatLog">ChatLog</a></li>
        </li>
		<li>
		<h2><a href="./ServerCFG.php" target="Server CFG">Server CFG</a></li>
		</li>
	<li>
          <h2><a href="./playerlog.php" target="PlayerLog">PlayerLog</a></li>
        </li>
		</li>
      </ul>
    </div>
	
	

    <!--********************************************* Hot news end *********************************************--> 
    
    <!--********************************************* Main start *********************************************--><!--********************************************* Main end *********************************************--> 
    
    <!--********************************************* Main advert start *********************************************--><!--********************************************* Main advert end *********************************************--> 
    
    <!--********************************************* Footer start *********************************************--><!--********************************************* Footer end *********************************************--> 
    <div class="clear"></div>
    <!--********************************************* Twitter feed start *********************************************-->
    <!--********************************************* Twitter feed end *********************************************--> 
		<form action="./server restarter.php"> 
        <input type="button" onClick="ServerRestarter()" value="Start Server!">
		</form>
		<form action="./serverkiller.php"> 
        <input type="button" onClick="ServerStop()" value="Stop Server!">
		</form>
  </div>
  </div>
</div>
<!--********************************************* Main wrapper end *********************************************--> 

<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script> 

<script src="./javascript/jquery.carouFredSel-6.1.0.js" type="text/javascript"></script> 
<script src="./javascript/jquery.cslider.js" type="text/javascript" ></script> 
<script src="./javascript/modernizr.custom.28468.js" type="text/javascript"></script> 
<script src="./javascript/getTweet.js" type="text/javascript" ></script> 
<script src="./javascript/jquery.fancybox.js?v=2.1.3" type="text/javascript" ></script> 




<!--******* Server Starter*******--> 
<script type="text/javascript">
<!--
function ServerStart() {
window.open( "./Server Starter.php", "Server Start", 
"status = 1, height = 300, width = 300, resizable = 0" )
//-->
</script>


<!--******* Server Killer*******--> 
<script type="text/javascript">
<!--
function ServerStop() {
window.open( "./ServerKiller.php", "Server Killer", 
"status = 1, height = 300, width = 300, resizable = 0" )
}
//-->
</script>

<!--******* Server Restarter*******--> 
<script type="text/javascript">
<!--
function ServerRestarter() {
window.open( "./Server Restarter.php", "Server Restarter", 
"status = 1, height = 300, width = 300, resizable = 0" )
}
//-->
</script>

<!--******* Javascript Code for the Hot news carousel *******--> 
<script type="text/javascript">
	$(document).ready(function() {
	
		// Using default configuration
		$("#sd").carouFredSel();
		
		// Using custom configuration
		$("#hot_news_box").carouFredSel({
			items				: 1,
			direction			: "left",
			prev: '#prev',
			next: '#next',
			scroll : {
				items			: 1,
				height			: 250,
				easing			: "quadratic",
				duration		: 500,							
				pauseOnHover	: true
			}	
		});	
	})
</script> 

<!--******* Javascript Code for the Hot news carousel *******--> 
<script type="text/javascript">
	$(document).ready(function() {
	
		// Using default configuration
		$("#sd").carouFredSel();
		
		// Using custom configuration
		$("#hot_news_box2").carouFredSel({
			items				: 4,
			direction			: "right",
			prev: '#prev',
			next: '#next',
			scroll : {
				items			: 1,
				height			: 250,
				easing			: "quadratic",
				duration		: 2000,							
				pauseOnHover	: true
			}	
		});	
	})
</script> 


<!--******* Javascript Code for the Main banner *******--> 
<script type="text/javascript">
	$(function() {
	
		$('#da-slider').cslider({
			autoplay	: true,
			bgincrement	: 450
		});
	
	});
</script> 

<!--******* Javascript Code for the image shadowbox *******--> 
<script type="text/javascript">
$(document).ready(function() {
	/*
	*  Simple image gallery. Uses default settings
	*/
	
	$('.shadowbox').fancybox();
});
</script>

<!--******* Javascript Code for the menu *******-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#menu li').bind('mouseover', openSubMenu);
        $('#menu > li').bind('mouseout', closeSubMenu);

        function openSubMenu() {
            $(this).find('ul').css('visibility', 'visible');
        };

        function closeSubMenu() {
            $(this).find('ul').css('visibility', 'hidden');
        };
    });
</script>

<script type="text/javascript">
    $(function() {
        var pull    = $('#pull');
        menu 		= $('ul#menu');

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 767 && $('ul#menu').css('visibility', 'hidden')) {
                $('ul#menu').removeAttr('style');
            };
            var menu = $('#menu_wrapper').width();
            $('#pull').width(menu - 20);
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        var menu = $('#menu_wrapper').width();
        $('#pull').width(menu - 20);
    });
</script>
</body>
</html>
