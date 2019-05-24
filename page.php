<?php 
/*
Template Name: Podstrona
*/
get_header(); ?>
    <header class="header header--hidden">
        <?php echo get_template_part('partials/header') ?>
    </header>
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <section class="other-page">
                <header>
                    <h1 class="other-page__h1"><?php the_title(); ?></h1>
                </header>
                <div class="container py-5">
                    <?php the_content(); ?>	
                </div>
            </section>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>