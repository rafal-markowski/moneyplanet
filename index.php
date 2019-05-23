<?php get_header(); ?>
    <section class="other-page">
        <header class="other-page__header">
            <h1><?php single_post_title(); ?></h1>
        </header>
        <div class="container mt-4">
            <div class="row no-gutters">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="col-md-6">
                        <a href="<?php the_permalink(); ?>" class="other-page__article">
                            <p><?php echo get_the_date(); ?></p>
                            <p class="h3"><?php the_title(); ?></p>
                            <p class="mb-0">Więcej &rarr; </p>
                        </a>
                    </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="paginate">
                <?php
                    $args = [
                        'prev_text'=>'&laquo;',
                        'next_text'=>'&raquo;',
                        'type'=>'list'
                    ];
                    echo paginate_links($args);
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>