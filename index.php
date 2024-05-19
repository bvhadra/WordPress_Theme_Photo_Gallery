<?php get_header(); ?>
<article class="post">
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part('content', get_post_format()); ?>
	<?php endwhile; ?>

<?php else : ?>
	<?php echo wpautop('Sorry, there are no posts'); ?>
<?php endif; ?>
</article>
<?php get_footer(); ?>