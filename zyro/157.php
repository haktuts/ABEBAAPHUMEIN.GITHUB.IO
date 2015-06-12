<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Server Management</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="Linux server management" />
	<meta name="keywords" content="Linux server management" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link href="css/157.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1418" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1419" class="wb_element"><div></div></div><div id="wb_element_instance1420" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1421" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance1422" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1424" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">APACHE SERVER CONFIGURATION</h1>

<p> </p>

<p class="wb-stl-normal">Apache is the most widely used Web Server application in the world with more than 50% share in the commercial web server market. Virtual hosting is one such feature that allows a single Apache Web Server to serve a number of different websites. The word, Apache, has been taken from the name of the Native American tribe ‘Apache’, famous for its skills in warfare and strategy making.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Installing apache from the source require the –devel package to be installed on your server. You can find the latest available version of Apache, you can download it here:</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">http://httpd.apache.org/download.cgi .</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> Once you download the source file move it to the <span style="color:#bebebe;">/usr/local/src</span> folder.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@haktuts ~] <span style="color:#f10631;">cd /usr/local/src</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;Go to /usr/local/src directory</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@haktuts ~] <span style="color:#f10631;">gzip -d httpd-2.2.26.tar.gz</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;Apache file is archived with .tar.gz so first use gzip command to extract the data from gzip.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@ haktuts ~] <span style="color:#f10631;">tar xvf httpd-2.2.26.tar</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;Now use tar command to extract the data from .tar archived file.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@ haktuts ~] <span style="color:#f10631;">httpd-2.2.26</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@ haktuts ~] <span style="color:#f10631;">./configure –help</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;see all configuration option</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@ haktuts ~] <span style="color:#f10631;">./configure –prefix=/usr/local/apache –enable-so</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;The compilation of Apache within the /usr/local/apache directory with the DSO capability. The –enable-so option, can load required modules to apache at run time via the DSO mechanism rather than requiring a recompilation.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@ haktuts ~] <span style="color:#f10631;">make</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@ haktuts ~] <span style="color:#f10631;">make install</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;use to make the file and install</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@ haktuts ~] <span style="color: rgb(241, 6, 49);">iptables -I INPUT -p tcp --dport 80 -j ACCEPT</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;command to open port 80 in firewell</p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3">Configure the virtual host for multiple domain hosting</h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">There are two types of virtual hosts supported by Apache –</p>

<p class="wb-stl-normal">1.Name-based virtual host<br>
2.Address-based or IP based virtual host</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">1.Name-based Virtual Host</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Name based virtual hosting is used to host multiple websites on a single IP address.for this user have to edit the httpd.conf file &amp; copy the colored content below and paste it.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">NameVirtualHost *:80</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;VirtualHost 192.168.0.108:80&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerAdmin hak@haktuts.com</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">DocumentRoot /var/www/html/haktuts.com     </span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerName www.haktuts.com</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;/VirtualHost&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;VirtualHost 192.168.0.108:80&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerAdmin tuts@haktuts.in</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">DocumentRoot /var/www/html/haktuts.in</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerName www.haktuts.in</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;/VirtualHost&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Now check the configuration file and make sure all “syntax Ok” with below command</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">[root@haktuts ~]<span style="color:#f10631;">httpd –t</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">2.IP-based Virtual host</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">Listen 192.168.0.10:80</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;VirtualHost 192.168.10.18:80&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerAdmin hak@haktuts.com</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">DocumentRoot /var/www/html/ haktuts.com</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerName www. haktuts.com</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;/VirtualHost&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;VirtualHost 192.168.10.19:80&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerAdmin tuts@ haktuts.in </span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">DocumentRoot /var/www/html/ haktuts.in</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerName www.haktuts.in</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;/VirtualHost&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">In ip based hosting, multiple ip address is used as shown above for configuration</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">If user want to deploy the php website then mod_php enabled on your server</p>

<p class="wb-stl-normal">This file is find in /etc/httpd/conf.d/ directory.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Check the mod_php with following command</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">httpd -M | grep "php5_module"</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">| means pipe and show the details in table views i.e.in more format</p>

<p class="wb-stl-normal">grep is like finding the particular word in whole directory here we are looking for php5_module so command will be grep "php5_module"</p>
</div><div id="wb_element_instance1425" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(157);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1425");
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
					$("#wb_element_instance1425").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1423" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1426" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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