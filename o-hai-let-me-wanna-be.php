<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en" >


<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Meta psihoza : O hai let me wanna-be!" /> 
	<meta name="robots" content="index,follow,noarchive" />
<link rel="icon" href="http://trilema.com/favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="http://trilema.com/wp-content/themes/trilema/style.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="http://trilema.com/feed/atom/" />
	<link rel="alternate" type="application/rss+xml" title="Trilema RSS Feed" href="http://trilema.com/feed/" />
	<link rel="pingback" href="http://trilema.com/xmlrpc.php" />
		<title>O hai let me wanna-be! pe Trilema - Un blog de Mircea Popescu. </title>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://trilema.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://trilema.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="Polimedia " />

		<style type="text/css">
						ol.footnotes li {list-style-type:lower-roman;}
						ol.footnotes{font-size:0.8em; color:#000000;}		</style>
		
<script language="JavaScript" type="text/javascript">
if (top.location != self.location) top.location = self.location;
</script>
	
</head>
<body>
<div id="base">
	<div id="mask_head_ie"></div>
	<div id="base2">
		<div id="header">
			<div id="blogtitle"><a href="http://trilema.com">Trilema</a></div>
			<div id="subtitle">Autouniversitate privata. Cu taxa.
</div>



			<div id="menu"><ul><li class="page_item page-item-181"><a href=http://trilema.com/2013/paid-content/>Credits: <strong>10500</strong>. What's this ?</a></li><li class="menu_end"></li></ul></div>

		</div>
		<div id="mask_foot"></div>
		<div id="container">
<div id="content">	<div class="spacer"></div>		<div class="post" id="post-56831">			<h1><a href="http://trilema.com/2014/o-hai-let-me-wanna-be/" rel="bookmark" title="Permanent Link to O hai let me wanna-be!">O hai let me wanna-be!</a></h1>			<div class="date">					Miercuri, 24 Septembrie, Anul 6 d.Tr.&nbsp;|&nbsp;Autor: <a href="http://trilema.com/author/admin/" title="Posts by Mircea Popescu">Mircea Popescu</a>					|<a href="http://trilema.com/wp-admin/post.php?action=edit&amp;post=56831" title="Edit post"> &raquo Edit &laquo</a>			</div>

			<div class="entry">


<center><hr />~ * ~ <b><font color=red>NOTICE</font></b>  ~ * ~<hr /></center>
<p>You are seeing this because your blog was recently used as part of a DDOS attack against Trilema. </p>

<p>The way this works is that the attacker sends pingbacks to a long list of blogs. The blogs in question then load the indicated url to try and verify if the pingback is legitimate (ie, if the url of the pinged blog actually appears on page), resulting in massive traffic spikes for the victim. </p>

<p>This works because WordPress pingbacks are poorly implemented. A more solid implementation would verify if the pingback originates from the same IP as the site that supposedly sent it, and discard the request if there's a mismatch. The current implementation allows pingbacks to be sent by any arbitrary IP, and so allow a malicious user yet another DDOS vector.</p>

<p>Please do your part by fixing your pingbacks implementation. The easiest way would be to open the file xmlrpc.php found in the root directory of your blog installtion, and modify the part that says </p>

<blockquote><pre>
		// Let's check the remote site

		$linea = wp_remote_fopen( $pagelinkedfrom );
</pree></blockquote>
To instead say 
<blockquote><pre>
		// Let's check the remote site

// First, make sure we're not being used for DDoS!

if (gethostbyname(parse_url($pagelinkedfrom, PHP_URL_HOST))
  <> $_SERVER['REMOTE_ADDR']) 
  die ("Sorry, you will have to send this from your blog's IP.");

		$linea = wp_remote_fopen( $pagelinkedfrom );
</pre></blockquote>

<p>This checks that the IP of the domain you think you've been pinged by and the IP of the client informing you were pinged match, and dies if they don't - rendering this particular DDoS avenue inoperable while maintaining all the pingback functionality you could possibily want.</p>

<p>Thanks for being part of the solution!</p>


<center><hr />~ * ~ <b>Notice over, back to the actual article</b>  ~ * ~<hr /></center>

<p>Being as I am the realisation of their idealized image of the self as well as the icon of the father they always wanted but never had plus that beloved older brother they had a nonsexual crush on, of course I&#8217;d hear from each and every wanna-be kid on the Internet. The self-avowed hacker, the grandiose expert, the pro-professional, the many plurious things a recent birth with no power, no knowledge and no importance tends to vacuously ascribe himself. </p>
<p>Without even going into the piles and layers accumulated back while I was writing in Romanian, and without bothering to notice that <a href="http://trilema.com/2014/so-the-dollar-vigilante-scam-ring-is-going-to-jail/">Jeff Berwick</a> is still working on something better than &#8220;I just read the story I made up on your blog and it doesn&#8217;t sound as convincing as I thought it did&#8221;, let&#8217;s have some quick examples : <a href=http://trilema.com/2014/o-hai-let-me-verify-your-identity/>O hai let me verify your identity!</a> ; <a href=http://trilema.com/2012/o-hai-i-was-justing-doing-a-penetration-test-of-your-site/>O hai. I was justing doing a penetration test of your site.</a> ; <a href=http://trilema.com/2014/mircea-popescu-is-an-asshole/>MIRCEA POPESCU IS AN ASSHOLE!</a> <a href="http://trilema.com/2014/moar-haxxing-moar-haxxing-have-a-look-an-here-we-go/">etc</a> etc etc.</p>
<p>So then it comes as no surprise that :</p>
<blockquote><p><strong>kakobrekla</strong>: Pasted per request; http://dpaste.com/0DQZB8W.txt<sup><a href="#footnote_0_56831" id="identifier_0_56831" class="footnote-link footnote-identifier-link" title="
~fccccck@184.75.212.202
**** BEGIN LOGGING AT Wed Sep 24 13:54:47 2014
[13:54:47] fccccck hellllllllllo
[13:55:19] kakobrekla hi?
[13:55:29] fccccck we are reddit police
[13:55:44] kakobrekla who is we
[13:56:05] fccccck subreddit you dont know because admins keep shadowbanning us
[13:56:13] fccccck you spam reddit, this is your punishment! muahuahua
[13:56:30] kakobrekla i spam?
[13:56:45] * kakobrekla does not have a reddit handle.
[13:56:59] fccccck yes you spam
[13:56:59] fccccck http://trilema.com/2014/spamming-reddit-an-experiment/
[13:57:10] kakobrekla i am not mircea btw.
[13:57:27] fccccck oh
[13:57:33] fccccck you are Anon?
[13:57:50] kakobrekla i am http://bitcoin-otc.com/viewratingdetail.php?nick=kakobrekla
[13:58:25] fccccck our expert secret agents well versed in /b/tarding have pointed LOIC cannons filled with cumboxes and declare WAR!
[13:58:38] kakobrekla ok
[13:58:47] fccccck you are impostor and scammer, website says
[13:59:04] kakobrekla and you are doing the world a favour.
[13:59:46] fccccck yes. anyway i am watching you mitigate if you want to try
[14:00:06] kakobrekla k
**** BEGIN LOGGING AT Wed Sep 24 14:08:32 2014
[14:08:32] fccccck your nginx is still down?
[14:08:47] fccccck wai
**** BEGIN LOGGING AT Wed Sep 24 14:27:34 2014
[14:27:34] fccccck Hetzner has good DDoS protection, but we have well lubricated cumboxes that will pierce the firewall
[14:30:25] fccccck I mean, layer 4.
">i</a></sup><br />
<strong>mircea_popescu</strong>: So was BitBet actually down ?</p>
<p><strong>kakobrekla</strong>: Well BitBet was sort of down and assbot suffered the most.<br />
<strong>Apocalyptic</strong>: Hard to tell if guy was serious or trolling.<br />
<strong>kakobrekla</strong>: I dont know, I saw &#8216;low orbit ion cannons cannons&#8217; and got scared.<br />
<strong>mircea_popescu</strong>: Apocalyptic that&#8217;s the new generation. Sorta half-ass doing things and being &#8220;ironic&#8221; about them at the same time as a sort of multi-hedged insurance agaisnt the scary world. Can&#8217;t say he&#8217;s not tried. Can&#8217;t say he&#8217;s really tried, either. Can&#8217;t say he&#8217;s a faggot, not really, can&#8217;t say anything. Aderpynymous!</p>
<p><strong>kakobrekla</strong>: Imagine cannons shooting out whole cannons<br />
* kakobrekla runs in the basement to hide.</p>
<p>[after a break]</p>
<p><strong>mircea_popescu</strong>: You know your secret agent reddit/4chan guy tried to &#8220;ddos&#8221; Trilema earlier too. He&#8230; failed. &#8220;Number of simultaneously running php and cgi scripts, as well as cron jobs and shell sessions: 65724(max).&#8221; That&#8217;s not SO BAD is it ?</p></blockquote>
<p>Turns out the logs on Trilema actually had a story to tell. It goes like this : </p>
<blockquote><p>54.215.115.74 - - [24/Sep/2014:02:34:37 -0400] &#8220;GET / HTTP/1.0&#8243; 200 26649 &#8220;-&#8221; &#8220;WordPress/3.9; http://ec2-54-215-115-74.us-west-1.compute.amazonaws.com; verifying pingback from 43.254.40.25&#8243;</p></blockquote>
<p>The <a href="http://trilema.com/wp-content/uploads/2014/09/wp-reflect-listtxt.gz">complete file</a> weighs in at 25 Mb. That&#8217;s 183`902 lines worth of (served!) requests for Trilema pages, sent by various WordPress blog installations. 95`651 of them include the &#8220;verifying pingback from 43.254.40.25&#8243; line, 3`731 show a different IP<sup><a href="#footnote_1_56831" id="identifier_1_56831" class="footnote-link footnote-identifier-link" title="Specifically : 
12,&#8221;10.0.0.1&#8243;; 8,&#8221;10.0.11.193&#8243;; 11,&#8221;10.0.113.35&#8243;; 3,&#8221;10.0.1.4&#8243;; 4,&#8221;10.0.3.1&#8243;; 9,&#8221;10.10.0.113&#8243;; 2,&#8221;10.100.1.3&#8243;; 12,&#8221;10.1.0.1&#8243;; 3,&#8221;10.101.101.245&#8243;; 10,&#8221;10.105.101.162&#8243;; 12,&#8221;10.105.102.41&#8243;; 14,&#8221;10.111.204.2&#8243;; 15,&#8221;10.1.1.61&#8243;; 19,&#8221;10.142.191.108&#8243;; 11,&#8221;10.143.0.53&#8243;; 16,&#8221;10.147.146.230&#8243;; 11,&#8221;10.15.128.202&#8243;; 12,&#8221;10.156.250.9&#8243;; 14,&#8221;10.158.4.2&#8243;; 8,&#8221;10.160.234.201&#8243;; 9,&#8221;10.160.234.253&#8243;; 28,&#8221;10.16.56.199&#8243;; 10,&#8221;10.167.12.44&#8243;; 6,&#8221;10.172.74.53&#8243;; 10,&#8221;10.179.226.90&#8243;; 18,&#8221;10.183.186.158&#8243;; 19,&#8221;10.183.248.250&#8243;; 4,&#8221;10.183.248.252&#8243;; 1,&#8221;10.183.250.134&#8243;; 3,&#8221;10.183.251.1&#8243;; 11,&#8221;10.189.245.5&#8243;; 3,&#8221;10.189.246.4&#8243;; 5,&#8221;10.189.254.10&#8243;; 6,&#8221;10.189.254.5&#8243;; 16,&#8221;10.189.254.6&#8243;; 3,&#8221;10.190.254.11&#8243;; 4,&#8221;10.190.254.5&#8243;; 7,&#8221;10.190.254.7&#8243;; 10,&#8221;10.192.16.32&#8243;; 15,&#8221;10.196.113.4&#8243;; 13,&#8221;10.206.27.57&#8243;; 10,&#8221;10.21.10.9&#8243;; 5,&#8221;10.2.130.253&#8243;; 12,&#8221;10.217.161.3&#8243;; 19,&#8221;10.225.175.112&#8243;; 4,&#8221;10.2.2.6&#8243;; 10,&#8221;10.227.1.193&#8243;; 6,&#8221;10.229.75.99&#8243;; 12,&#8221;10.2.3.1&#8243;; 8,&#8221;10.231.20.96&#8243;; 22,&#8221;10.234.6.182&#8243;; 13,&#8221;10.236.168.50&#8243;; 24,&#8221;10.240.107.42&#8243;; 19,&#8221;10.245.0.1&#8243;; 18,&#8221;10.245.0.155&#8243;; 15,&#8221;10.247.6.76&#8243;; 17,&#8221;10.248.36.182&#8243;; 9,&#8221;10.250.250.1&#8243;; 7,&#8221;10.252.35.3&#8243;; 19,&#8221;10.252.67.67&#8243;; 11,&#8221;10.27.0.6&#8243;; 8,&#8221;10.28.41.106&#8243;; 17,&#8221;10.29.42.15&#8243;; 23,&#8221;10.3.1.1&#8243;; 12,&#8221;10.43.101.70&#8243;; 11,&#8221;10.43.148.58&#8243;; 15,&#8221;10.4.56.19&#8243;; 16,&#8221;10.50.101.190&#8243;; 21,&#8221;10.52.1.254&#8243;; 10,&#8221;10.70.11.13&#8243;; 8,&#8221;10.70.11.3&#8243;; 9,&#8221;10.73.131.91&#8243;; 5,&#8221;10.75.1.13&#8243;; 1,&#8221;108.162.218.89&#8243;; 1,&#8221;108.162.219.245&#8243;; 1,&#8221;108.162.237.79&#8243;; 1,&#8221;108.162.245.154&#8243;; 1,&#8221;108.162.249.215&#8243;; 9,&#8221;108.61.47.194&#8243;; 10,&#8221;10.86.7.254&#8243;; 37,&#8221;10.89.140.154&#8243;; 4,&#8221;10.9.160.24&#8243;; 2,&#8221;10.9.160.25&#8243;; 2,&#8221;10.9.160.26&#8243;; 2,&#8221;10.9.160.27&#8243;; 1,&#8221;10.9.160.29&#8243;; 1,&#8221;10.9.160.30&#8243;; 1,&#8221;10.9.160.31&#8243;; 5,&#8221;10.9.160.32&#8243;; 2,&#8221;10.9.160.33&#8243;; 15,&#8221;10.97.50.153&#8243;; 10,&#8221;12.133.118.20&#8243;; 1486,&#8221;127.0.0.1&#8243;; 6,&#8221;127.0.0.3&#8243;; 4,&#8221;140.112.202.148&#8243;; 1,&#8221;141.101.98.99&#8243;; 6,&#8221;144.76.98.212&#8243;; 18,&#8221;154.35.133.34&#8243;; 1,&#8221;162.220.112.18&#8243;; 14,&#8221;163.245.1.248&#8243;; 5,&#8221;165.137.226.135&#8243;; 10,&#8221;169.254.11.253&#8243;; 1,&#8221;172.16.0.2&#8243;; 9,&#8221;172.16.15.1&#8243;; 11,&#8221;172.16.1.80&#8243;; 42,&#8221;172.16.24.1&#8243;; 17,&#8221;172.17.0.2&#8243;; 9,&#8221;172.17.0.5&#8243;; 12,&#8221;172.17.42.1&#8243;; 5,&#8221;172.20.1.10&#8243;; 15,&#8221;172.23.4.254&#8243;; 11,&#8221;172.24.0.4&#8243;; 4,&#8221;172.31.0.170&#8243;; 3,&#8221;172.31.10.72&#8243;; 10,&#8221;172.31.13.59&#8243;; 11,&#8221;172.31.14.52&#8243;; 11,&#8221;172.31.14.75&#8243;; 13,&#8221;172.31.19.65&#8243;; 14,&#8221;172.31.20.19&#8243;; 8,&#8221;172.31.22.250&#8243;; 13,&#8221;172.31.23.169&#8243;; 11,&#8221;172.31.23.20&#8243;; 15,&#8221;172.31.25.67&#8243;; 11,&#8221;172.31.26.199&#8243;; 10,&#8221;172.31.28.196&#8243;; 15,&#8221;172.31.30.125&#8243;; 13,&#8221;172.31.37.98&#8243;; 15,&#8221;172.31.41.85&#8243;; 13,&#8221;172.31.43.254&#8243;; 16,&#8221;172.31.46.209&#8243;; 8,&#8221;172.31.47.203&#8243;; 8,&#8221;172.31.7.127&#8243;; 9,&#8221;173.208.201.141&#8243;; 10,&#8221;173.214.170.179&#8243;; 1,&#8221;173.245.48.120&#8243;; 1,&#8221;173.245.55.64&#8243;; 9,&#8221;176.9.120.132&#8243;; 40,&#8221;178.63.135.0&#8243;; 12,&#8221;181.224.154.199&#8243;; 9,&#8221;187.33.232.18&#8243;; 11,&#8221;188.132.158.129&#8243;; 16,&#8221;188.225.33.130&#8243;; 29,&#8221;192.163.204.49&#8243;; 10,&#8221;192.163.246.206&#8243;; 10,&#8221;192.168.0.1&#8243;; 8,&#8221;192.168.0.4&#8243;; 13,&#8221;192.168.0.96&#8243;; 10,&#8221;192.168.1.1&#8243;; 11,&#8221;192.168.1.100&#8243;; 5,&#8221;192.168.1.2&#8243;; 9,&#8221;192.168.1.31&#8243;; 5,&#8221;192.168.160.41&#8243;; 20,&#8221;192.168.2.102&#8243;; 7,&#8221;192.168.213.3&#8243;; 8,&#8221;192.168.4.66&#8243;; 10,&#8221;192.168.49.200&#8243;; 9,&#8221;192.168.50.254&#8243;; 6,&#8221;192.168.5.240&#8243;; 28,&#8221;192.168.57.1&#8243;; 21,&#8221;192.168.7.8&#8243;; 14,&#8221;192.168.9.4&#8243;; 17,&#8221;192.169.20.1&#8243;; 11,&#8221;192.241.202.92&#8243;; 20,&#8221;192.76.138.201&#8243;; 7,&#8221;194.5.108.254&#8243;; 6,&#8221;194.58.40.120&#8243;; 15,&#8221;194.58.61.100&#8243;; 17,&#8221;194.58.93.43&#8243;; 30,&#8221;198.1.124.229&#8243;; 15,&#8221;198.57.176.232&#8243;; 3,&#8221;199.184.149.2&#8243;; 4,&#8221;199.184.149.3&#8243;; 3,&#8221;199.184.149.4&#8243;; 5,&#8221;199.184.149.5&#8243;; 1,&#8221;199.27.133.67&#8243;; 1,&#8221;199.27.133.71&#8243;; 14,&#8221;199.59.160.140&#8243;; 15,&#8221;205.147.111.7&#8243;; 20,&#8221;207.210.203.66&#8243;; 13,&#8221;207.67.4.254&#8243;; 13,&#8221;212.25.8.164&#8243;; 8,&#8221;212.68.57.222&#8243;; 8,&#8221;216.121.53.151&#8243;; 2,&#8221;30.0.0.97&#8243;; 9,&#8221;30.176.171.13&#8243;; 4,&#8221;31.20.2.238&#8243;; 3,&#8221;46.38.178.10&#8243;; 7,&#8221;50.7.64.146&#8243;; 11,&#8221;5.172.196.65&#8243;; 11,&#8221;5.45.111.30&#8243;; 12,&#8221;5.9.211.108&#8243;; 12,&#8221;62.75.232.242&#8243;; 1,&#8221;64.22.103.188&#8243;; 13,&#8221;66.11.132.73&#8243;; 8,&#8221;69.10.51.45&#8243;; 9,&#8221;69.59.187.219&#8243;; 71,&#8221;77.232.66.255&#8243;; 18,&#8221;77.92.141.208&#8243;; 12,&#8221;81.38.109.100&#8243;; 12,&#8221;82.221.39.11&#8243;; 13,&#8221;82.94.169.36&#8243;; 11,&#8221;85.235.174.162&#8243;; 15,&#8221;91.208.40.20&#8243;; 5,&#8221;91.228.152.9&#8243;; 20,&#8221;`::ffff:43.254.40.25&#8243;
">ii</a></sup>, the rest omit the source.<sup><a href="#footnote_2_56831" id="identifier_2_56831" class="footnote-link footnote-identifier-link" title="APNIC reports  43.254.40.* owned by PEL-IN, who supposedly is &#8220;uniquely positioned to provide Spamfree&#8221;. I&#8217;ve notified them, seems somehow magically 100k+ fake pingback notifications managed to flow out of their network at the rate of >100 a second. Nothing suspicious there at all whatsoever, amirite. ">iii</a></sup> All this happened from 02:34:37 -0400 to 2:55-ish, with a few stragglers all the way to 3:00. </p>
<p>Obviously this is not what &#8220;LOIC&#8221; means. Nevertheless, it&#8217;s perhaps a usable reflected DDOS attack. All you need is a host that&#8217;ll let you do it, WordPress is dumb enough to go for it, and now that you have the list&#8230;</p>
<p>Enjoy. Or fix it, whatever, I don&#8217;t care.</p>
<p><strong>UPDATE, September 28th :</strong> Failure breeds insistence in the narcissistically wounded, so <a href="http://log.bitcoin-assets.com/?date=28-09-2014#848762">here we are again</a>, doing the same thing only bigger this time. &lt;sarcasm><font color=pink>Because that totally works, if you fail it&#8217;s not time to <a href="http://log.bitcoin-assets.com/?date=28-09-2014#848759">try a new tack</a>, it&#8217;s time to try harder. The time to try a new tack is when you succeed. </font>&lt;/sarcasm></p>
<p>The splendiferous haxxor at that difficult age doesn&#8217;t <a href="http://log.bitcoin-assets.com/?date=28-09-2014#848762">think</a> the foregoing should apply to him, of course, because he <em>thinks</em> he should get a say in what applies to him and what doesn&#8217;t, because that&#8217;s democraticfairnormalrapetriggersomgbbq or whatever<sup><a href="#footnote_3_56831" id="identifier_3_56831" class="footnote-link footnote-identifier-link" title="And then, in a stroke reminiscent of matters discussed over at Cel mai adevarat in gangsta rap, ends up being the one in need of favours. Ain&#8217;t it funny how the world teenagers dream actually works ?">iv</a></sup>, and so here we are.</p>
<p>This time there&#8217;s a grand total of 2`211`833  lines, more than ten times the size of the previous attempt. The complete list is <a href="http://trilema.com/wp-content/uploads/2014/09/wp-reflect-list-2.txt.gz">here</a>. Of some interest are the first five lines,</p>
<blockquote><p>50.62.208.39 - - [28/Sep/2014:02:35:39 -0400] &#8220;HEAD /2014/today-is-the-international-day-of-remembering-how-mirce$<br />
50.62.208.39 - - [28/Sep/2014:02:35:40 -0400] &#8220;HEAD /2013/the-greatest-smartphone-app/#comment-91767 HTTP/1.0&#8243; 40$<br />
50.62.208.39 - - [28/Sep/2014:02:50:36 -0400] &#8220;HEAD /2014/today-is-the-international-day-of-remembering-how-mirce$<br />
50.62.208.39 - - [28/Sep/2014:02:50:37 -0400] &#8220;HEAD /2013/the-greatest-smartphone-app/#comment-91767 HTTP/1.0&#8243; 40$<br />
97.88.208.209 - - [28/Sep/2014:02:51:37 -0400] &#8220;GET / HTTP/1.0&#8243; 500 - &#8220;-&#8221; &#8220;WordPress/3.0.4; http://diehoch.net&#8221;<br />
54.201.25.164 - - [28/Sep/2014:02:51:37 -0400] &#8220;GET / HTTP/1.0&#8243; 500 - &#8220;-&#8221; &#8220;WordPress/3.9.2; http://54.201.25.164;$<br />
107.170.18.6 - - [28/Sep/2014:02:51:37 -0400] &#8220;GET / HTTP/1.0&#8243; 500 - &#8220;-&#8221; &#8220;WordPress/4.0; http://authenticorepilat$</p></blockquote>
<p>Obviously 50.62.208.39 knew what was about to happen seconds before it actually did. It&#8217;s an abused GoDaddy IP (which have, of course, been notified, and which, of course, still <a href="http://trilema.com/2010/godaddy-gtfo/">suck</a>).  The list of originating IPs (appearing after the &#8220;verifying pingback from&#8221; built-in header) is significantly shorter than last time.<sup><a href="#footnote_4_56831" id="identifier_4_56831" class="footnote-link footnote-identifier-link" title="Specifically,
1 from ::ffff:142.0.44.50 ; 2 from 188.226.244.159 ; 3 from 64.79.64.162 ; 22 from 10.183.250.134 ; 32 from 192.168.160.41 ; 33 from 10.190.254.11 ; 65 from 10.231.20.96 ; 80 from 82.94.169.36 ; 108 from 10.245.0.1 ; 120 from 10.189.254.5 ; 125 from 172.17.42.1 ; 127 from 194.58.61.100 ; 132 from 10.10.0.113 ; 134 from 10.247.6.76 ; 135 from 176.9.120.132 ; 135 from 212.25.8.164 ; 137 from 172.31.14.75 ; 146 from 10.189.246.5 ; 146 from 5.172.196.65 ; 166 from 10.183.251.1 ; 227 from 10.1.1.60 ; 237 from 172.16.1.80 ; 240 from 62.75.232.242 ; 244 from 172.31.20.19 ; 245 from 207.67.4.254 ; 248 from 10.158.4.2 ; 252 from 10.111.204.2 ; 253 from 10.214.31.8 ; 261 from 10.2.3.1 ; 264 from 10.28.41.106 ; 316 from 181.224.154.199 ; 370 from 10.0.11.193 ; 509 from 10.1.0.1 ; 621 from 172.16.24.1 ; 621 from 192.168.49.200 ; 643 from 10.167.12.44 ; 980 from 10.0.3.1 ; 1454 from 192.168.4.66 ; 1498 from 82.221.39.11 ; 1743 from 207.210.203.66 ; 2125 from : ; 2207 from 10.240.107.42 ; 2897 from 205.147.111.7 ; 4158 from 194.58.93.43 ; 4397 from 10.29.42.15 ; 5080 from 77.232.66.255 ; 5892 from ::ffff:192.187.118.162 ; 24925 from 127.0.0.1 ; 397748 from 142.0.44.50 ; 706747 from 192.187.118.162.
">v</a></sup> This, coupled with the pathetic appeals to mercy proffered by the &#8220;hacker&#8221;, with the significant increase in the list of abused blogs and with the frequent repeats suggests perhaps that she&#8217;s running out of resources. Which is fine, and the first step towards embracing the slavery that&#8217;ll perhaps spit her out on the other side a complete being.</p>
<p>Good luck, Britni!</p>
<p>PS. If you don&#8217;t understand why this article figures in your pingback list, while your link isn&#8217;t in here : it&#8217;s because your blog has been abused to try and DDOS this blog, as you can verify by searching for your name in the attached gzips. Please consider hardening your WordPress installation so that this can&#8217;t be repeated in the future - as it currently stands I am immune to this because I am rich and powerful, but most bloggers out there are neither rich nor powerful and who knows how many you&#8217;ve squished so far, unknowingly ?</p>
&mdash;&mdash;&mdash;<ol class="footnotes"><li id="footnote_0_56831" class="footnote"></p>
<blockquote><p>~fccccck@184.75.212.202</p>
<p>**** BEGIN LOGGING AT Wed Sep 24 13:54:47 2014</p>
<p>[13:54:47] <strong>fccccck</strong> hellllllllllo<br />
[13:55:19] <strong>kakobrekla</strong> hi?<br />
[13:55:29] <strong>fccccck</strong> we are reddit police<br />
[13:55:44] <strong>kakobrekla</strong> who is we<br />
[13:56:05] <strong>fccccck</strong> subreddit you dont know because admins keep shadowbanning us<br />
[13:56:13] <strong>fccccck</strong> you spam reddit, this is your punishment! muahuahua<br />
[13:56:30] <strong>kakobrekla</strong> i spam?<br />
[13:56:45] * kakobrekla does not have a reddit handle.<br />
[13:56:59] <strong>fccccck</strong> yes you spam<br />
[13:56:59] <strong>fccccck</strong> http://trilema.com/2014/spamming-reddit-an-experiment/<br />
[13:57:10] <strong>kakobrekla</strong> i am not mircea btw.<br />
[13:57:27] <strong>fccccck</strong> oh<br />
[13:57:33] <strong>fccccck</strong> you are Anon?<br />
[13:57:50] <strong>kakobrekla</strong> i am http://bitcoin-otc.com/viewratingdetail.php?nick=kakobrekla<br />
[13:58:25] <strong>fccccck</strong> our expert secret agents well versed in /b/tarding have pointed LOIC cannons filled with cumboxes and declare WAR!<br />
[13:58:38] <strong>kakobrekla</strong> ok<br />
[13:58:47] <strong>fccccck</strong> you are impostor and scammer, website says<br />
[13:59:04] <strong>kakobrekla</strong> and you are doing the world a favour.<br />
[13:59:46] <strong>fccccck</strong> yes. anyway i am watching you mitigate if you want to try<br />
[14:00:06] <strong>kakobrekla</strong> k</p>
<p>**** BEGIN LOGGING AT Wed Sep 24 14:08:32 2014<br />
[14:08:32] <strong>fccccck</strong> your nginx is still down?<br />
[14:08:47] <strong>fccccck</strong> wai</p>
<p>**** BEGIN LOGGING AT Wed Sep 24 14:27:34 2014<br />
[14:27:34] <strong>fccccck</strong> Hetzner has good DDoS protection, but we have well lubricated cumboxes that will pierce the firewall<br />
[14:30:25] <strong>fccccck</strong> I mean, layer 4.</p></blockquote>
<p> [<a href="#identifier_0_56831" class="footnote-link footnote-back-link">&#8617;</a>]</li><li id="footnote_1_56831" class="footnote">Specifically : </p>
<blockquote><p>12,&#8221;10.0.0.1&#8243;; 8,&#8221;10.0.11.193&#8243;; 11,&#8221;10.0.113.35&#8243;; 3,&#8221;10.0.1.4&#8243;; 4,&#8221;10.0.3.1&#8243;; 9,&#8221;10.10.0.113&#8243;; 2,&#8221;10.100.1.3&#8243;; 12,&#8221;10.1.0.1&#8243;; 3,&#8221;10.101.101.245&#8243;; 10,&#8221;10.105.101.162&#8243;; 12,&#8221;10.105.102.41&#8243;; 14,&#8221;10.111.204.2&#8243;; 15,&#8221;10.1.1.61&#8243;; 19,&#8221;10.142.191.108&#8243;; 11,&#8221;10.143.0.53&#8243;; 16,&#8221;10.147.146.230&#8243;; 11,&#8221;10.15.128.202&#8243;; 12,&#8221;10.156.250.9&#8243;; 14,&#8221;10.158.4.2&#8243;; 8,&#8221;10.160.234.201&#8243;; 9,&#8221;10.160.234.253&#8243;; 28,&#8221;10.16.56.199&#8243;; 10,&#8221;10.167.12.44&#8243;; 6,&#8221;10.172.74.53&#8243;; 10,&#8221;10.179.226.90&#8243;; 18,&#8221;10.183.186.158&#8243;; 19,&#8221;10.183.248.250&#8243;; 4,&#8221;10.183.248.252&#8243;; 1,&#8221;10.183.250.134&#8243;; 3,&#8221;10.183.251.1&#8243;; 11,&#8221;10.189.245.5&#8243;; 3,&#8221;10.189.246.4&#8243;; 5,&#8221;10.189.254.10&#8243;; 6,&#8221;10.189.254.5&#8243;; 16,&#8221;10.189.254.6&#8243;; 3,&#8221;10.190.254.11&#8243;; 4,&#8221;10.190.254.5&#8243;; 7,&#8221;10.190.254.7&#8243;; 10,&#8221;10.192.16.32&#8243;; 15,&#8221;10.196.113.4&#8243;; 13,&#8221;10.206.27.57&#8243;; 10,&#8221;10.21.10.9&#8243;; 5,&#8221;10.2.130.253&#8243;; 12,&#8221;10.217.161.3&#8243;; 19,&#8221;10.225.175.112&#8243;; 4,&#8221;10.2.2.6&#8243;; 10,&#8221;10.227.1.193&#8243;; 6,&#8221;10.229.75.99&#8243;; 12,&#8221;10.2.3.1&#8243;; 8,&#8221;10.231.20.96&#8243;; 22,&#8221;10.234.6.182&#8243;; 13,&#8221;10.236.168.50&#8243;; 24,&#8221;10.240.107.42&#8243;; 19,&#8221;10.245.0.1&#8243;; 18,&#8221;10.245.0.155&#8243;; 15,&#8221;10.247.6.76&#8243;; 17,&#8221;10.248.36.182&#8243;; 9,&#8221;10.250.250.1&#8243;; 7,&#8221;10.252.35.3&#8243;; 19,&#8221;10.252.67.67&#8243;; 11,&#8221;10.27.0.6&#8243;; 8,&#8221;10.28.41.106&#8243;; 17,&#8221;10.29.42.15&#8243;; 23,&#8221;10.3.1.1&#8243;; 12,&#8221;10.43.101.70&#8243;; 11,&#8221;10.43.148.58&#8243;; 15,&#8221;10.4.56.19&#8243;; 16,&#8221;10.50.101.190&#8243;; 21,&#8221;10.52.1.254&#8243;; 10,&#8221;10.70.11.13&#8243;; 8,&#8221;10.70.11.3&#8243;; 9,&#8221;10.73.131.91&#8243;; 5,&#8221;10.75.1.13&#8243;; 1,&#8221;108.162.218.89&#8243;; 1,&#8221;108.162.219.245&#8243;; 1,&#8221;108.162.237.79&#8243;; 1,&#8221;108.162.245.154&#8243;; 1,&#8221;108.162.249.215&#8243;; 9,&#8221;108.61.47.194&#8243;; 10,&#8221;10.86.7.254&#8243;; 37,&#8221;10.89.140.154&#8243;; 4,&#8221;10.9.160.24&#8243;; 2,&#8221;10.9.160.25&#8243;; 2,&#8221;10.9.160.26&#8243;; 2,&#8221;10.9.160.27&#8243;; 1,&#8221;10.9.160.29&#8243;; 1,&#8221;10.9.160.30&#8243;; 1,&#8221;10.9.160.31&#8243;; 5,&#8221;10.9.160.32&#8243;; 2,&#8221;10.9.160.33&#8243;; 15,&#8221;10.97.50.153&#8243;; 10,&#8221;12.133.118.20&#8243;; 1486,&#8221;127.0.0.1&#8243;; 6,&#8221;127.0.0.3&#8243;; 4,&#8221;140.112.202.148&#8243;; 1,&#8221;141.101.98.99&#8243;; 6,&#8221;144.76.98.212&#8243;; 18,&#8221;154.35.133.34&#8243;; 1,&#8221;162.220.112.18&#8243;; 14,&#8221;163.245.1.248&#8243;; 5,&#8221;165.137.226.135&#8243;; 10,&#8221;169.254.11.253&#8243;; 1,&#8221;172.16.0.2&#8243;; 9,&#8221;172.16.15.1&#8243;; 11,&#8221;172.16.1.80&#8243;; 42,&#8221;172.16.24.1&#8243;; 17,&#8221;172.17.0.2&#8243;; 9,&#8221;172.17.0.5&#8243;; 12,&#8221;172.17.42.1&#8243;; 5,&#8221;172.20.1.10&#8243;; 15,&#8221;172.23.4.254&#8243;; 11,&#8221;172.24.0.4&#8243;; 4,&#8221;172.31.0.170&#8243;; 3,&#8221;172.31.10.72&#8243;; 10,&#8221;172.31.13.59&#8243;; 11,&#8221;172.31.14.52&#8243;; 11,&#8221;172.31.14.75&#8243;; 13,&#8221;172.31.19.65&#8243;; 14,&#8221;172.31.20.19&#8243;; 8,&#8221;172.31.22.250&#8243;; 13,&#8221;172.31.23.169&#8243;; 11,&#8221;172.31.23.20&#8243;; 15,&#8221;172.31.25.67&#8243;; 11,&#8221;172.31.26.199&#8243;; 10,&#8221;172.31.28.196&#8243;; 15,&#8221;172.31.30.125&#8243;; 13,&#8221;172.31.37.98&#8243;; 15,&#8221;172.31.41.85&#8243;; 13,&#8221;172.31.43.254&#8243;; 16,&#8221;172.31.46.209&#8243;; 8,&#8221;172.31.47.203&#8243;; 8,&#8221;172.31.7.127&#8243;; 9,&#8221;173.208.201.141&#8243;; 10,&#8221;173.214.170.179&#8243;; 1,&#8221;173.245.48.120&#8243;; 1,&#8221;173.245.55.64&#8243;; 9,&#8221;176.9.120.132&#8243;; 40,&#8221;178.63.135.0&#8243;; 12,&#8221;181.224.154.199&#8243;; 9,&#8221;187.33.232.18&#8243;; 11,&#8221;188.132.158.129&#8243;; 16,&#8221;188.225.33.130&#8243;; 29,&#8221;192.163.204.49&#8243;; 10,&#8221;192.163.246.206&#8243;; 10,&#8221;192.168.0.1&#8243;; 8,&#8221;192.168.0.4&#8243;; 13,&#8221;192.168.0.96&#8243;; 10,&#8221;192.168.1.1&#8243;; 11,&#8221;192.168.1.100&#8243;; 5,&#8221;192.168.1.2&#8243;; 9,&#8221;192.168.1.31&#8243;; 5,&#8221;192.168.160.41&#8243;; 20,&#8221;192.168.2.102&#8243;; 7,&#8221;192.168.213.3&#8243;; 8,&#8221;192.168.4.66&#8243;; 10,&#8221;192.168.49.200&#8243;; 9,&#8221;192.168.50.254&#8243;; 6,&#8221;192.168.5.240&#8243;; 28,&#8221;192.168.57.1&#8243;; 21,&#8221;192.168.7.8&#8243;; 14,&#8221;192.168.9.4&#8243;; 17,&#8221;192.169.20.1&#8243;; 11,&#8221;192.241.202.92&#8243;; 20,&#8221;192.76.138.201&#8243;; 7,&#8221;194.5.108.254&#8243;; 6,&#8221;194.58.40.120&#8243;; 15,&#8221;194.58.61.100&#8243;; 17,&#8221;194.58.93.43&#8243;; 30,&#8221;198.1.124.229&#8243;; 15,&#8221;198.57.176.232&#8243;; 3,&#8221;199.184.149.2&#8243;; 4,&#8221;199.184.149.3&#8243;; 3,&#8221;199.184.149.4&#8243;; 5,&#8221;199.184.149.5&#8243;; 1,&#8221;199.27.133.67&#8243;; 1,&#8221;199.27.133.71&#8243;; 14,&#8221;199.59.160.140&#8243;; 15,&#8221;205.147.111.7&#8243;; 20,&#8221;207.210.203.66&#8243;; 13,&#8221;207.67.4.254&#8243;; 13,&#8221;212.25.8.164&#8243;; 8,&#8221;212.68.57.222&#8243;; 8,&#8221;216.121.53.151&#8243;; 2,&#8221;30.0.0.97&#8243;; 9,&#8221;30.176.171.13&#8243;; 4,&#8221;31.20.2.238&#8243;; 3,&#8221;46.38.178.10&#8243;; 7,&#8221;50.7.64.146&#8243;; 11,&#8221;5.172.196.65&#8243;; 11,&#8221;5.45.111.30&#8243;; 12,&#8221;5.9.211.108&#8243;; 12,&#8221;62.75.232.242&#8243;; 1,&#8221;64.22.103.188&#8243;; 13,&#8221;66.11.132.73&#8243;; 8,&#8221;69.10.51.45&#8243;; 9,&#8221;69.59.187.219&#8243;; 71,&#8221;77.232.66.255&#8243;; 18,&#8221;77.92.141.208&#8243;; 12,&#8221;81.38.109.100&#8243;; 12,&#8221;82.221.39.11&#8243;; 13,&#8221;82.94.169.36&#8243;; 11,&#8221;85.235.174.162&#8243;; 15,&#8221;91.208.40.20&#8243;; 5,&#8221;91.228.152.9&#8243;; 20,&#8221;"::ffff:43.254.40.25&#8243;</p></blockquote>
<p> [<a href="#identifier_1_56831" class="footnote-link footnote-back-link">&#8617;</a>]</li><li id="footnote_2_56831" class="footnote">APNIC reports  43.254.40.* owned by PEL-IN, who supposedly is &#8220;uniquely positioned to provide Spamfree&#8221;. I&#8217;ve notified them, seems somehow magically 100k+ fake pingback notifications managed to flow out of their network at the rate of >100 a second. Nothing suspicious there at all whatsoever, amirite.  [<a href="#identifier_2_56831" class="footnote-link footnote-back-link">&#8617;</a>]</li><li id="footnote_3_56831" class="footnote">And then, in a stroke reminiscent of matters discussed over at <a href=http://trilema.com/2011/cel-mai-adevarat-in-gangsta-rap/>Cel mai adevarat in gangsta rap</a>, ends up being the one in need of favours. Ain&#8217;t it funny how the world teenagers dream actually works ? [<a href="#identifier_3_56831" class="footnote-link footnote-back-link">&#8617;</a>]</li><li id="footnote_4_56831" class="footnote">Specifically,</p>
<blockquote><p>1 from ::ffff:142.0.44.50 ; 2 from 188.226.244.159 ; 3 from 64.79.64.162 ; 22 from 10.183.250.134 ; 32 from 192.168.160.41 ; 33 from 10.190.254.11 ; 65 from 10.231.20.96 ; 80 from 82.94.169.36 ; 108 from 10.245.0.1 ; 120 from 10.189.254.5 ; 125 from 172.17.42.1 ; 127 from 194.58.61.100 ; 132 from 10.10.0.113 ; 134 from 10.247.6.76 ; 135 from 176.9.120.132 ; 135 from 212.25.8.164 ; 137 from 172.31.14.75 ; 146 from 10.189.246.5 ; 146 from 5.172.196.65 ; 166 from 10.183.251.1 ; 227 from 10.1.1.60 ; 237 from 172.16.1.80 ; 240 from 62.75.232.242 ; 244 from 172.31.20.19 ; 245 from 207.67.4.254 ; 248 from 10.158.4.2 ; 252 from 10.111.204.2 ; 253 from 10.214.31.8 ; 261 from 10.2.3.1 ; 264 from 10.28.41.106 ; 316 from 181.224.154.199 ; 370 from 10.0.11.193 ; 509 from 10.1.0.1 ; 621 from 172.16.24.1 ; 621 from 192.168.49.200 ; 643 from 10.167.12.44 ; 980 from 10.0.3.1 ; 1454 from 192.168.4.66 ; 1498 from 82.221.39.11 ; 1743 from 207.210.203.66 ; 2125 from : ; 2207 from 10.240.107.42 ; 2897 from 205.147.111.7 ; 4158 from 194.58.93.43 ; 4397 from 10.29.42.15 ; 5080 from 77.232.66.255 ; 5892 from ::ffff:192.187.118.162 ; 24925 from 127.0.0.1 ; 397748 from 142.0.44.50 ; 706747 from 192.187.118.162.</p></blockquote>
<p> [<a href="#identifier_4_56831" class="footnote-link footnote-back-link">&#8617;</a>]</li></ol><div class="clear"></div>							</div>			<div class="info">				<span class="category">Rubrica: <a href="http://trilema.com/category/meta-psihoza/" title="View all posts in Meta psihoza" rel="category tag">Meta psihoza</a></span>			</div>			<div class="info_bot"></div>		</div>		<div id="postmetadata">			Puteti urmari raspunsurile prin fluxul <a href='http://trilema.com/2014/o-hai-let-me-wanna-be/feed/'>RSS 2.0</a>. 									Puteti <a href="#respond">lasa un comentariu</a> ori trimite un <a href="http://trilema.com/2014/o-hai-let-me-wanna-be/trackback/" rel="trackback">trackback</a> de pe blogul propriu.			(<a href="http://trilema.com/wp-admin/post.php?action=edit&amp;post=56831" title="Edit post">Edit this entry</a>)		</div>	
<!-- You can start editing here. -->
		<p class="commenttitle"><a name="comments"></a>3 Responses</p>
		
		<ol class="commentlist">
									<li id="comment-108112" class="commentbody"><div class="commenthead"><img alt='jurov`s avatar' src='http://www.explo.yt/avatar.png' class='avatar avatar-32 photo' height='32' width='32' />								<div class="commentcount">1</div>
								<span class="authorlink"><a href='http://www.explo.yt/' class='url'>jurov</a><img src="http://trilema.com/wp-content/themes/trilema/images/insigna-tech.png" class="insigna" alt="insigna de tehnolog" height=10 width=24 /></span>&nbsp;								<span class=""><a href="http://trilema.com/wp-admin/comment.php?action=editcomment&amp;c=108112" title="Edit comment">&raquo Edit &laquo</a></span>
													<br />
								<a class="commentlink" href="#comment-108112" title="">Joi, 25 Septembrie 2014</a>
							</div>
						<p>Most of them look like private IP addresses from AWS. Just forward whole mess to their abuse dept,  other ISPs too if you can identify.</p>
<p>I got some annoying &#8220;fix it or we&#8217;ll shut it down&#8221; requests from AWS just because I ran shell service on it and some derp allegedy used it to probe some tight-assed ssh server. AWS even relayed how intense flood it was, like, 5 login attempts in 20 minutes.</p>
						</li>

										<li id="comment-108113" class="adminbody"><div class="adminhead"><img alt='Mircea Popescu`s avatar' src='http://trilema.com/avatar.png' class='avatar avatar-32 photo' height='32' width='32' />								<div class="commentcount">2</div>
								<span class="authorlink">Mircea Popescu</span>&nbsp;								<span class=""><a href="http://trilema.com/wp-admin/comment.php?action=editcomment&amp;c=108113" title="Edit comment">&raquo Edit &laquo</a></span>
													<br />
								<a class="commentlink" href="#comment-108113" title="">Joi, 25 Septembrie 2014</a>
							</div>
						<p>Yeah, which is why I&#8217;ve not written to Amazon. What are the people in question to do, comment out the pingback code ? Not desirable.</p>
						</li>

										<li id="comment-108254" class="adminbody"><div class="adminhead"><img alt='Mircea Popescu`s avatar' src='http://trilema.com/avatar.png' class='avatar avatar-32 photo' height='32' width='32' />								<div class="commentcount">3</div>
								<span class="authorlink">Mircea Popescu</span>&nbsp;								<span class=""><a href="http://trilema.com/wp-admin/comment.php?action=editcomment&amp;c=108254" title="Edit comment">&raquo Edit &laquo</a></span>
													<br />
								<a class="commentlink" href="#comment-108254" title="">Duminica, 28 Septembrie 2014</a>
							</div>
						<p>And updated.</p>
						</li>

						</ol>



	<ol class="commentlist">
	</ol>


		<strong id="respond">If you would like to leave a comment, please <a href=http://trilema.com/2014/o-hai-let-me-wanna-be/#comments>click here</a>.</strong>
		
<!--<p><small><strong>XHTML:</strong> You can use these tags:&nbsp;&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </small></p>-->


			<div class="navigation">				<div class="alignleft">&laquo; <a href="http://trilema.com/2014/shots-from-a-voyage/">Shots from a voyage</a></div>				<div class="alignright"><a href="http://trilema.com/2014/the-hour-of-reckoning/">The Hour Of Reckoning</a> &raquo;</div>		</div></div><div id="sidebar">
	<div id="sidebar_top"></div>
	<div id="sidebar1">
		<ul>
			

<ul>
			<h5>Recent Comments</h5>
      <ul>
      	<li><a href=http://trilema.com/2014/o-hai-let-me-wanna-be/#comment-108254 >Mircea Popescu</a> And updated.</li>
	<li><a href=http://trilema.com/2014/today-is-the-international-day-of-remembering-how-mircea-popescu-is-better-than-me-and-related-observances/#comment-108226 >Mircea Popescu</a> @Melon Busk Well at least it was negative. @jurov Not everything is made...</li>
	<li><a href=http://trilema.com/2014/today-is-the-international-day-of-remembering-how-mircea-popescu-is-better-than-me-and-related-observances/#comment-108220 >jurov</a> Not impressed. There seems to be a point buried deeply somewhere, but it&#8217;s...</li>
	<li><a href=http://trilema.com/2014/today-is-the-international-day-of-remembering-how-mircea-popescu-is-better-than-me-and-related-observances/#comment-108196 >Melon Busk</a> An error in the PayPal payment system in July 2013 accidentally debited $92...</li>
	<li><a href=http://trilema.com/2014/a-putea-putere/#comment-108193 >Mircea Popescu</a> O yeah my bad.</li>
	<li><a href=http://trilema.com/2014/a-putea-putere/#comment-108192 >Stanislav Datskovskiy</a> iii. ц</li>
	<li><a href=http://trilema.com/2014/so-the-dollar-vigilante-scam-ring-is-going-to-jail/#comment-108123 >Mircea Popescu</a> Your name is listed on the dollar vigilante about page. Its...</li>
	<li><a href=http://trilema.com/2014/so-the-dollar-vigilante-scam-ring-is-going-to-jail/#comment-108121 >Justin</a> While I appreciate everybody&#8217;s pursuit of truth, it is all too common on...</li>
	<li><a href=http://trilema.com/2014/o-hai-let-me-wanna-be/#comment-108113 >Mircea Popescu</a> Yeah, which is why I&#8217;ve not written to Amazon. What are the people...</li>
	<li><a href=http://trilema.com/2014/o-hai-let-me-wanna-be/#comment-108112 >jurov</a> Most of them look like private IP addresses from AWS. Just forward whole mess to...</li>
	<li><a href=http://trilema.com/2014/shots-from-a-voyage/#comment-108101 >Mircea Popescu</a> Nah that was solid blue.</li>
	<li><a href=http://trilema.com/2014/shots-from-a-voyage/#comment-108100 >Stanislav Datskovskiy</a> Hofstadter&#8217;s &#8216;Metamagical Themas&#8217; ! (Right...</li>
	<li><a href=http://trilema.com/2013/why-i-suspect-schneier-is-an-us-agent/#comment-108090 >Mircea Popescu</a> XTS should only ever be used on a physical device. Quite. The dangers...</li>
	<li><a href=http://trilema.com/2014/bitbet-april-2014-statement/#comment-108089 >Mircea Popescu</a> No biggy.</li>
	<li><a href=http://trilema.com/2013/why-i-suspect-schneier-is-an-us-agent/#comment-108063 >Hitler's Hairdresser</a> GPG to encrypt files is the only correct way. Any filesystem/files...</li>
	<li><a href=http://trilema.com/2014/bitbet-april-2014-statement/#comment-108058 >fiftystorms</a> Ah I see. I had read it all, but the [of BitBet] was nowhere present I...</li>
	<li><a href=http://trilema.com/2014/bitbet-april-2014-statement/#comment-108044 >Mircea Popescu</a> @fiftystorms The 30% shares held by people on MPEx (ie, the &#8220;MPEx...</li>
	<li><a href=http://trilema.com/2014/bitbet-april-2014-statement/#comment-108040 >fiftystorms</a> &#8220;Because MPEx shareholders were paid 3.68215306 BTC instead of the...</li>
	<li><a href=http://trilema.com/2014/so-the-dollar-vigilante-scam-ring-is-going-to-jail/#comment-108004 >Anon</a> Sooo, MP writes notes to Jeff&#8217;s story and Jeff complains MP came up with a...</li>
	<li><a href=http://trilema.com/2014/the-irc-world-is-a-big-but-very-flat-place/#comment-107995 >Mircea Popescu</a> To have the actual gribble join a channel you have to ask nano to add...</li>
	<li><a href=http://trilema.com/2014/the-irc-world-is-a-big-but-very-flat-place/#comment-107994 >thestringpuller</a> I guess because gribble is open source it&#8217;s pretty easy to launch...</li>
	<li><a href=http://trilema.com/2014/so-the-dollar-vigilante-scam-ring-is-going-to-jail/#comment-107977 >Mircea Popescu</a> Sure. Who am I talking to ? Or fail that, anything substantive ? Not...</li>
      </ul>
   

				
<br />

</ul><li class="pagenav"><h5>Pages</h5><ul><li class="page_item page-item-34333"><a href="http://trilema.com/contact-pgp/" title="Contact : PGP">Contact : PGP</a></li>
<li class="page_item page-item-181"><a href="http://trilema.com/copyright-notice/" title="Copyright Notice">Copyright Notice</a></li>
<li class="page_item page-item-220"><a href="http://trilema.com/i-wrote-a-book/" title="I wrote a book&#8230;">I wrote a book&#8230;</a></li>
<li class="page_item page-item-1934"><a href="http://trilema.com/prin-media/" title="Prin media">Prin media</a></li>
</ul></li>
<h5>Other places :</h5>      
<ul><b>
<li>#bitcoin-assets on <a href="http://webchat.freenode.net?channels=bitcoin-assets" rel="nofollow">freenode</a></li>
<li><a href=http://trilema.com/2013/trilema-the-rift-guild/>Trilema</a>, the largest Rift guild.</li>
<li>Bitcoin's premier <a href=http://trilema.com/2013/bitcoins-eve-corporation/>EVE corporation</a></li>
</b></ul>
<br />
		<li>
			<h5>Archives</h5>
			<form action="http://trilema.com/wp-content/themes/trilema/9f4f885ea8d04da7f01904abf7a4df75.php" method=GET ><select name="url" onChange='document.location.href=this.options[this.selectedIndex].value;'><option value=''> Pick a month</option><option value='http://trilema.com/2014/09'/> September 2014 &nbsp;(38)</option><option value='http://trilema.com/2014/08'/> August 2014 &nbsp;(33)</option><option value='http://trilema.com/2014/07'/> July 2014 &nbsp;(39)</option><option value='http://trilema.com/2014/06'/> June 2014 &nbsp;(40)</option><option value='http://trilema.com/2014/05'/> May 2014 &nbsp;(39)</option><option value='http://trilema.com/2014/04'/> April 2014 &nbsp;(45)</option><option value='http://trilema.com/2014/03'/> March 2014 &nbsp;(43)</option><option value='http://trilema.com/2014/02'/> February 2014 &nbsp;(34)</option><option value='http://trilema.com/2014/01'/> January 2014 &nbsp;(55)</option><option value='http://trilema.com/2013/12'/> December 2013 &nbsp;(35)</option><option value='http://trilema.com/2013/11'/> November 2013 &nbsp;(56)</option><option value='http://trilema.com/2013/10'/> October 2013 &nbsp;(51)</option><option value='http://trilema.com/2013/09'/> September 2013 &nbsp;(39)</option><option value='http://trilema.com/2013/08'/> August 2013 &nbsp;(28)</option><option value='http://trilema.com/2013/07'/> July 2013 &nbsp;(36)</option><option value='http://trilema.com/2013/06'/> June 2013 &nbsp;(34)</option><option value='http://trilema.com/2013/05'/> May 2013 &nbsp;(33)</option><option value='http://trilema.com/2013/04'/> April 2013 &nbsp;(34)</option><option value='http://trilema.com/2013/03'/> March 2013 &nbsp;(38)</option><option value='http://trilema.com/2013/02'/> February 2013 &nbsp;(53)</option><option value='http://trilema.com/2013/01'/> January 2013 &nbsp;(54)</option><option value='http://trilema.com/2012/12'/> December 2012 &nbsp;(50)</option><option value='http://trilema.com/2012/11'/> November 2012 &nbsp;(53)</option><option value='http://trilema.com/2012/10'/> October 2012 &nbsp;(50)</option><option value='http://trilema.com/2012/09'/> September 2012 &nbsp;(65)</option><option value='http://trilema.com/2012/08'/> August 2012 &nbsp;(80)</option><option value='http://trilema.com/2012/07'/> July 2012 &nbsp;(150)</option><option value='http://trilema.com/2012/06'/> June 2012 &nbsp;(77)</option><option value='http://trilema.com/2012/05'/> May 2012 &nbsp;(104)</option><option value='http://trilema.com/2012/04'/> April 2012 &nbsp;(83)</option><option value='http://trilema.com/2012/03'/> March 2012 &nbsp;(109)</option><option value='http://trilema.com/2012/02'/> February 2012 &nbsp;(124)</option><option value='http://trilema.com/2012/01'/> January 2012 &nbsp;(147)</option><option value='http://trilema.com/2011/12'/> December 2011 &nbsp;(119)</option><option value='http://trilema.com/2011/11'/> November 2011 &nbsp;(130)</option><option value='http://trilema.com/2011/10'/> October 2011 &nbsp;(102)</option><option value='http://trilema.com/2011/09'/> September 2011 &nbsp;(1708)</option><option value='http://trilema.com/2011/08'/> August 2011 &nbsp;(116)</option><option value='http://trilema.com/2011/07'/> July 2011 &nbsp;(164)</option><option value='http://trilema.com/2011/06'/> June 2011 &nbsp;(139)</option><option value='http://trilema.com/2011/05'/> May 2011 &nbsp;(112)</option><option value='http://trilema.com/2011/04'/> April 2011 &nbsp;(114)</option><option value='http://trilema.com/2011/03'/> March 2011 &nbsp;(138)</option><option value='http://trilema.com/2011/02'/> February 2011 &nbsp;(104)</option><option value='http://trilema.com/2011/01'/> January 2011 &nbsp;(99)</option><option value='http://trilema.com/2010/12'/> December 2010 &nbsp;(103)</option><option value='http://trilema.com/2010/11'/> November 2010 &nbsp;(98)</option><option value='http://trilema.com/2010/10'/> October 2010 &nbsp;(93)</option><option value='http://trilema.com/2010/09'/> September 2010 &nbsp;(104)</option><option value='http://trilema.com/2010/08'/> August 2010 &nbsp;(101)</option><option value='http://trilema.com/2010/07'/> July 2010 &nbsp;(107)</option><option value='http://trilema.com/2010/06'/> June 2010 &nbsp;(111)</option><option value='http://trilema.com/2010/05'/> May 2010 &nbsp;(113)</option><option value='http://trilema.com/2010/04'/> April 2010 &nbsp;(145)</option><option value='http://trilema.com/2010/03'/> March 2010 &nbsp;(89)</option><option value='http://trilema.com/2010/02'/> February 2010 &nbsp;(67)</option><option value='http://trilema.com/2010/01'/> January 2010 &nbsp;(66)</option><option value='http://trilema.com/2009/12'/> December 2009 &nbsp;(41)</option><option value='http://trilema.com/2009/11'/> November 2009 &nbsp;(51)</option><option value='http://trilema.com/2009/10'/> October 2009 &nbsp;(59)</option><option value='http://trilema.com/2009/09'/> September 2009 &nbsp;(64)</option><option value='http://trilema.com/2009/08'/> August 2009 &nbsp;(52)</option><option value='http://trilema.com/2009/07'/> July 2009 &nbsp;(45)</option><option value='http://trilema.com/2009/06'/> June 2009 &nbsp;(43)</option><option value='http://trilema.com/2009/05'/> May 2009 &nbsp;(62)</option><option value='http://trilema.com/2009/04'/> April 2009 &nbsp;(57)</option><option value='http://trilema.com/2009/03'/> March 2009 &nbsp;(59)</option><option value='http://trilema.com/2009/02'/> February 2009 &nbsp;(55)</option><option value='http://trilema.com/2009/01'/> January 2009 &nbsp;(44)</option><option value='http://trilema.com/2008/12'/> December 2008 &nbsp;(2)</option></select><noscript><input type="submit" value="Submit"></noscript>
</form> 
		</li>

</ul>

	</div>
		<div id="sidebar2">
		<ul>
			<li><h5>Recent Articles</h5><ul>
			<li><a href='http://trilema.com/2014/three-steps-to-take-three-steps-and-other-tales-from-the-shitswamp/' title='Three steps to take three steps and other tales from the shitswamp'>Three steps to take three steps and other tales from the shitswamp</a></li>
	<li><a href='http://trilema.com/2014/today-is-the-international-day-of-remembering-how-mircea-popescu-is-better-than-me-and-related-observances/' title='Today is the International Day of Remembering How Mircea Popescu Is Better Than Me and related observances'>Today is the International Day of Remembering How Mircea Popescu Is Better Than Me and related observances</a></li>
	<li><a href='http://trilema.com/2014/a-putea-putere/' title='A putea, putere'>A putea, putere</a></li>
	<li><a href='http://trilema.com/2014/the-hour-of-reckoning/' title='The Hour Of Reckoning'>The Hour Of Reckoning</a></li>
	<li><a href='http://trilema.com/2014/o-hai-let-me-wanna-be/' title='O hai let me wanna-be!'>O hai let me wanna-be!</a></li>
	<li><a href='http://trilema.com/2014/shots-from-a-voyage/' title='Shots from a voyage'>Shots from a voyage</a></li>
	<li><a href='http://trilema.com/2014/the-womans-job/' title='The woman&#8217;s job.'>The woman&#8217;s job.</a></li>
	<li><a href='http://trilema.com/2014/sexing-in-the-us/' title='Sexing in the US'>Sexing in the US</a></li>
	<li><a href='http://trilema.com/2014/gai-luron/' title='Gai-Luron'>Gai-Luron</a></li>
	<li><a href='http://trilema.com/2014/fuck-africa-or-exploration-in-the-idiocy-of-the-crowd/' title='Fuck Africa, or Exploration in the idiocy of the crowd'>Fuck Africa, or Exploration in the idiocy of the crowd</a></li>
	<li><a href='http://trilema.com/2014/the-irc-world-is-a-big-but-very-flat-place/' title='The irc world is a big but very flat place.'>The irc world is a big but very flat place.</a></li>
	<li><a href='http://trilema.com/2014/so-the-dollar-vigilante-scam-ring-is-going-to-jail/' title='So the Dollar Vigilante scam ring is going to jail.'>So the Dollar Vigilante scam ring is going to jail.</a></li>
	<li><a href='http://trilema.com/2014/heres-a-mystery-the-internet-may-wish-to-help-elucidating/' title='Here&#8217;s a mystery the Internet may wish to help elucidating.'>Here&#8217;s a mystery the Internet may wish to help elucidating.</a></li>
	<li><a href='http://trilema.com/2014/further-argentine-weird/' title='Further Argentine weird.'>Further Argentine weird.</a></li>
	<li><a href='http://trilema.com/2014/a-complete-theory-of-sociology/' title='A complete theory of sociology'>A complete theory of sociology</a></li>
	<li><a href='http://trilema.com/2014/the-logical-impossibility-and-the-moral-untenability-of-forgiveness/' title='The logical impossibility, and the moral untenability, of forgiveness'>The logical impossibility, and the moral untenability, of forgiveness</a></li>
	<li><a href='http://trilema.com/2014/breaks-over-back-to-the-basement/' title='Break&#8217;s over, back to the basement!'>Break&#8217;s over, back to the basement!</a></li>
	<li><a href='http://trilema.com/2014/more-visuals-from-buenos-aires/' title='More visuals from Buenos Aires'>More visuals from Buenos Aires</a></li>
	<li><a href='http://trilema.com/2014/un-prophete/' title='Un prophète'>Un prophète</a></li>
	<li><a href='http://trilema.com/2014/bulwer-lytton/' title='Bulwer-Lytton'>Bulwer-Lytton</a></li>
</ul></li>
		

	<li class="categories"><h5>Categories</h5><ul>	<li class="cat-item cat-item-26"><a href="http://trilema.com/category/3-ani-experienta/" title="View all posts filed under 3 ani experienta">3 ani experienta</a> (202)
</li>
	<li class="cat-item cat-item-29"><a href="http://trilema.com/category/actiuni-si-optiuni/" title="View all posts filed under Actiuni si Optiuni">Actiuni si Optiuni</a> (63)
</li>
	<li class="cat-item cat-item-16"><a href="http://trilema.com/category/activism/" title="View all posts filed under Activism">Activism</a> (68)
</li>
	<li class="cat-item cat-item-11"><a href="http://trilema.com/category/aicmf/" title="View all posts filed under AICMF">AICMF</a> (120)
</li>
	<li class="cat-item cat-item-31"><a href="http://trilema.com/category/bitcoin/" title="View all posts filed under Bitcoin">Bitcoin</a> (133)
</li>
	<li class="cat-item cat-item-18"><a href="http://trilema.com/category/breaking-news/" title="View all posts filed under Breaking News">Breaking News</a> (1730)
</li>
	<li class="cat-item cat-item-37"><a href="http://trilema.com/category/china-care-este/" title="View all posts filed under China care este">China care este</a> (1)
</li>
	<li class="cat-item cat-item-5"><a href="http://trilema.com/category/cocietate-si-sultura/" title="View all posts filed under Cocietate si Sultura">Cocietate si Sultura</a> (419)
</li>
	<li class="cat-item cat-item-20"><a href="http://trilema.com/category/concursuri/" title="View all posts filed under Concursuri">Concursuri</a> (39)
</li>
	<li class="cat-item cat-item-22"><a href="http://trilema.com/category/criptograme/" title="View all posts filed under Criptograme">Criptograme</a> (94)
</li>
	<li class="cat-item cat-item-23"><a href="http://trilema.com/category/cuvinte-sfiinte/" title="View all posts filed under Cuvinte Sfiinte">Cuvinte Sfiinte</a> (208)
</li>
	<li class="cat-item cat-item-17"><a href="http://trilema.com/category/evenimente/" title="View all posts filed under Evenimente">Evenimente</a> (22)
</li>
	<li class="cat-item cat-item-39"><a href="http://trilema.com/category/fderp/" title="View all posts filed under F.DERP">F.DERP</a> (4)
</li>
	<li class="cat-item cat-item-38"><a href="http://trilema.com/category/fmpif/" title="View all posts filed under F.MPIF">F.MPIF</a> (7)
</li>
	<li class="cat-item cat-item-6"><a href="http://trilema.com/category/gandesc-deci-gandesc/" title="View all posts filed under Gandesc, deci gandesc">Gandesc, deci gandesc</a> (436)
</li>
	<li class="cat-item cat-item-10"><a href="http://trilema.com/category/la-pas-prin-lume/" title="View all posts filed under La pas prin lume">La pas prin lume</a> (90)
</li>
	<li class="cat-item cat-item-28"><a href="http://trilema.com/category/lifespiel/" title="View all posts filed under Lifespiel">Lifespiel</a> (228)
</li>
	<li class="cat-item cat-item-8"><a href="http://trilema.com/category/meta-psihoza/" title="View all posts filed under Meta psihoza">Meta psihoza</a> (638)
</li>
	<li class="cat-item cat-item-32"><a href="http://trilema.com/category/mpex/" title="View all posts filed under MPEx">MPEx</a> (99)
</li>
	<li class="cat-item cat-item-21"><a href="http://trilema.com/category/oda-superbiei/" title="View all posts filed under Oda Superbiei">Oda Superbiei</a> (98)
</li>
	<li class="cat-item cat-item-4"><a href="http://trilema.com/category/politica-si-prostie/" title="View all posts filed under Politica si Prostie">Politica si Prostie</a> (189)
</li>
	<li class="cat-item cat-item-25"><a href="http://trilema.com/category/prz-arhscrt/" title="View all posts filed under Prz arhscrt">Prz arhscrt</a> (390)
</li>
	<li class="cat-item cat-item-9"><a href="http://trilema.com/category/rautati-si-mizerii/" title="View all posts filed under Rautati si Mizerii">Rautati si Mizerii</a> (158)
</li>
	<li class="cat-item cat-item-33"><a href="http://trilema.com/category/rota/" title="View all posts filed under Rota">Rota</a> (4)
</li>
	<li class="cat-item cat-item-36"><a href="http://trilema.com/category/sbbet/" title="View all posts filed under S.BBET">S.BBET</a> (35)
</li>
	<li class="cat-item cat-item-34"><a href="http://trilema.com/category/smg/" title="View all posts filed under S.MG">S.MG</a> (27)
</li>
	<li class="cat-item cat-item-35"><a href="http://trilema.com/category/snsa/" title="View all posts filed under S.NSA">S.NSA</a> (18)
</li>
	<li class="cat-item cat-item-40"><a href="http://trilema.com/category/swol/" title="View all posts filed under S.WOL">S.WOL</a> (4)
</li>
	<li class="cat-item cat-item-14"><a href="http://trilema.com/category/sua-care-este/" title="View all posts filed under SUA care este">SUA care este</a> (117)
</li>
	<li class="cat-item cat-item-3"><a href="http://trilema.com/category/trilema-presei/" title="View all posts filed under Trilema Presei">Trilema Presei</a> (120)
</li>
	<li class="cat-item cat-item-7"><a href="http://trilema.com/category/trilematograf/" title="View all posts filed under Trilematograf">Trilematograf</a> (302)
</li>
	<li class="cat-item cat-item-19"><a href="http://trilema.com/category/trilenciclopedia/" title="View all posts filed under Trilenciclopedia">Trilenciclopedia</a> (139)
</li>
	<li class="cat-item cat-item-15"><a href="http://trilema.com/category/trilterviuri/" title="View all posts filed under Trilterviuri">Trilterviuri</a> (91)
</li>
	<li class="cat-item cat-item-30"><a href="http://trilema.com/category/trolloludens/" title="View all posts filed under Trolloludens">Trolloludens</a> (77)
</li>
	<li class="cat-item cat-item-1"><a href="http://trilema.com/category/zsilnic/" title="View all posts filed under Zsilnic">Zsilnic</a> (462)
</li>
</ul></li>



							</ul>
	</div>

	<div id="sidebar_bot">
</div>

<div id="banners">

</div>

</div>

		</div>		
<div id="footer">			
<a href="http://trilema.com/feed/" title="RSS Feed"><img src="http://trilema.com/wp-content/themes/trilema/images/rss.jpg" alt="Subscribe RSS" class="rss"/>
</a>		
Copyright &copy; 2008 - 
2014 for all text and images.			
<br /> 
Trilema is a <a href="http://polimedia.us/">Polimedia</a> property. 


</div>	
</div>
</div>

	<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-ecqMWUFhJx-Bc"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-ecqMWUFhJx-Bc.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->	
</body></html>