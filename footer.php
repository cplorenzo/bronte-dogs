	</main>
	<footer>
		<<div class="container">
			<div id="footer-wrapper" class="d-flex flex-column min-vh-25" style="min-height:200px;">
				<div id="footer-logo-wrapper-outer" class="d-flex justify-content-between align-items-start">
					<div id="footer-logo-wrapper">
						<div id="footer-logo">
							<a href="<?php echo get_home_url(); ?>">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="">
							</a>
						</div>
					</div>
					<div id="navigation-wrapper">
						<nav id="footer" class="menu-footer">
							<?php wp_nav_menu(
								[
									'theme_location' => 'footer-menu',
									'container' => '',
									'menu_class' => 'menu menu-footer',
									'depth' => 1,
								]
							); ?>
						</nav>
					</div>
				</div>
				<div class="copyright mt-auto text-left">
					<p class="mb-0">&copy; 2010 - <?php echo date('Y'); ?> Bronte</p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>