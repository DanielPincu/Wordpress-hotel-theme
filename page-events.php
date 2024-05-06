<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        
        <div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            All the events take place in the lobby and our visitors have access free of charge.
        </div>
        <div class="col-12 pt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date and time</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $eventLoop = new WP_Query(array(
                        "post_type" => "event",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($eventLoop->have_posts()): ?>
                        <?php while($eventLoop->have_posts()): $eventLoop->the_post() ?>
                            <tr>
                                <td><?php echo get_field("date_and_time") ?></td>
                                <td><?php the_title() ?></td>
                            </tr>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>