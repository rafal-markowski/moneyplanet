<?php
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <article class="other-page">
        <header class="other-page__header">
            <h1><?php the_title(); ?></h1>
        </header>
        <div class="container">
            <p><?php the_content(); ?></p>
        </div>
    </article>
<?php endwhile;  ?>	
<?php get_footer(); ?>