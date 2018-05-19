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

<div class="events">
<!--<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">-->
<h1>Sign Up for Updates from The Lab</h1>

<form action="https://brizofalltrades.us18.list-manage.com/subscribe/post?u=e04195f323346e4c0f2b4791a&amp;id=748982ef44" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<p><input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your Email Address" required></p>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e04195f323346e4c0f2b4791a_748982ef44" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>



<?php get_footer(); ?>
