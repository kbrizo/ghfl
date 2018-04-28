<?php
/**
 * This is an attempt at converting a static html homepage to a hybrid wordpress front page
 */

get_header();
?>

<div class="featured">
      <? php
            $featuredposts = get_posts(array(
                'numberposts'   => 1,
                'offset'        => 0,
                'meta_key'      => 'featured_post',
                'meta_value'    => 'true'
            ));
    if($featuredposts)
    {
        echo 'get_the_post_thumbnail();';
    }
    
    ?>
</div>
    
<div class="featured_text">
    
</div>
    
<div class="title">
      <h1>Latest From The Lab</h1>
      </div>
    
<div class="blog_recent1">
    <h4 class="blog_date">March 3, 2018</h4>
    <h3>Title: How to Make Less Mead Lead to More Gains</h3>
    <img src="images/vegan.png"/>
    </div>
    
<div class="blog_recent2">
    <h4 class="blog_date">March 3, 2018</h4>
    <h3>Title: How to Make Less Mead Lead to More Gains</h3>
    <img src="images/vegan.png"/>
    </div>
    
<div class="blog_recent3">
    <h4 class="blog_date">March 3, 2018</h4>
    <h3>Title: How to Make Less Mead Lead to More Gains</h3>
    <img src="images/video_thumbnail.png"/>
    </div>
    
<div class="blog_recent4">
    <h4 class="blog_date">March 3, 2018</h4>
    <h3>Title: How to Make Less Mead Lead to More Gains</h3>
    <img src="images/vegan.png"/>
        </div>
    
<div class="events">
    <h1>Upcoming Events</h1>
    <h2>April 20, 2018</h2>
    <p><a href=>Marathon Training Fun Run</a> - Central Park, NY @ 4:00pm</p>
        <h2>April 20, 2018</h2>
    <p><a href=>Marathon Training Fun Run</a> - Central Park, NY @ 4:00pm</p>
        <h2>April 20, 2018</h2>
    <p><a href=>Marathon Training Fun Run</a> - Central Park, NY @ 4:00pm</p>
    </div>

<?php
get_footer();
