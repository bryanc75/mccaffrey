<?php
/*
 Template Name: Recent Sales Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								<header class="article-header">

									<h1 class="page-title">Recent Sales</h1>

								</header>

							<?php
							
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$temp = $wp_query;
								$wp_query= null;
								$wp_query = new WP_Query('cat=48&posts_per_page=10&paged=' . $paged);

?>
							
							<?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">
								<?php the_post_thumbnail( 'medium' ); ?>
								<?php 
									$price = get_post_meta( get_the_ID(), 'Price', true );
									$location = get_post_meta( get_the_ID(), 'Location', true );
									$mlsnum = get_post_meta( get_the_ID(), 'MLS Number', true );
								?>
								
									<div class="overview">
										<h1 class="h2 entry-title"><!-- <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"> --><?php the_title(); ?><!-- </a> --><br><span class="location"><?php echo $location; ?></span></h1>
									
									</div>

								</header>

<!--
								<section class="entry-content cf">
									<?php //the_content(); ?>
								</section>
-->
							</article>

							<?php endwhile; ?> 

							<?php bones_page_navi(); ?>
							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							<?php // $wp_query = null; $wp_query = $temp; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
