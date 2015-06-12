<?php
error_reporting(E_ALL); @ini_set('display_errors', true);
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => 'Home', 'file' => '1.php'),
		'1'	=> array('id' => '2', 'alias' => 'Free-ethical-hacking-course-online', 'file' => '2.php'),
		'2'	=> array('id' => '10', 'alias' => 'Linux', 'file' => '10.php'),
		'3'	=> array('id' => '3', 'alias' => 'Tips-and-tricks', 'file' => '3.php'),
		'4'	=> array('id' => '103', 'alias' => 'how-to-share-internet-without-wifi', 'file' => '103.php'),
		'5'	=> array('id' => '96', 'alias' => 'basic-windows-command', 'file' => '96.php'),
		'6'	=> array('id' => '95', 'alias' => 'top-20-notepad-trick', 'file' => '95.php'),
		'7'	=> array('id' => '135', 'alias' => 'Tips-and-Tricks-1', 'file' => '135.php'),
		'8'	=> array('id' => '102', 'alias' => 'list-of-top-cydia-tweaks-for-ios', 'file' => '102.php'),
		'9'	=> array('id' => '97', 'alias' => 'how-to-install-kali-linux-nethunter', 'file' => '97.php'),
		'10'	=> array('id' => '9', 'alias' => 'News-1', 'file' => '9.php'),
		'11'	=> array('id' => '5', 'alias' => 'latest-news-for-hacking', 'file' => '5.php'),
		'12'	=> array('id' => '4', 'alias' => 'download-all-hacking-tools', 'file' => '4.php'),
		'13'	=> array('id' => '6', 'alias' => 'Contact-us', 'file' => '6.php'),
		'14'	=> array('id' => '7', 'alias' => 'Introduction', 'file' => '7.php'),
		'15'	=> array('id' => '8', 'alias' => 'Hackers-Hierarchy', 'file' => '8.php'),
		'16'	=> array('id' => '47', 'alias' => 'Hackers-Keyword', 'file' => '47.php'),
		'17'	=> array('id' => '48', 'alias' => 'Types-of-virus', 'file' => '48.php'),
		'18'	=> array('id' => '49', 'alias' => 'what-are-the-different-types-of-virus', 'file' => '49.php'),
		'19'	=> array('id' => '50', 'alias' => 'HOW-TO-get-Protect-From-Virus', 'file' => '50.php'),
		'20'	=> array('id' => '51', 'alias' => 'IP-and-MAC', 'file' => '51.php'),
		'21'	=> array('id' => '52', 'alias' => 'WHAT-IS-IP-Address', 'file' => '52.php'),
		'22'	=> array('id' => '53', 'alias' => 'What-are-the-types-of-IP-Address', 'file' => '53.php'),
		'23'	=> array('id' => '54', 'alias' => 'Concept-Of-MAC-Address', 'file' => '54.php'),
		'24'	=> array('id' => '55', 'alias' => 'HOW-TO-MAC-Spoof-without-tools', 'file' => '55.php'),
		'25'	=> array('id' => '56', 'alias' => 'how-to-surf-on-web-anonymously', 'file' => '56.php'),
		'26'	=> array('id' => '57', 'alias' => 'How-to-bind-two-exe-file-in-one-another-via-command-prompt', 'file' => '57.php'),
		'27'	=> array('id' => '58', 'alias' => 'Ethical-hacking', 'file' => '58.php'),
		'28'	=> array('id' => '59', 'alias' => 'how-to-bind-one-exe-file-with-another-exe-file', 'file' => '59.php'),
		'29'	=> array('id' => '60', 'alias' => 'list-of-tools-to-detect-steganography', 'file' => '60.php'),
		'30'	=> array('id' => '61', 'alias' => 'What-is-cryptography', 'file' => '61.php'),
		'31'	=> array('id' => '62', 'alias' => 'What-are-the-types-of-Cryptography', 'file' => '62.php'),
		'32'	=> array('id' => '63', 'alias' => 'Encryption-Method', 'file' => '63.php'),
		'33'	=> array('id' => '64', 'alias' => 'One-click-to-copy-full-website', 'file' => '64.php'),
		'34'	=> array('id' => '65', 'alias' => 'how-to-send-a-spoofed-mail', 'file' => '65.php'),
		'35'	=> array('id' => '66', 'alias' => 'Tools-of-Password-Cracking', 'file' => '66.php'),
		'36'	=> array('id' => '67', 'alias' => 'HOW-TO-Bypassing-Windows-8-1-Password', 'file' => '67.php'),
		'37'	=> array('id' => '68', 'alias' => 'How-to-crack-a-zip-or-rar-password-protected-file', 'file' => '68.php'),
		'38'	=> array('id' => '69', 'alias' => 'How-to-crack-a-pdf-password-protected-file', 'file' => '69.php'),
		'39'	=> array('id' => '70', 'alias' => 'HOW-TO-HACK-FACEBOOK-ACCOUNT-VIA-PHISHING-METHOD', 'file' => '70.php'),
		'40'	=> array('id' => '71', 'alias' => 'Introduction-to-Android-architecture', 'file' => '71.php'),
		'41'	=> array('id' => '72', 'alias' => 'how-to-root-android-device-via-one-click', 'file' => '72.php'),
		'42'	=> array('id' => '73', 'alias' => 'how-to-bypass-the-screen-lock-of-android-devices', 'file' => '73.php'),
		'43'	=> array('id' => '74', 'alias' => 'how-to-perform-pentesting-via-android-device', 'file' => '74.php'),
		'44'	=> array('id' => '75', 'alias' => 'best-android-hacking-tools-for-rooted-smartphone', 'file' => '75.php'),
		'45'	=> array('id' => '76', 'alias' => 'iOS', 'file' => '76.php'),
		'46'	=> array('id' => '77', 'alias' => 'HOW-TO-Jailbreak-iOS-DEVICE', 'file' => '77.php'),
		'47'	=> array('id' => '78', 'alias' => 'list-of-tools-to-jailbreak-ios-device', 'file' => '78.php'),
		'48'	=> array('id' => '79', 'alias' => 'top-list-of-cydia-tweaks', 'file' => '79.php'),
		'49'	=> array('id' => '80', 'alias' => 'how-to-establish-ssh-connection-with-iphone', 'file' => '80.php'),
		'50'	=> array('id' => '81', 'alias' => 'How-to-setup-fully-undetectable-Remote-Keylogger', 'file' => '81.php'),
		'51'	=> array('id' => '82', 'alias' => 'meaning-of-virtual-machine', 'file' => '82.php'),
		'52'	=> array('id' => '83', 'alias' => 'advantages-of-virtual-machine', 'file' => '83.php'),
		'53'	=> array('id' => '84', 'alias' => 'how-to-setup-virtual-machine', 'file' => '84.php'),
		'54'	=> array('id' => '85', 'alias' => 'how-to-install-ubuntu-in-virtual-machine', 'file' => '85.php'),
		'55'	=> array('id' => '86', 'alias' => 'Introduction-of-backtrack', 'file' => '86.php'),
		'56'	=> array('id' => '87', 'alias' => 'top-command-of-backtrack-for-hacking', 'file' => '87.php'),
		'57'	=> array('id' => '88', 'alias' => 'top10-command-of-nmap', 'file' => '88.php'),
		'58'	=> array('id' => '89', 'alias' => 'How-to-hack-windows-7-with-metasploit', 'file' => '89.php'),
		'59'	=> array('id' => '90', 'alias' => 'Kali', 'file' => '90.php'),
		'60'	=> array('id' => '91', 'alias' => 'types-of-wifi', 'file' => '91.php'),
		'61'	=> array('id' => '92', 'alias' => 'how-to-crack-wep-protected-wifi', 'file' => '92.php'),
		'62'	=> array('id' => '93', 'alias' => 'how-to-crack-wpawpa2-protected-wifi', 'file' => '93.php'),
		'63'	=> array('id' => '94', 'alias' => 'how-to-hack-wifi-via-pyrit', 'file' => '94.php'),
		'64'	=> array('id' => '99', 'alias' => 'Tips-and-trck-2', 'file' => '99.php'),
		'65'	=> array('id' => '100', 'alias' => 'News2', 'file' => '100.php'),
		'66'	=> array('id' => '101', 'alias' => 'News3', 'file' => '101.php'),
		'67'	=> array('id' => '108', 'alias' => 'how-to-install-kali-linux-nethunter-in-android-device', 'file' => '108.php'),
		'68'	=> array('id' => '109', 'alias' => 'how-to-bypass-applocker-in-andriod', 'file' => '109.php'),
		'69'	=> array('id' => '110', 'alias' => 'multi-user-android', 'file' => '110.php'),
		'70'	=> array('id' => '111', 'alias' => 'how-to-install-android-lollipop', 'file' => '111.php'),
		'71'	=> array('id' => '112', 'alias' => 'how-to-install-windows-xp-on-android-device', 'file' => '112.php'),
		'72'	=> array('id' => '113', 'alias' => 'how-to-install-kali-linux-on-android-device', 'file' => '113.php'),
		'73'	=> array('id' => '114', 'alias' => 'how-to-change-your-caller-id', 'file' => '114.php'),
		'74'	=> array('id' => '115', 'alias' => 'Send-Mail-with-someone-else-mail-id', 'file' => '115.php'),
		'75'	=> array('id' => '116', 'alias' => 'how-to-lock-unlock-your-PC-via-usb', 'file' => '116.php'),
		'76'	=> array('id' => '117', 'alias' => 'how-to-download-entire-youtube-playlist-via-idm', 'file' => '117.php'),
		'77'	=> array('id' => '118', 'alias' => 'how-to-share-internet-without-wifi-router', 'file' => '118.php'),
		'78'	=> array('id' => '119', 'alias' => 'how-to-delete-files-permanently-from-your-pc-via-cmd', 'file' => '119.php'),
		'79'	=> array('id' => '120', 'alias' => 'CCleaner', 'file' => '120.php'),
		'80'	=> array('id' => '121', 'alias' => 'how-to-run-dual-whatsapp-on-android-without-root', 'file' => '121.php'),
		'81'	=> array('id' => '122', 'alias' => 'how-to-increase-ram-in-android-device', 'file' => '122.php'),
		'82'	=> array('id' => '123', 'alias' => 'how-to-increase-internal-storage-of-android-device', 'file' => '123.php'),
		'83'	=> array('id' => '124', 'alias' => 'Shutdown-PC-via-Phone', 'file' => '124.php'),
		'84'	=> array('id' => '125', 'alias' => 'how-to-download-torrent-files-via-IDM', 'file' => '125.php'),
		'85'	=> array('id' => '126', 'alias' => 'how-to-optimize-your-download-speed', 'file' => '126.php'),
		'86'	=> array('id' => '127', 'alias' => 'How-to-bypass-phone-sms-verfication-of-any-website', 'file' => '127.php'),
		'87'	=> array('id' => '128', 'alias' => 'TOR-not-100-untraceable', 'file' => '128.php'),
		'88'	=> array('id' => '129', 'alias' => 'Google-works-like-NSA', 'file' => '129.php'),
		'89'	=> array('id' => '130', 'alias' => 'Android-Vulnerable-by-Privelege-Escalation', 'file' => '130.php'),
		'90'	=> array('id' => '131', 'alias' => 'iOS-Vulnerability-Masque-Attack', 'file' => '131.php'),
		'91'	=> array('id' => '132', 'alias' => 'Microsoft-PAtches-19-yrar-old-Vulnerability', 'file' => '132.php'),
		'92'	=> array('id' => '133', 'alias' => 'WhatsApp-now-secured', 'file' => '133.php'),
		'93'	=> array('id' => '134', 'alias' => 'Tor-and-Mozilla-working-Together', 'file' => '134.php'),
		'94'	=> array('id' => '136', 'alias' => 'how-o-send-messages-on-facebook-when-blocked', 'file' => '136.php'),
		'95'	=> array('id' => '137', 'alias' => 'Firefox-addons-for-pentesting', 'file' => '137.php'),
		'96'	=> array('id' => '138', 'alias' => 'Important-Addons-for-Browsers', 'file' => '138.php'),
		'97'	=> array('id' => '139', 'alias' => 'how-to-use-your-pc-internet-on-your-android-device-via-usb', 'file' => '139.php'),
		'98'	=> array('id' => '140', 'alias' => 'how-to-use-your-anndroid-device-as-webcam', 'file' => '140.php'),
		'99'	=> array('id' => '141', 'alias' => 'how-to-solve-software-problem-of-usb-drive', 'file' => '141.php'),
		'100'	=> array('id' => '142', 'alias' => 'Send-Email-Without-Internet-and-Email-ID', 'file' => '142.php'),
		'101'	=> array('id' => '143', 'alias' => 'Send-Spoof-SMS', 'file' => '143.php'),
		'102'	=> array('id' => '144', 'alias' => 'Anonymous-OS', 'file' => '144.php'),
		'103'	=> array('id' => '145', 'alias' => 'How-to-hack-website-through-clickjacking', 'file' => '145.php'),
		'104'	=> array('id' => '12', 'alias' => 'Bitcoin', 'file' => '12.php'),
		'105'	=> array('id' => '13', 'alias' => 'WifiPhisher', 'file' => '13.php'),
		'106'	=> array('id' => '14', 'alias' => 'Gmail-Blocked', 'file' => '14.php'),
		'107'	=> array('id' => '17', 'alias' => 'ExCbs-Reporter', 'file' => '17.php'),
		'108'	=> array('id' => '18', 'alias' => 'Xbox-Sdk', 'file' => '18.php'),
		'109'	=> array('id' => '19', 'alias' => 'facebook-read-users-messages', 'file' => '19.php'),
		'110'	=> array('id' => '20', 'alias' => 'Fingerprint-hacked', 'file' => '20.php'),
		'111'	=> array('id' => '21', 'alias' => 'sony', 'file' => '21.php'),
		'112'	=> array('id' => '22', 'alias' => 'paypal', 'file' => '22.php'),
		'113'	=> array('id' => '23', 'alias' => 'google-microsoft', 'file' => '23.php'),
		'114'	=> array('id' => '24', 'alias' => 'Ec-council', 'file' => '24.php'),
		'115'	=> array('id' => '25', 'alias' => '32-sites', 'file' => '25.php'),
		'116'	=> array('id' => '26', 'alias' => 'gogo', 'file' => '26.php'),
		'117'	=> array('id' => '27', 'alias' => 'Twitter-9000', 'file' => '27.php'),
		'118'	=> array('id' => '28', 'alias' => 'top-2014', 'file' => '28.php'),
		'119'	=> array('id' => '45', 'alias' => 'Installation', 'file' => '45.php'),
		'120'	=> array('id' => '46', 'alias' => 'Intro-to-File-Directory', 'file' => '46.php'),
		'121'	=> array('id' => '148', 'alias' => 'Basic-Commands', 'file' => '148.php'),
		'122'	=> array('id' => '151', 'alias' => 'File-Management', 'file' => '151.php'),
		'123'	=> array('id' => '152', 'alias' => 'VIM', 'file' => '152.php'),
		'124'	=> array('id' => '153', 'alias' => 'User-Group-Management', 'file' => '153.php'),
		'125'	=> array('id' => '154', 'alias' => 'Maintenance-of-Linux-System', 'file' => '154.php'),
		'126'	=> array('id' => '155', 'alias' => 'System-Management', 'file' => '155.php'),
		'127'	=> array('id' => '156', 'alias' => 'Network-Management', 'file' => '156.php'),
		'128'	=> array('id' => '157', 'alias' => 'Server-Management', 'file' => '157.php'),
		'129'	=> array('id' => '158', 'alias' => 'Security', 'file' => '158.php'),
		'130'	=> array('id' => '159', 'alias' => 'Shell-Scripting', 'file' => '159.php'),
		'131'	=> array('id' => '29', 'alias' => 'Book', 'file' => '29.php'),
		'132'	=> array('id' => '31', 'alias' => 'Earn-Money', 'file' => '31.php'),
		'133'	=> array('id' => '11', 'alias' => 'Kali-1', 'file' => '11.php'),
		'134'	=> array('id' => '30', 'alias' => 'Windows-Tricks', 'file' => '30.php'),
		'135'	=> array('id' => '32', 'alias' => 'Trace-IP-Address-Of-Victim', 'file' => '32.php'),
		'136'	=> array('id' => '33', 'alias' => 'Create-An-Undeletable-Folder-Using-CMD', 'file' => '33.php'),
		'137'	=> array('id' => '34', 'alias' => 'Run-Multiple-Window-On-Any-Android-Device', 'file' => '34.php'),
		'138'	=> array('id' => '35', 'alias' => 'Use-Whatsapp-On-PC-And-Android-Simultaneously', 'file' => '35.php'),
		'139'	=> array('id' => '36', 'alias' => 'Kill-Wifi-Of-Entire-Network', 'file' => '36.php'),
		'140'	=> array('id' => '37', 'alias' => 'Spoof-SMS', 'file' => '37.php'),
		'141'	=> array('id' => '38', 'alias' => 'Cross-Site-Scripting', 'file' => '38.php'),
		'142'	=> array('id' => '39', 'alias' => 'Remote-Attack', 'file' => '39.php'),
		'143'	=> array('id' => '44', 'alias' => 'SQL-Injection', 'file' => '44.php'),
		'144'	=> array('id' => '160', 'alias' => 'Desktop-Phishing', 'file' => '160.php'),
		'145'	=> array('id' => '162', 'alias' => 'Earn-Bitcoin', 'file' => '162.php'),
		'146'	=> array('id' => '163', 'alias' => 'Download-apk-file-via-browser', 'file' => '163.php'),
		'147'	=> array('id' => '15', 'alias' => 'Unsend-or-edit-any-email-after-you-send-it', 'file' => '15.php'),
		'148'	=> array('id' => '16', 'alias' => 'How-to-send-and-receive-message-on-whatsapp', 'file' => '16.php'),
		'149'	=> array('id' => '40', 'alias' => 'How-To-Run-Android-Apps-in-Chrome-Browser', 'file' => '40.php'),
		'150'	=> array('id' => '48', 'alias' => 'Virus', 'file' => '48.php'),
		'151'	=> array('id' => '63', 'alias' => 'Encryption-Meathod', 'file' => '63.php'),
		'152'	=> array('id' => '11', 'alias' => 'Kali-2', 'file' => '11.php'),
		'153'	=> array('id' => '38', 'alias' => 'Cross-site-scripting', 'file' => '38.php'),
		'154'	=> array('id' => '39', 'alias' => 'Remote-attack', 'file' => '39.php'),
		'155'	=> array('id' => '35', 'alias' => 'Use-WhatsApp-on-PC-and-Android-Simultaneously', 'file' => '35.php'),
		'156'	=> array('id' => '33', 'alias' => 'Create-an-Undeletable-Folder-using-CMD', 'file' => '33.php'),
		'157'	=> array('id' => '32', 'alias' => 'Trace-IP-Address-of-Victim', 'file' => '32.php'),
		'158'	=> array('id' => '163', 'alias' => 'Download-Apk-Files-Via-Browser', 'file' => '163.php'),
		'159'	=> array('id' => '147', 'alias' => 'Run-Rooted-Android-Apps-in-PC', 'file' => '147.php'),
		'160'	=> array('id' => '154', 'alias' => 'Maintenance-of-Linux-system', 'file' => '154.php'),
		'161'	=> array('id' => '156', 'alias' => 'Network-Managemnt', 'file' => '156.php')
	);
	$forms = array(
		'6'	=> array(
			'9dfb0878' => Array( 'email' => 'haktuts@gmail.com', 'subject' => 'Inquiry from the web page', 'sentMessage' => 'Form was sent.', 'smtpEnable' => false, 'smtpHost' => null, 'smtpPort' => null, 'smtpEncryption' => null, 'smtpUsername' => null, 'smtpPassword' => null, 'fields' => array( array( 'fidx' => '0', 'name' => 'Name', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Message', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
	$langs = null;
	$def_lang = null;
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	list($page_id, $lang) = parse_uri();
	$user_key = "ZjwX4WGIcEwNb3c=";
	$user_hash = "b4e2028de67aeb447ab9ae8ff4ab012f";
	$comment_callback = "http://us.zyro.com/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	$page = isset($pages[$page_id]) ? $pages[$page_id] : null;
	if (!is_null($page)) {
		handleComments($page['id']);
		if (isset($_POST["wb_form_id"])) handleForms($page['id']);
	}
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $lang => $default) {
					$pageUri = getPageUri($page['id'], $lang);
					$out = str_replace(urlencode('{{lang_'.$lang.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_file = dirname(__FILE__).'/ga_code') && $ga_code = file_get_contents($ga_file)) {
				$ga_out = str_replace('{{ga_code}}', $ga_code, file_get_contents(dirname(__FILE__).'/ga.html'));
			}
			$out = str_replace('{{ga_code}}', $ga_out, $out);
			$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ? 'https' : 'http';
			$out = str_replace('{{base_url}}', $proto.'://'.$_SERVER['HTTP_HOST'].'/', $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>