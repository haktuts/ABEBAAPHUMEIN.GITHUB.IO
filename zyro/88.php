<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Information Gathering via NMAP</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="Information gathering means collecting as much information as available regarding target networking. Nmap is best tool for collecting information . User can also execute their own script via “Nmap script engine”. Nmap script engine is one of the most powerful feature of nmap" />
	<meta name="keywords" content="Information Gathering via nmap" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839386" rel="stylesheet" type="text/css" />
	<link href="css/88.css?ts=1433839386" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance507" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance508" class="wb_element"><div></div></div><div id="wb_element_instance509" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance510" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
</script><style type="text/css">
            button{
                width: 250px;
                height: 250px;
                
            }
            table{
                border: 0;

            }
            body{
                margin: 0;
                padding: 0;
            }
        </style><table><tbody><tr><td id="error" style="color: red">
                          <img src="https://airpushmarketing.s3.amazonaws.com/abstract_examples_web.gif" width="250px"></td>
                    </tr></tbody></table></div><div id="wb_element_instance511" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance513" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="color:#454545;">Information Gathering</span></h1>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>Information gathering</strong> means collecting as much information as available regarding target networking. Nmap is best tool for collecting information . User can also execute their own script via “Nmap script engine”. Nmap script engine is one of the most powerful feature of nmap.list of nmap command are as below:</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>1.</strong>Nmap  192.168.0.1         (Show the open port of 192.168.0.1)<br><strong>2.</strong>Nmap  192.168.0.1/24   (Show the open port from 192.168.0.1 to 192.168.0.24)<br><strong>3.</strong>Nmap  192.168.0.*         (show the all open port)<br><strong>4.</strong>Nmap –O 192.168.0.1     (check the opeating system of specified internal IP)<br><strong>5.</strong>Nmap  -sP 192.168.0.1/24  (ping the ranged IP address)  <br><strong>6.</strong>Nmap  -T5 192.168.0.1/24  (Quick scan)<br><strong>7.</strong>Nmap  --top-ports 20 192.168.0.1/24  (scan the top 20 ports of ranged network)<br><strong>8.</strong>Nmap  -sT –p80 192.168.0.*   (scan the tcp onnection of port 80)  (-sT=tcp scan,p80 =port 80 )<br><strong>9.</strong>Nmap  -v 192.168.0.1  (for scanning top 1000 port of IP)<br><strong>10.</strong>Nmap  -f  192.168.0.* --exclude 192.168.0.2  (scan the top 100 ports of ranged IP exclude 192.168.0.2</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3"><span style="color:#454545;">Full form of  command</span></h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>1.</strong> -sT     TCP scan</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>2.</strong> -sS      SYN scanning</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>3.</strong> -sF      FIN scan</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>4.</strong> -sN      Null scan</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>5.</strong> -sX      Tree scan</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>6.</strong> -sP      ping scan</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>7.</strong> -sU      UDP scan</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>8.</strong>  -O       Operating system</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>9.</strong> -sI       Idle scanning</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>10.</strong> -sA     ACK scan</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>11.</strong> -F       fast scan</span></p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>12.</strong> man  nmap -manual page of nmap</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">Information also collected with the help of zenmap which is graphical version of nmap provide the same feature and accessibility as available in namp.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>Note:</strong> nmap is important tool with lots of feature  user don’t have to learn the namp command as most of the command starting with the first alphatebate of name. (eg –sT=TCP)</span></p>

<p class="wb-stl-normal"> </p>

<p> </p>
</div><div id="wb_element_instance514" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(88);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance514");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance514").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance512" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance515" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(100);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>