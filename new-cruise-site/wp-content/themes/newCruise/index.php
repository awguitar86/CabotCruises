<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php the_title( '<h1>', '</h1>'); ?>
  <?php the_content(); ?>
<?php endwhile; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cruiseShip1" class="d-block w-100" alt="Cruise Ship">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cruiseShip2" class="d-block w-100" alt="Cruise Ship">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cruiseShip3" class="d-block w-100" alt="Cruise Ship">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cruiseShip4" class="d-block w-100" alt="Cruise Ship">
    </div>
  </div>
</div>



<?php get_footer() ?>