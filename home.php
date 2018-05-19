<?php
/**
 * This is an attempt at converting a static html homepage to a hybrid wordpress front page
 */

get_header();
?>

<div class="featured">
<?php
    
global $post;
$args = array( 'posts_per_page' => 1, 'key' => 'featured_post', 'value' => '1', 'compare' => '=',);

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <img src="<?php the_field('homepage_image'); ?>"/>
<?php endforeach; 
wp_reset_postdata();?>
</div>
    
<div class="featured_text">
    <?php
    
global $post;
$args = array( 'posts_per_page' => 1, 'key' => 'featured_post', 'value' => '1', 'compare' => '=',);

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <h1><?php the_field('homepage_title'); ?></h1>
    <p><?php the_field('homepage_description'); ?></p>
    <a href="<?php the_permalink();?>" title="<?php the_field('homepage_button'); ?>"><?php the_field('homepage_button') ?></a>
<?php endforeach; 
wp_reset_postdata();?>
</div>

<div class="title">
      <h1>Latest From The Lab</h1>
      </div>
    
<div class="blog_recent1">
    
    <?php
    
global $post;
$args = array( 'posts_per_page' => 1, 'offset'=> 0 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    
    <h4 class="blog_date"><?php the_time('F j Y') ?></h4>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <img src="<?php the_post_thumbnail_url(); ?>"/>
<?php endforeach; 
wp_reset_postdata();?>
</div>
    
<div class="blog_recent2">
        <?php
    
global $post;
$args = array( 'posts_per_page' => 1, 'offset'=> 1 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    
    <h4 class="blog_date"><?php the_time('F j Y') ?></h4>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <img src="<?php the_post_thumbnail_url(); ?>"/>
<?php endforeach; 
wp_reset_postdata();?>
    </div>
    
<div class="blog_recent3">
        <?php
    
global $post;
$args = array( 'posts_per_page' => 1, 'offset'=> 2 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    
    <h4 class="blog_date"><?php the_time('F j Y') ?></h4>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <img src="<?php the_post_thumbnail_url(); ?>"/>
<?php endforeach; 
wp_reset_postdata();?>
    </div>
    
<div class="blog_recent4">
        <?php
    
global $post;
$args = array( 'posts_per_page' => 1, 'offset'=> 3 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    
    <h4 class="blog_date"><?php the_time('F j Y') ?></h4>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <img src="<?php the_post_thumbnail_url(); ?>"/>
<?php endforeach; 
wp_reset_postdata();?>
        </div>

<!--<div class="events">
    <h1>Upcoming Events</h1>
    <h2>April 20, 2018</h2>
    <p><a href=>Marathon Training Fun Run</a> - Central Park, NY @ 4:00pm</p>
        <h2>April 20, 2018</h2>
    <p><a href=>Marathon Training Fun Run</a> - Central Park, NY @ 4:00pm</p>
        <h2>April 20, 2018</h2>
    <p><a href=>Marathon Training Fun Run</a> - Central Park, NY @ 4:00pm</p>
    </div>-->

<div class="contact">

</div>

<?php get_footer(); ?>
