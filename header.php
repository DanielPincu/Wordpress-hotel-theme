<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head() ?>
</head>
<body <?php body_class()?>>
    <header>
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" width="45" height="36" class="d-inline-block align-text-top">
                    <?php bloginfo("name") ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- do not delete this code -->
    <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <?php wp_nav_menu(array(
                        "theme_location" => "main-menu"
                    )) ?>
                   
     </div> -->
                      
                      <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-4 text-success" href="<?php echo get_permalink(get_page_by_path('frontpage')); ?>">Frontpage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 text-success" href="<?php echo get_permalink(get_page_by_path('events')); ?>">Events</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-4 text-success" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Rooms
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <?php 
                        $myCPT = new WP_Query(array(
                            "post_type" => "room",
                            "posts_per_page" => -1
                        ));

                        if ($myCPT->have_posts()) :
                            while ($myCPT->have_posts()) : $myCPT->the_post(); ?>
                                <li>
                                    <a class="dropdown-item text-success" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                                
                            <?php endwhile;
                                        endif;
                                wp_reset_postdata(); 
                            ?>

                    </ul>
                </li>
            </ul>
        </div>
 
                <form class="d-flex navbar-form navbar-right">
                    <?php get_search_form() ?>
                </form>

         </div>
                
                
            </div>
        </nav>
    </header>

    <main>