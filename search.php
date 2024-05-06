<?php get_header(); ?>

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Search Results</h1>
            <?php if ( have_posts() ) : ?>
                <ul>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>No results found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
