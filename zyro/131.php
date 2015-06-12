<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>iOS Vulnerability - Masque Attack</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839388" rel="stylesheet" type="text/css" />
	<link href="css/131.css?ts=1433839388" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance925" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance926" class="wb_element"><div></div></div><div id="wb_element_instance927" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance928" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance929" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance931" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Masque Attack – New iOS Vulnerability can replace apps, steal your data.</h1>

<p> </p>

<p class="wb-stl-normal">Yet another security flaw has been discovered in iOS devices, according to a report by a security research firm. It is dangerous than WireLurker.</p>

<p class="wb-stl-normal">FireEye, a California based security research firm, has discovered a new  vulnerability in theApple’s iOS that allows any malicious malware to replace its genuine applications if installed using a third-party or an ad-hoc provision; the only condition being that the bundle identifier of both the applications match.</p>

<p class="wb-stl-normal">Named as “Masque Attack”, the vulnerability could enter a user’s mobile system through an arbitrary title, like Flappy Bird, and trick the user into installing it. Once installed, the malware replaces all genuine applications on the user’s phone except the iOS preinstalled apps like Mobile Safari.</p>

<p class="wb-stl-normal">This vulnerability holds true for iOS 7.1.1, 7.1.2, 8.0, 8.1 and 8.1.1 beta, for both jailbroken and non-jailbroken devices.</p>

<p class="wb-stl-normal">This vulnerability can be used to mine data from the compromised phone.</p>

<p class="wb-stl-normal">When the malware replaces the original apps, it retains and uploads data inside the original application. It can continue to mine the iPhone data without the user’s knowledge once the UI of original application has been recreated.</p>

<p class="wb-stl-normal">The vulnerability exists because the iOS does not seek matching certificates for apps with the same bundle identifier.</p>

<p class="wb-stl-normal">Generally, the developers at Apple use iOS’ enterprise provision files (EnPublic apps) to deploy apps and betas of apps without using the Apple’s App Store.</p>

<p class="wb-stl-normal">The security threats from the vulnerability could be severe, for instance, mimicking original app’s login interface, stealing login credentials, mine local data caches, MDM cannot detect these malwares because they use the same bundle identifier.</p>

<p class="wb-stl-normal">Meanwhile, to keep your iPhone from any possible attack:</p>

<p class="wb-stl-normal">Do not install apps from third-party<br>
Do not click “Install” on a pop-up from a third party web page.<br>
When opening an app, if iOS displays “Untrusted App Developer” alert, proceed with “Don’t Trust” and uninstall the application immediately.</p>
</div><div id="wb_element_instance932" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(131);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance932");
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
					$("#wb_element_instance932").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance930" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance933" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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