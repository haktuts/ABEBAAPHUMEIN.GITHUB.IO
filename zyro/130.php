<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Android Vulnerable by Privelege Escalation</title>
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
	<link href="css/130.css?ts=1433839388" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance916" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance917" class="wb_element"><div></div></div><div id="wb_element_instance918" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance919" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance920" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance922" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">ANDROID DEVICES VULNERABLE TO PRIVILEGE ESCALATION</h1>

<p> </p>

<p class="wb-stl-normal">A security weakness in Android mobile operating system versions below 5.0 that puts potentially every Android device at risk for privilege escalation attacks, has been patched in Android 5.0 Lollipop.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">The security vulnerability (CVE-2014-7911), discovered by a security researcher named Jann Horn, could allow any potential attacker to bypass the Address Space Layout Randomization (ASLR) defense and execute arbitrary code of their choice on a target device under certain circumstances. ASLR is a technique involved in protection from buffer overflow attacks.</p>

<p class="wb-stl-normal">The flaw resides in java.io.ObjectInputStream, which fails to check whether an Object that is being deserialized is actually a serializable object. The vulnerability was reported by the researcher to Google security team earlier this year.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">A technical description of the bug has been provided by Jann Horn, the security researcher who discovered the flaw. He says that apps can communicate with system_service, which runs with admin privileges (UID 1000), using Intents with attached Bundles; these “are transferred as arraymap Parcels and arraymap Parcels can contain serialized data. This means that any app can attack the system_service this way,”</p>

<p class="wb-stl-normal">In order to explain the issue, the security researcher has provided technical details and also developed a proof-of-concept (PoC) that crashes system_service. Till now, a full exploit of the bug has not been created and also Horn is not entirely sure about how predictable the address layout of the system_server really is or how easy it is to write a large amount of data into system_server’s heap. However, in order to exploit this vulnerability on a vulnerable device, one need to get a malicious app onto the target device.</p>

<p class="wb-stl-normal">Android 5.0 Lollipop is the latest mobile operating system by Google, who describe Lollipop as “the largest Android release yet,” with more than 5,000 new APIs. But users of Lollipop are warning others not to immediately upgrade their mobile OS, after experiencing broken apps, repeated crashes, and device slowdowns.</p>

<p class="wb-stl-normal"> </p>

<p> </p>
</div><div id="wb_element_instance923" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(130);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance923");
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
					$("#wb_element_instance923").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance921" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance924" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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