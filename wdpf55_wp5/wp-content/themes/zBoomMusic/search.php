<?php get_header() ?>



<!--------------Content--------------->
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block03">
            <div class="col-3-3">
                <div class="wrap-col">
                    Search Page
                    <?php
                        $s = $_GET["s"];
                        global $wp_query;
                        $total_results = $wp_query->found_posts;
                        echo "<h1>Total $total_results found with <b>$s</b> keyword</h1>"
                    ?>
                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                    ?>
                            <article>
                                <?php the_post_thumbnail() ?>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                <div class="info"><?php the_author() ?> on <?php the_date("j F Y") ?><a href="#">01 Commnets</a></div>
                                <p><?php the_excerpt() ?></p>
                            </article>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
            </div>

            <?php //get_sidebar()
            ?>

        </div>
    </div>
</section>
<!--------------Footer--------------->
<?php get_footer() ?>