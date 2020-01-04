<?php get_header(); ?>
<div class="container">
    <p>Page.php</p>
    <?php get_sidebar(); ?>    
    <div class="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="content"><?php the_content(); ?></div>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>