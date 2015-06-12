<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Setup Virtual Machine</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="First, download and install VirtualBox
1. Launch VirtualBox
2. Click New
3. This opens New Virtual Machine Wizard. Click Next
4. Give your new virtual machine a name, choose the right OS and version. These are automatically selected if VirtualBox can determine it from the name you gave. Click Next" />
	<meta name="keywords" content="How to create a new virtual machine for Ubuntu" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839386" rel="stylesheet" type="text/css" />
	<link href="css/84.css?ts=1433839386" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance470" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance471" class="wb_element"><div></div></div><div id="wb_element_instance472" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance473" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance474" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance476" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="color:#454545;">How to create a new virtual machine for Ubuntu:</span></h1>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2"><span style="color:#454545;">First, download and install VirtualBox</span></h2>

<p class="wb-stl-normal"><br>
 </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>1.</strong> Launch VirtualBox</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>2.</strong> Click New</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>3.</strong> This opens New Virtual Machine Wizard. Click Next</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>4.</strong> Give your new virtual machine a name, choose the right OS and version. These are automatically selected if VirtualBox can determine it from the name you gave. Click Next</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>5.</strong> Set the amount of RAM you want to assign to Ubuntu. For running a Linux vm (virtual machine), 512 MB is enough. You can assign as much as you want to, maximum being about 512 MB less of your host computer's RAM. Keep in mind though that RAM used by a running vm is away from the RAM Windows can use; assigning more RAM can make your vm run faster and better but at the same time make your Windows crawl so slowly even the vm halts. My recommendation is always leave at least 2 GB for Windows, or if you have under 4 GB of RAM only give maximum of 1 GB to a vm. Click Next</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>6.</strong> VirtualBox asks now if you want to create a new vhd (virtual hard disk), or use existing vhd. Choose Create new and click Next</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>7.</strong> New Virtual Disk Wizard starts. Click Next</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>8.</strong> Click Next to accept Dynamically expanding storage<br>
 Dynamically expanding vhd means that although the guest consideres the HD being the size given (max value), host Windows only uses as much space on HD as is actually needed; a 20 GB dynamic vhd where only 4 GB is used is seen by Windows host as a 4 GB vhd file, not as a 20 GB file, but the guest OS sees the same vhd file as a 20 GB hard disk with 16 GB free. I recommend 8 to 12 GB for Ubuntu.</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>9.</strong> You can now accept the default location where VirtualBox offers to save the vhd, or change the location by clicking the small folder symbol. Default save folders are Your_Username\.VirtualBox (VirtualBox 3.2 and older) or Your_Username\VirtualBox VMs(from version 4 Beta). You can also change the original size of vhd here. Click Next</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>10.</strong> Click Finish to end New Virtual Disk Wizard</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>11.</strong> Click Finish to end New Virtual Machine Wizard</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>12.</strong> Now choose the virtual machine you just created and click Settings</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>13.</strong> Choose Storage from the left pane, CD/DVD from under the title IDE controller, and click the small CD symbol on the right</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong style="background-color: transparent;">14.</strong><span style="background-color: transparent;"> Now you need to tell VirtualBox which install media you want to use. You can assign any of the host system's CD/DVD drives to vm , or an ISO image to act as a CD/DVD drive. For now, you want to use the Ubuntu ISO you downloaded earlier. Browse to its location, choose it and click Open</span></span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>15.</strong> Now choose Display from the left pane, assign the maximum 128 MB video RAM to virtual machine's emulated video card:</span></p>

<p class="wb-stl-normal"><br><span style="color:#454545;"><strong>16.</strong> Next you need to setup network controller. Click Network on the left pane, choose Enable Network Adapter, choose Bridged Adapter, and choose your host computer's network adapter from drop down list:<br><br>
Host-only only permits network operations with the Host OS.<br>
NAT mode will mask all network activity as if it came from your Host OS, although the VM can access external resources.<br>
Bridged mode replicates another node on the physical network and your VM will receive it's own IP address if DHCP is enabled in the network.<br><br><strong>17.</strong> Click OK to save edited settings</span></p>

<p> </p>
</div><div id="wb_element_instance477" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(84);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance477");
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
					$("#wb_element_instance477").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance475" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance478" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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