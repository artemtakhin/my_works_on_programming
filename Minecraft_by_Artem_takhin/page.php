<?php get_header(); ?>
            <div id="main-content">
                
                <?php get_sidebar();?>   

                <h2 class="page-title">Страница : <?php the_title(); ?></h2>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- post -->
                
                <div class="post-main">
                    <h1><?php the_title();?><span>(<?php the_time('j.m.Y'); ?>)</span></h1>
                    <div class="post">
                        <?php the_content();?>
                    </div>
                </div>
                
                <?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <?php endif; ?>
                
                
            </div>
         
<?php get_footer(); ?>