<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Cross Site Scripting</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="Check whether site is vulnerable to XSS" />
	<meta name="keywords" content="Check whether site is vulnerable to XSS" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link href="css/38.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1552" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1553" class="wb_element"><div></div></div><div id="wb_element_instance1554" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div><div id="wb_element_instance1558" class="wb_element"><a class="wb_button" href=""><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1555" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance1556" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1559" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">CROSS SITE SCRIPTING (XSS)</h1>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Cross site scripting (XSS) occurs when a user inputs malicious data into a website, which causes the application to do something it wasn’t intended.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Some website features commonly vulnerable to XSS attacks are:</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Search Engines</p>

<p class="wb-stl-normal">Login Forms</p>

<p class="wb-stl-normal">Comment Field</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2">There are three types of XSS attacks</h2>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Local – Local XSS attacks are by far the rarest and the hardest to pull off. This attack requires an exploit for a browser vulnerability. With this type of attack, the hacker can install worms, spambots, and backdoors onto your computer.</p>

<p class="wb-stl-normal">Non-Persistent – Non-persistent attacks are the most common types of attack and don’t harm the actual website. Non-persistent attacks occur when  a scripting language that is used for client-side web development or HTML is inserted into a variable which causes the output that the user sees to be changed. Non-persistent attacks are only activated when the user visits the URL crafted by the attacker.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Persistent – Persistent attacks are usually used against web applications like guest books, forums, and shout boxes. Some of the things a hacker can do with a persistent attacks are:</p>

<p class="wb-stl-normal">    Steal website cookies</p>

<p class="wb-stl-normal">    Deface the website</p>

<p class="wb-stl-normal">    Spread Worms</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3">Reflective XSS Attack</h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Reflected Cross-site Scripting (XSS) occur when an attacker injects browser executable code within a single HTTP response. The injected attack is not stored within the application itself.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">1:First of all, we have to find a input field so that we can inject our own script, for example: search box, username,password or any other input fields. Once we found the input field, let us try to put some string inside the field, for instance let me input "abcd". It will display the  result “hi abcd”.It means reflective script is working in website.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">2:  let us make sure whether the site is completely vulnerable to attack by injecting a full javascript code.  For instance, let us input</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&lt;script&gt;alert('abcd')&lt;/script&gt;.Now it will display pop-up box with 'abcd' string. Finally, we successfully exploit the XSS .  By extending the code with malicious script, a hacker can do steal cookies or deface the site and more.</p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>
</div><div id="wb_element_instance1560" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(38);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1560");
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
					$("#wb_element_instance1560").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1557" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1561" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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