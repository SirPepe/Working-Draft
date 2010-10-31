<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die(); ?>
<?php if(post_password_required()){ echo '<p>Dieser Beitrag ist passwortgeschützt.</p>'; return; } ?>



<div id="kommentare">
<h3>Kommentare</h3>


<?php if($comments): ?>
	<?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
		<div class="navigation">
			<div class="nav-next"><?php next_comments_link('<span class="meta-nav">&rarr;</span> Neuere Kommentare'); ?></div>
			<div class="nav-previous"><?php previous_comments_link('Ältere Kommentare <span class="meta-nav">&larr;</span>'); ?></div>
		</div>
	<?php endif; ?>
	<?php wp_list_comments(array('callback' => 'theme_comment')); ?>
	<?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
		<div class="navigation">
			<div class="nav-next"><?php next_comments_link('<span class="meta-nav">&rarr;</span> Neuere Kommentare'); ?></div>
			<div class="nav-previous"><?php previous_comments_link('Ältere Kommentare <span class="meta-nav">&larr;</span>'); ?></div>
		</div>
	<?php endif; ?>
<?php else : ?>
	<p>Noch keine Kommentare oder Backlinks.</p>
<?php endif; ?>



<p class="center"><?php comments_rss_link('RSS-Feed zu diesem Beitrag'); ?></p>



<?php if(comments_open()): ?>
	<fieldset id="kommentarformular">
		<?php comment_form(); ?>
	</fieldset>
<?php endif; ?>



<?php if(!comments_open()){ echo '<p>Kommentare sind für diesen Beitrag geschlossen.</p>'; } ?>



</div>
