<?php get_header()?>
<?php 
    /*
        Template Name: HomePage
    */
?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
				<?php 
					$query = new WP_Query(
						array(
							"post_type" => "Sliders",
						)
						);
						while($query->have_posts()):
							$query->the_post();
						
				?>
					<li><?php the_post_thumbnail()?></li>
				<?php endwhile?>	
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>The White Night</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Tons of Fans</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Best DJ's Ever</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
                    <?php 
                        $query = new WP_Query
                            (array(
                                "post_type" => "post",
                                "posts_per_page" => "2"
                                )
                            );
                            if($query->have_posts()){
                                while($query->have_posts()){
                                    $query->the_post();
                                    
                               
                    ?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
                                <?php the_post_thumbnail()?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
								<div class="info"><?php the_author()?> on <?php the_date("j F Y")?> <a href="#">01 Commnets</a></div>
								<p><?php the_excerpt()?></p>
							</div>
						</div>
					</article>
					<?php 
                         }
                        }else{
                            echo "No Post";
                        }
                    ?>
					
					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
                <?php dynamic_sidebar("right-sidebar-widget")?>
					<!-- <div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo get_template_directory_uri()?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer()?>