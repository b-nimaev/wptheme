<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	<footer>
		<div class="container">
		  <div class="row">
		    <div class="col-md-3">
		      <h3>Some Design, Inc.</h3>
		      <p>&copy; 2020 _prepross. All rights reserverd. <br>
		      Designed by _prepross</p>
		    </div>
		    <div class="col">
		      <ul>
		        <li>alexandrbnimaev@gmail.com</li>
		        <li>+7 (914) 637 55 26</li>
		      </ul>
		    </div>
		    <div class="col">
		      <ul>
		        <li>Projects</li>
		        <li>About</li>
		        <li>Services</li>
		        <li>Career</li>
		      </ul>
		    </div>
		    <div class="col">
		      <ul>
		        <li>News</li>
		        <li>Events</li>
		        <li>Contact</li>
		        <li>Legals</li>
		      </ul>
		    </div>
		    <div class="col">
		      <ul>
		        <li>Facebook</li>
		        <li>Twitter</li>
		        <li>Instagramm</li>
		        <li>Dribbble</li>
		      </ul>
		    </div>
		  </div>
		</div>
		<div class="container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_easy' ) ); ?>">
			<?php				
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', '_easy' ), 'WordPress' );?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', '_easy' ), '_easy', '<a href="http://weblancer.net/users/_easy/">alexandr balzhinimaev</a>' );
				?>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
