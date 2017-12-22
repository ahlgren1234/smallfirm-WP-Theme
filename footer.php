	<footer>
        <div class="container">
            <div class="row">
                <div class="copyright col-sm-7 col-4">
		            <p>Copyright</p>
                </div><!-- .copyright -->
                <nav class="footer-menu col-sm-5 col-8 text-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
                </nav><!-- .footer-menu -->
            </div><!-- .row -->
        </div><!-- .container -->
	</footer>

	<?php wp_footer(); ?>
	
</body>
</html>