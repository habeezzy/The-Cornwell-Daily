<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset=" <?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <h1>
          <a href="<?php echo home_url('/');?>"><?php bloginfo('name'); ?></a>
          <small><?php bloginfo('description'); ?></small>
        </h1>
      <div class="h_right">
        <form method='get' action="">
          <input type="text" placeholder='Search...'>
        </form>
      </div>
      </div>
    </header>
    <nav class='nav main-nav'>
      <div class="container">
        <?php
          $args = array(
            'theme_location'  => 'primary'
          );
         ?>
       <?php wp_nav_menu($args); ?>
     </div>
    </nav>
    <div class="container content">
      <div class="main block">
        <?php if(have_posts()) : ?>
          <?php while(have_posts() ) : the_post(); ?>
      <article class="post">
        <h2><?php the_title(); ?></h2>
        <p class="meta">
          Posted at
          <?php the_time('F j, Y g:i a') ?>
            by
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));gfa ?>">
            <?php the_author(); ?>
            </a></p>
        <?php the_content(); ?>
        <a class="button" href="#">Read More</a>
      </article>
      <?php endwhile; ?>
    <?php else : ?>
      <?php  echo wpautop("Sorry, No post were found"); ?>
    <?php endif; ?>
      </div>
      <div class="side">
        <div class="block">
          <h3>Health Tips</h3>
          <p>mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat</p>
          <a class="button">More</a>
        </div>
      </div>
    </div>
    <footer class="main-footer">
      <div class="container">
        <div class="f_left">
          <p> &copy; 2020 - Advanced WP Theme </p>
        </div>
        <div class="f_right">
          <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#">Blog</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>

  </body>
</html>
