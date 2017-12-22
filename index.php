<?php get_header(); ?>

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
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                    <p>Categories: <?php the_category( ', ' ); ?></p>
                                    <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
                                    <p><?php the_content(); ?></p>
                                </article>
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