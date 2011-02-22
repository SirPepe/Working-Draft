<?php // Template Name: Archiv
get_header(); ?>


<div class="postcontainer">


<h2>Alle Revisionen</h2>

<dl>

<?php
	$posts = get_posts('numberposts=-1&offset=0');
	foreach($posts as $post):
?>
	<dt><?php the_time('d. F Y') ?></dt>
	<dd><a href="<?php the_permalink() ?>"><?php the_title() ?></a></dd>
<?php
	endforeach;
?>


</dl>

</div>


<?php get_footer(); ?>
