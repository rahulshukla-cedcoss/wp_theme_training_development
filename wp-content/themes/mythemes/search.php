<?php
/**
 * My themes
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 */

/**
 * Including css and bootstrap files in header
 */
get_header();
?>

<!-- Page Content -->
<div class="container">
	<div class="row">
		<!-- Blog Entries Column -->
		<div class="col-md-8">
			<h1 class="my-4">Page Heading
				<small>Secondary Text</small>
			</h1>

			<?php
			/**
			 * Implementing conditions for post
			 */

			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					?>
				<!-- Blog Post -->
				<div class="card mb-4">
					<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
					<div class="card-body">
						<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="card-text"><?php the_content(); ?></p>
						<a href="#" class="btn btn-primary">Read More &rarr;</a>
					</div>
					<div class="card-footer text-muted">
						Posted on <?php the_date(); ?>
						<a href="#"><?php the_author(); ?></a>
					</div>
				</div>
					<?php
				}
			}
			?>
			<!-- Pagination -->
			<ul class="pagination justify-content-center mb-4">
				<li class="page-item">
					<a class="page-link" href="#">&larr; Older</a>
				</li>
				<li class="page-item disabled">
					<a class="page-link" href="#">Newer &rarr;</a>
				</li>
			</ul>
		</div>
		<!-- Sidebar Widgets Column -->
		<?php
		get_sidebar();
		?>
		<!-- /.row -->
	</div>
<!-- /.container -->

<?php
get_footer();
