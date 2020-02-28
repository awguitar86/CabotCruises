<?php get_header(); ?>
<div class="search-results">
  <h1 class="search-results-h1">Search Results</h1>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_title( '<h2 class="search-results-h2">', '</h2>'); ?>
    <?php the_excerpt(); ?>
  <?php endwhile; ?>
</div>

<?php get_footer() ?>