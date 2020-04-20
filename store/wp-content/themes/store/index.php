<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php the_title( '<h1>', '</h1>'); ?>
  <?php the_content(); ?>
<?php endwhile; ?>

<h1>Welcome to my store!</h1>

<?php get_footer() ?>