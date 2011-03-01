<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="postcontainer" id="post-<?php the_ID(); ?>">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<p class="commenthead">
		<?php the_time('j. F Y'); ?> | <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare'); ?>
	</p>
	<div class="postcontent">
		<?php the_content(); ?>
	</div>
	<?php comments_template(); ?>
</div>


<?php endwhile; ?>


<?php else: ?>


<div class="postcontainer">
	<h2>Nichts gefunden</h2>
	<p>
		Es konnten keine der Anfrage entsprechenden Beiträge oder Seiten gefunden werden.
	</p>
</div>


<?php endif; ?>


<?php if($wp_query->max_num_pages > 1 ): ?>
<p class="nav">
	<span class="nav-prev"><?php next_posts_link('Ältere Revisionen  &rarr;'); ?></span>
	<span class="nav-next"><?php previous_posts_link('&larr; Neuere Revisionen'); ?></span>
	<span class="clear"></span>
</p>
<?php endif; ?>


<?php get_footer(); ?>
