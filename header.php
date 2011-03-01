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

<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.png" type="image/png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>">
	<?php wp_head(); ?>
</head>

<body>


<hgroup>
	<h1><a href="<?php bloginfo(url); ?>"><?php bloginfo('name') ?></a></h1>
	<h2><?php bloginfo('description') ?></h2>
</hgroup>


<a href="<?php bloginfo(url); ?>"><img id="icon" src="<?php bloginfo(template_url); ?>/icon.png" alt=""></a>


<dl id="navi">
	<?php
		$headernavi = get_posts('numberposts=2&order=DESC');
		$headernavititles = array('Vorherige Revision:', 'Neueste Revision:');
		foreach($headernavi as $post){
			setup_postdata($post);
			echo '<dt>' . array_pop($headernavititles) . '</dt>';
			echo '<dd><a href="' . get_permalink($post->ID) . '">' . get_the_title() . ' (' . get_the_time('j. F Y') . ')</a></dd>';
		}
	?>
	<dt>Versionsgeschichte:</dt>
	<dd><a href="/archiv/"><?php echo wp_count_posts('post')->publish; ?> Revisionen im Archiv</a></dd>
	<dt>Abonnieren:</dt>
	<dd><a href="<?php bloginfo('rss_url'); ?>">RSS-Feed</a></dd>
	<dd><a href="http://itunes.apple.com/de/podcast/working-draft/id402204581">iTunes-Feed</a></dd>
	<dd><a href="http://twitter.com/workingdraft">Twitter</a></dd>
	<dd><a href="/comments/feed/">Kommentarfeed</a></dd>
	<dt>Moderatoren:</dt>
	<dd>Peter Kröner (<a href="http://twitter.com/sir_pepe">@sir_pepe</a>)</dd>
	<dd>Markus Schlegel (<a href="http://twitter.com/markus_schlegel">@markus_schlegel</a>)</dd>
	<dd>Christian Schaefer (<a href="http://twitter.com/derSchepp">@derSchepp</a>)</dd>
</dl>


<div id="schnorren">
	<h2>Spenden für Soundqualität!</h2>
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


<div class="clear"></div>


