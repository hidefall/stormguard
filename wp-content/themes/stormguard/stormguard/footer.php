<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StormGuard
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
			<div class="col-md-6">
				<p class="contact_us_title">Contact Us Today</p>
				<p class="contact_info">Need more information about our services or insurance claims? Fill out the form below and representitive will be in touch!</p>
				<form action="#" method="POST" class="form-inline">
					<div class="form-group contact_group">
						<input type="text" placeholder="Name" class="form-control" />
						<input type="phone" placeholder="Phone number" class="form-control"/>
					
					</div>
					<div class="form-group contact_group">
						<input type="text" placeholder="Zipcode" class="form-control"/>
						<input type="email" placeholder="Email" class="form-control"/>
					</div>
					<div class="form-group contact_group contact_group--detail">
					<select class="form-control contact_detail">
      					<option>What are you contacting us about?</option>
      					<option>What are you contacting us about?</option>
   					</select>
					</div>
					<div class="form-group form_message">
						<textarea placeholder="Comments" class="form-control contact_message"></textarea>
					</div>
					<button type="submit" class="btn form-submit">Submit</button>
				</form>
				
			</div>
			<div class="col-md-6">
				<p class="past_projects_title">Check Out Our Past Projects</p>
				<p class="past_projects_description">Want to see examples of our past work? Check out the gallery below to see projects we have completed in the past.</p>
				<div class="row">	
				<div class="col-md-12 no-gutters pr-0">
					<div class="past_project_image">
						<img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/past_project_img.png" alt="past project" />
					</div>
					<div class="past_project_image">
						<img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/past_project_img.png" alt="past project" />
					</div>
					<div class="past_project_image">
						<img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/past_project_img.png" alt="past project" />
					</div>
					<div class="past_project_image">
						<img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/past_project_img.png" alt="past project" />
				</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 no-gutters pr-0">
					<div class="past_project_image">
						<img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/past_project_img.png" alt="past project" />
					</div>
					<div class="past_project_image">
						<img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/past_project_img.png" alt="past project" />
					</div>
					<div class="past_project_image">
						<img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/past_project_img.png" alt="past project" />
					</div>
					<div class="past_project_image">
						<img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/past_project_img.png" alt="past project" />
				</div>
				</div>
				<a href="#" class="more_photos btn">View More Photos</a>
				</div>
			</div>
		</div>
		</div>
	</footer><!-- #colophon -->
	<div class="bottom_bar">
		<div class="container">
			<p class="copyright">Copyright 2017. Storm Guard. All Rights Reserved. Website Produced by: Inverse Paradox</p>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
