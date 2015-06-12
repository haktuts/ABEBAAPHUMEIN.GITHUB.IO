<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Maintenance of Linux System</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="Maintenance of Linux System" />
	<meta name="keywords" content="Maintenance of Linux System" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link href="css/154.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1391" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1392" class="wb_element"><div></div></div><div id="wb_element_instance1393" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1394" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance1395" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1397" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">BACKUP</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Commands for Backup</p>

<p class="wb-stl-normal"><br><span style="color:#f10631;">tar &lt;options&gt; &lt;destination&gt; &lt;source&gt;</span><br>
Options:<br><span style="color:#f10631;">c</span>         --  create <br><span style="color:#f10631;">v</span>         -- verbose means it will show all the error while creating creating backup.<br><span style="color:#f10631;">p</span>         -- same permission i.e. maintains the same permissions of file which is backed-up<br><span style="color:#f10631;">f</span>          -- specifies filename<br><span style="color:#f10631;">t</span>          -- table of content <br><span style="color:#f10631;">x</span>          -- extract to<br><span style="color:#f10631;">z</span>          -- zip/gzip<br><span style="color:#f10631;">w</span>        -- ask for confirmation</p>

<p class="wb-stl-normal"><br>
To create a backup</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">Type1: tar --create --verbose --same-permission --file /usr/backup1 /home /etc</span></p>

<p class="wb-stl-normal"><span style="color:#f10631;">Type2: tar -cvpf /usr/backup1 /home /etc</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">c-create</p>

<p class="wb-stl-normal">v-verbose  </p>

<p class="wb-stl-normal">p-maintains the same permissions of file which is created</p>

<p class="wb-stl-normal">f-to create a file<br>
/usr  is the directory were backup is saved<br>
backup1 is the name of backup file created<br>
/home &amp; /etc are the directory for which backup is created<br>
 </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To extract the content from backup<br><span style="color:#f10631;">tar -xvpf /usr/backup1</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To extract a specific file from backup<br><span style="color:#f10631;">tar -xvpf /usr/backup1 /home/haktuts.txt</span></p>

<p class="wb-stl-normal">to extract haktuts.txt file from backup1 to the directory /home/haktuts.txt</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To list the content of backup<br><span style="color:#f10631;">tar -tvf /usr/backup1 | more</span><br>
list view of files in backup useful for recovering file which name is not known</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To create a zip file</p>

<p class="wb-stl-normal"><span style="color:#f10631;">zip &lt;filename&gt; &lt;destination&gt;</span></p>

<p class="wb-stl-normal">e.g. <span style="color:#f10631;">zip hak /usr</span></p>

<p class="wb-stl-normal">hak is the filename</p>

<p class="wb-stl-normal">/usr is the directory to save the zip file</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To extract the zip file</p>

<p class="wb-stl-normal"><span style="color:#f10631;">unzip hak /etc</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To create a gzip file</p>

<p class="wb-stl-normal"><span style="color:#f10631;">gzip filename</span></p>

<p class="wb-stl-normal">e.g: <span style="color:#f10631;">gzip hak</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To extract a gzip file </p>

<p class="wb-stl-normal"><span style="color:#f10631;">gzip -d filename</span></p>

<p class="wb-stl-normal">e.g.: <span style="color:#f10631;">gzip -d hak.gz</span></p>

<p class="wb-stl-normal"> </p>
</div><div id="wb_element_instance1398" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(154);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1398");
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
					$("#wb_element_instance1398").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1396" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1399" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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