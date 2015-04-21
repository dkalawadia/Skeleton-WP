<?php get_header(); ?>

			<div id="content" class="container">

				<div id="inner-content" class="wrap cf row">

						<main id="main" class="col-sm-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                                                        <?php printf( __( 'Posted', 'skeletontheme' ).' %1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'by', 'skeletontheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'skeletontheme' ), __( '<span>One</span> Comment', 'skeletontheme' ), __( '<span>%</span> Comments', 'skeletontheme' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'skeletontheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'skeletontheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

									<?php skeleton_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'skeletontheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'skeletontheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'skeletontheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?> -->
							<?php get_template_part( 'loop' ); ?>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>