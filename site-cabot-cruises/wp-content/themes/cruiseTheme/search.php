<?php get_header(); ?>
<h1 class="search-results-h1">Search Results</h1>
<?php while ( have_posts() ) : the_post(); ?>
  <?php the_title( '<h2 class="search-results-h2">', '</h2>'); ?>
  <?php the_excerpt('<p class="search-results-p>', '</p>'); ?>
<?php endwhile; ?>

<?php get_footer() ?>