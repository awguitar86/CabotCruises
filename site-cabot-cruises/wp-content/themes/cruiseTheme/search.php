<?php get_header(); ?>
<h1 style="width:100%;">Search Results</h1>
<?php while ( have_posts() ) : the_post(); ?>
  <?php the_title( '<h2 style="width:100%; margin:0px 0px 5px 0px;">', '</h2>'); ?>
  <?php the_excerpt(); ?>
<?php endwhile; ?>

<?php get_footer() ?>