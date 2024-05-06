<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <?php 

            $hero_line = get_field("hero_line");
            $information = get_field("information");
            $address = get_field("address");
            $map = get_field("map");
            $google_maps_link = get_field("google_maps_link");
            $first_picture = get_field("first_picture");
            $second_picture = get_field("second_picture");
            $third_picture = get_field("third_picture");
        
        ?>
        <div id="hero" class="px-4 py-5 text-center">
    <h1 class="display-5 fw-bold">Hotel CMS</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?php echo $hero_line?></p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-9 mb-5">
        <?php echo $information?>
            <div class="container-fluid p-0 pt-3">
                <div class="row">
                    <div class="col-4 p-0">
                        <img class="img-fluid" src="<?php echo $first_picture['url']?>" alt="">
                    </div>
                    <div class="col-4 p-0">
                        <img class="img-fluid" src="<?php echo $second_picture['url']?>" alt="">
                    </div>
                    <div class="col-4 p-0">
                        <img class="img-fluid" src="<?php echo $third_picture['url']?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $map['url']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hotel CMS</h5>
                    <p class="card-text">
                    <address>
                    <?php echo $address?>
                    </address>
                    <a target="_blank" href="<?php echo $google_maps_link['url']?>" class="btn btn-primary">Get driving directions</a>
                    </p>
                </div>
                </div>
            
        </div>
    </div>
</div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>