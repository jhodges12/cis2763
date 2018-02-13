<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 **/
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
</head>

<body>
 <main>
 <hr>
 <?php //https://developer.wordpress.org/reference/functions/wp_nav_menu/ ?>
 <b>Primary Menu</b>
 <?php wp_nav_menu(array('menu'=>'primary')) ?>
 <b>Secondary Menu</b>
 <?php wp_nav_menu(array('menu'=>'secondary')) ?>
 <hr>
 <?php //https://codex.wordpress.org/Sidebars ?>
 <b>Sidebar 1</b>
 <?php dynamic_sidebar( 'home_sidebar_1' ); ?>
 <br>
  <b>Sidebar 2</b>
 <?php dynamic_sidebar( 'home_sidebar_2' ); ?>
 <hr>
 <b>Start WordPress Loop</b><br>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <b>Post Title:</b><?php the_title(); ?><br>
 <?php // Display post thumbnail ?>
 <?php the_post_thumbnail(); ?><br>
<b>Post Content:</b><?php  the_content(); ?><br>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<b>End WordPress Loop</b>
 </main>
</body>
</html>