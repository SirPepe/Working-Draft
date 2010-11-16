<!doctype html>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<?php
	if(is_single() OR is_page()){
		the_post();
		$description = trim(strip_tags(str_replace(array("\n", '[...]'), ' ', get_the_excerpt())));
		rewind_posts();
	}
	else{
		$description = 'Working Draft ist ein wöchentlicher News-Podcast für Webdesigner und Webentwickler';
	}
?>
<meta name="description" content="<?php echo $description; ?>">
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.png" type="image/png">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>">
<style>
body {
	font-family: sans-serif;
	margin: 0;
	padding: 2em 1em 2em 70px;
	color: black;
	background: white url(<?php bloginfo('template_url'); ?>/logo-working-draft.png) top left no-repeat fixed
}
#icon { position:absolute; top:16px; right:32px; border:none }
a:link { color: #850051; background: transparent; text-decoration:underline }
a:visited { color: #a35e88; background: transparent; text-decoration:underline }
a:hover { text-decoration:none }
a:active { color: #C00; background: transparent }
h1, h2, h3, h4, h5, h6 { text-align: left }
h1, h2, h3 { color: #8f098f }
	h1 a:link, h1 a:visited { color: #8f098f }
h1 { font: 170% sans-serif }
h1 a:link { text-decoration: none }
h2 { font: 140% sans-serif }
h3 { font: 120% sans-serif }
h4 { font: bold 100% sans-serif }
h5 { font: italic 100% sans-serif }
h6 { font: small-caps 100% sans-serif }
dt { font-weight: bold; margin-top:0.5em }
.meta { font-size:0.9em }
.comment { margin-left:2em }
fieldset { border:none; margin:0; padding:0 }
textarea, input[type=text] { width:100% }
#schnorren { background:#eedaee; border: 6px solid #8f098f; display:inline; display:inline-block; padding: 0 16px }
</style>
<?php wp_head(); ?>


<body>


<hgroup>
<h1><a href="<?php bloginfo(url); ?>"><?php bloginfo('name') ?></a></h1>
<h2><?php bloginfo('description') ?></h2>
</hgroup>


<a href="<?php bloginfo(url); ?>"><img id="icon" src="<?php bloginfo(template_url); ?>/icon.png" alt=""></a>


<dl>


	<?php
		$headernavi = get_posts('numberposts=2&order=DESC');
		$headernavititles = array('Vorherige Revision:', 'Neueste Revision:');
		foreach($headernavi as $post){
			setup_postdata($post);
			echo '<dt>' . array_pop($headernavititles) . '</dt>';
			echo '<dd><a href="' . get_permalink($post->ID) . '">' . get_the_title() . ' (' . get_the_time('j. F Y') . ')</a></dd>';
		}
	?>
	<dt>Abonnieren:</dt>
	<dd><a href="<?php bloginfo('rss_url'); ?>">RSS-Feed</a></dd>
	<dd><a href="http://itunes.apple.com/de/podcast/working-draft/id402204581">iTunes-Feed</a></dd>
	<dd><a href="http://twitter.com/workingdraft">Twitter</a></dd>
	<dt>Moderatoren:</dt>
	<dd>Peter Kröner (<a href="http://twitter.com/sir_pepe">@sir_pepe</a>)</dd>
	<dd>Markus Schlegel (<a href="http://twitter.com/markus_schlegel">@markus_schlegel</a>)</dd>
	<dd>Christian Schaefer (<a href="http://twitter.com/derSchepp">@derSchepp</a>)</dd>
</dl>


<div id="schnorren">
	<h3>Spenden für Soundqualität!</h3>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<p>
			Alle Spenden fließen zu 100% in die Anschaffung von besserer Aufnahme-Hardware.
		</p>
		<p>
			<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;" href="http://workingdraft.de"></a>
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="2JGKMAUWSGVSE">
			<input type="image" src="https://www.paypal.com/de_DE/DE/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
			<img alt="" border="0" src="https://www.paypal.com/de_DE/i/scr/pixel.gif" width="1" height="1">
		</p>
	</form>
</div>


<p>
	<small>
		Alle Inhalte stehen, sofern nicht anders vermerkt, unter einer <a title="Namensnennung-Weitergabe unter gleichen Bedingungen 3.0 Deutschland" href="http://creativecommons.org/licenses/by-sa/3.0/de/">CC-BY-SA-Lizenz</a>.
		Musik: <a href="http://www.jamendo.com/en/album/6746">Kursed - Abstract</a>
	</small>
</p>


<hr>
