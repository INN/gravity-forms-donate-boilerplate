<?php
/**
 * The template used for displaying content in the "Clean Page" template.
 * 
 * @link http://jira.inn.org/browse/RNS-71
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	
	<?php do_action('largo_before_page_header'); ?>
	
	<header class="entry-header">
		<h1 class="entry-titlei text-align-center"><?php the_title(); ?></h1>
		<?php edit_post_link(__('Edit This Page', 'largo'), '<h5 class="byline"><span class="edit-link">', '</span></h5>'); ?>
	</header><!-- .entry-header -->
	
	<?php do_action('largo_after_page_header'); ?>
	
	<section class="entry-content">
		
		<?php do_action('largo_before_page_content'); ?>
		
		<?php the_content(); ?>
		
		<?php do_action('largo_after_page_content'); ?>
		
	</section><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
