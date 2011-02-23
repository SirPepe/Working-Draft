<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die(); ?>
<?php if(post_password_required()){ echo '<p>Dieser Beitrag ist passwortgeschützt.</p>'; return; } ?>



<div id="comments">
<h3>Kommentare</h3>


<?php if($comments): ?>
	<?php wp_list_comments(array('callback' => 'theme_comment')); ?>
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
