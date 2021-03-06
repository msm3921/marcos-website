 <?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<?php wp_footer(); ?>
<!-- SIGN UP SECTION -->

		<section id="signup" data-type="background" data-speed="4">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<!--Offset works here to center content. Always
						have a total of 12. In this case we only want 6 columns and by having two columns of 3 on each side this will center those two colunns of 6 -->
						
						<h2>Are you ready <strong>for the journey</strong>?</h2>
						<p><a class="btn btn-lg btn-block btn-success" href="#" data-toggle="modal" data-target="#myModal">Yes. Sign me up!</a> </p>
					</div> <!-- end col -->
				</div>
			</div>
		</section>	

		<!-- FOOTER -->

		<footer>
			<div class="container">
				<div class="col-sm-3">
					<p>
						<!-- <a href="/">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress">
						</a>  -->
					</p>
				</div> <!-- end col -->
				<div class="col-sm-6">
					<nav>
					<ul class="list-unstyled list-inline">
						<li><a href="">Home</a></li>
						<!-- <li><a href="">Blog</a></li> -->
						<li><a href="">Resources</a></li>
						<!-- <li><a href="">Contact</a></li> -->
						<li class="signup-link clickable"><a data-toggle="modal" data-target="#myModal">Sign up now</a></li>
					</ul>
				</nav>
				</div> <!-- end col -->
				<div class="col-sm-3">
					<p class="pull-right">&copy; 2018 Marcos Hernandez</p>
				</div> <!-- end col -->
			</div>
		</footer>

		<!-- MODAL -->

		<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
				</div><!-- modal-header -->
				
				<div class="modal-body">
					<script async id="_ck_351674" src="https://forms.convertkit.com/351674?v=6"></script>
				</div><!-- modal-body -->
				
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->

<!-- Took this portion from Brad's static site -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/matchheight.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>
    <script type="<?php bloginfo('template_directory')?>/text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="<?php bloginfo('template_directory')?>/text/javascript">try{Typekit.load();}catch(e){}</script>
<!-- 
</body>
</html> -->

