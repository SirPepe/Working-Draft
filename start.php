<?php // Template Name: Start ?>


<?php get_header(); ?>


<div class="postcontainer" id="post-<?php the_ID(); ?>">
	<h2>Zusammenfassung</h2>
	<p>
		<strong>Working Draft</strong> ist ein News-Podcast für Webentwickler. Jede Woche Lorem ipsum dolor sit amet, consectetur
		adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
		exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</p>


	<h2>Versionsgeschichte</h2>
	<dl id="revisions">
		<?php
			$revisions = get_posts('numberposts=-1');
			foreach($revisions as $post){
				setup_postdata($post);
				echo '<dt><a href="' . get_permalink($post->ID) . '">' . get_the_title() . '</a></dt><dd>';
				the_tags('');
				echo ' (' . get_the_time('j. F Y') . ')</dd>';
			}
		?>
	</dl>


	<!--<h2 id="guests">Gäste</h2>
	<ul>
		<li><a href="#">Gernot Gastmeier</a> (<a href="#">WD1</a>, <a href="#">WD7</a>)</li>
		<li><a href="#">Gerda von Gasthuber</a> (<a href="#">WD6</a>)</li>
	</ul>-->


	<h2>Kontakt</h2>
	<p>
		<a href="#">arbeitsgruppe@working-draft.de</a>
	</div>


<?php get_footer(); ?>
