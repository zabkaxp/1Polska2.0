<?php

get_header();
?>
<main class="blog-posts">
      <div class="blog-posts-container">
<?php 
while(have_posts()){
  the_post();?>


<div class="post-item">
    <h2 class="headline headline--medium headline--post-title">
        <a href="<?php the_permalink();?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <div class="metabox">
        <p>Posted by <?php the_author_posts_link();?> on <?php the_time('d.m.Y'); ?> in 
        <?php echo get_the_category_list(', '); ?>
    </p>
    </div>
    <div class="generic-content">
        <?php the_excerpt(); ?>
        <p>
            <a class="btn btn--blue" href="<?php the_permalink();?>">Continue reading &raquo;</a>
        </p>
    </div>


</div>

<?php
}  
echo paginate_links();
?>





</div></main>

<?php
get_footer();
?>

