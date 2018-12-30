<?php
/*
	Project:  Lotus Elan Registry

	Purpose:  Single Page template.  Based on page from Twenty_Sixteen Theme 

	File:  $HeadURL$

	Author: $Author$

	Last Change Date: $LastChangedDate$

	Revision: $Rev$

*/

 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

//  Add my custom fields from Meta Box and put them after the main posting


 	echo 'Year: '; rwmb_meta( 'car-year' ); echo '</br>';
 	echo 'Year: '; rwmb_the_value( 'car-year' ); echo '</br>';
 	echo 'Year: '; rwmb_get_value( 'car-year' ); echo '</br>';
	echo '</br>';

	echo 'Model:'; rwmb_meta( 'car-model' ); echo '</br>';
	echo 'Model:'; rwmb_the_value( 'car-model' ); echo '</br>';
	echo 'Model:'; rwmb_get_value( 'car-model' ); echo '</br>';
	echo '</br>';

	echo 'Picture: ';rwmb_meta( 'car-picture' ); echo '</br>';
	echo 'Picture: ';rwmb_the_value( 'car-picture' ); echo '</br>';
	echo 'Picture: ';rwmb_get_value( 'car-picture' ); echo '</br>';
	echo '</br>';

// echo '<tr><td>Purchase Date</td><td>';rwmb_the_value( 'car-purchase_date' ); echo '</td></tr>';
// echo '<tr><td>Description</td><td>';rwmb_the_value( 'car-description' ); echo '</td></tr>';
// echo '</table>'
// 



$fields = rwmb_get_object_fields('post');
echo '<pre>';
print_r($fields);
echo '</pre>';



// End
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
