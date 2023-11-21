<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */
get_header(); 

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				// get_template_part( 'template-parts/content', 'page' );

				/**
                 * Comment Template
                 * 
                 * @hooked jobscout_comment
                */
                do_action( 'jobscout_after_page_content' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<style> 
.site-content{ margin:0 !important;
 } 
</style>
	<?php dynamic_sidebar( 'contact-us' ); ?>
<?php

get_footer();
// <div class="container text-center">
// <div class="p-header">
//       <p class="mb-2 fw-bold">Our Headquarters Address</p>
//       <p>60 Nguyen Van Thu, Ward Đa Kao, District 1, Ho Chi Minh City, Vietnam</p>
//    </div>
//    </div>
// <div class="container text-center bg-secondary-subtle">
//    <div class="">
//    <div class="row">
//       <div class="col-6">
//          <div class="p-text-left p-3">
//             <p class="mb-2 fw-bold">For Employers</p>
//             <p class="mb-2">Call our Sales Hotline</p>
//          </div>
//          <div class="p-text-left p-3">
//             <p class="mb-2 fw-bold">For Employees</p>
//             <p class="mb-2">Call our Support Hotline</p>
//          </div>
//          <div class="p-text-left p-3">
//             <p class="mb-2 fw-bold">Ha Noi</p>
//             <p class="mb-2">+84 983 131 351</p>
//             <p class="mb-2 p-3">Request a call from one of our  <br>  Customer Love Account Managers  <br>  We're ready to help you grow.</p>
//          </div>
//       </div>
//       <div class="col-6">
//          <div class="p-text-right p-3">
//             <p class="mb-2 fw-bold">For Jobseekers</p>
//             <p class="mb-2">Ask a question on our <a href=""><span class="text-decoration-underline text-warning fw-bold">Facebook</span></a> page<br>Read our<a href=""> <span class="text-decoration-underline text-warning fw-bold">blog posts</span></a> on interview and CV tips.</p>
//          </div>
//          <div class="p-text-right p-3">
//             <p class="mb-2 fw-bold">Call us at</p>
//             <p class="mb-2">+84 28 6681 1397</p>
//          </div>
//       </div>
//    </div>
//    </div>
 
// </div>