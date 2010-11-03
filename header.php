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
		$description = 'Default description';
	}
?>
<meta name="description" content="<?php echo $description; ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>">
<style>
body {
	font-family: sans-serif;
	margin: 0;
	padding: 2em 1em 2em 70px;
	color: black;
	background: white url(<?php bloginfo('template_url'); ?>/logo-working-draft.png) top left no-repeat fixed
}
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
</style>
<?php wp_head(); ?>


<hgroup>
<h1><a href="<?php bloginfo(url); ?>/"><?php bloginfo('name') ?></a></h1>
<h2><?php bloginfo('description') ?></h2>
</hgroup>


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
	<dd><a href="#itunes">iTunes-Feed</a></dd>
	<dd><a href="http://twitter.com/workingdraft">Twitter</a></dd>
	<dt>Moderatoren:</dt>
	<dd>Peter Kröner (<a href="http://twitter.com/sir_pepe">@sir_pepe</a>)</dd>
	<dd>Markus Schlegel (<a href="http://twitter.com/markus_schlegel">@markus_schlegel</a>)</dd>
	<dd>Christian Schaefer (<a href="http://twitter.com/derSchepp">@derSchepp</a>)</dd>
</dl>


<p>
	<small>Alle Inhalte stehen sofern nicht anders vermerkt unter einer CC-BY-SA-Lizenz. <a href="http://creativecommons.org/licenses/by-sa/3.0/de/">Namensnennung-Weitergabe unter gleichen Bedingungen 3.0 Deutschland</a></small>
</p>


<hr>
