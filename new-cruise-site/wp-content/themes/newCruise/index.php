<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php the_title( '<h1>', '</h1>'); ?>
  <?php the_content(); ?>
<?php endwhile; ?>

<div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner w-100">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cruiseShip1.jpg" class="d-block w-100" alt="Cruise Ship">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cruiseShip2.jpg" class="d-block w-100" alt="Cruise Ship">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cruiseShip3.jpg" class="d-block w-100" alt="Cruise Ship">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cruiseShip4.jpg" class="d-block w-100" alt="Cruise Ship">
    </div>
  </div>
</div>

<div class="container-xl">
  <h1>Welcome to Cabot Cruises Bootstrap website!</h1>
  <p>
    We have built this website using Bootstrap which has turned out very well. Bootstrap has many elements and components
    that are very useful for many things on a website. We will list a few things that we use on this website that we really like
    from Bootstrap.
  </p>
  <h2>Bootstrap Elements</h2>
  <ul class="list-group">
    <li class="list-group-item">Carousel</li>
    <li class="list-group-item">Navbar</li>
    <li class="list-group-item">Cards</li>
    <li class="list-group-item">Forms</li>
    <li class="list-group-item">List Group</li>
    <li class="list-group-item">Helper classes for row, column, margin, padding, flexbox, and sizing.</li>
  </ul>
</div>

<?php get_footer() ?>