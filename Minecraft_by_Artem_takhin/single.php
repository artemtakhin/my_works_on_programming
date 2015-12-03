<?php get_header(); ?>
            <div id="main-content">
                
                <?php get_sidebar();?>   

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- post -->
                
                <div class="post-main">
                    <h1><?php the_title();?><span>(<?php the_time('j.m.Y'); ?>)</span></h1>
                    <div class="post">
                        <?php the_post_thumbnail('full');?>
                        <?php the_content();?>
                        <p><?php the_tags(); ?></p>
                    </div>
                </div>
                
                <?php comments_template(); ?>

                <?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <?php endif; ?>
                
                
            </div>
         
<?php get_footer(); ?>