<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
	<main>
		<section class="slide">
            <div class="container">
                Slide
            </div><!-- .container -->
        </section><!-- .slide -->
		<section class="services">
            <div class="container">
                Services
            </div><!-- .container -->
        </section><!-- .services -->
		<section class="middle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-3">Sidebar</aside>
                    <div class="news col-md-9">

                        <?php if( have_posts() ): ?>
                            <?php while( have_posts() ): the_post() ?>

                                <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>There's nothing yet to be shown.</p>
                        <?php endif; ?>

                    </div><!-- .news -->
                </div>
            </div><!-- .container -->
		</section><!-- .middle-area -->
		<section class="map">
            <div class="container">
                <div class="row">Map</div>
            </div><!-- .container -->
        </section><!-- .map -->
	</main>
</div><!-- .content-area -->

<?php get_footer() ?>