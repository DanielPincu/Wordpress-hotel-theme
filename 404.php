<?php get_header(); ?>

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4">Oops! Page not found</h1>
            <p class="lead">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            <a href="<?php echo get_permalink(get_page_by_path('frontpage')) ?>" class="btn btn-primary btn-lg">Get back to Frontpage</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
