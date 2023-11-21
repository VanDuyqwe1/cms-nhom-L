<style>
.thumbnail-image {
    width: 50%;
    padding-bottom: 20px
}

.p-title-blog {
    float: left;
    display: inline;
    float: left;
    margin-right: 1.5em;
    margin-top: 0;
}

.p-body-blog {
    display: flex;
}

.p-box-blog {
    background-color: #fff;
    width: 100%;
    height: 100%;
    padding: 20px;
    text-align: initial;
}

.p-content-blog p a {
    font-weight: bold;
    color: #000000;
    font-size: 15px

}

.p-box-bottom {
    margin-top: 20px
}

.p-content-blog {
    line-height: 20px;
    font-size: 15px
}

.p-read-more {
    color: #f0a165
}

.p-center-blog {
    text-align: center;
    padding-bottom: 20px
}
#blog-section{
    background-color: #f2f2f2 !important;
    padding-top:20px !important;
    padding-bottom:50px !important;
}
.article-section{
    margin:0 !important;
}
</style>
<?php
/**
 * Blog Section
 * 
 * @package JobScout
 */

$blog_heading = get_theme_mod( 'blog_section_title', __( 'NEWEST BLOG ENTRIES', 'jobscout' ) );
$sub_title    = get_theme_mod( 'blog_section_subtitle', __( 'We will help you find it. We are your first step to becoming everything you want to be.', 'jobscout' ) );
$blog         = get_option( 'page_for_posts' );
$label        = get_theme_mod( 'blog_view_all', __( 'See More Posts', 'jobscout' ) );
$hide_author  = get_theme_mod( 'ed_post_author', false );
$hide_date    = get_theme_mod( 'ed_post_date', false );
$ed_blog      = get_theme_mod( 'ed_blog', true );

$args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => true
);

$qry = new WP_Query( $args );

if( $ed_blog && ( $blog_heading || $sub_title || $qry->have_posts() ) ){ ?>
<section id="blog-section" class="article-section">
    <div class="container">
        <?php 
            if( $blog_heading ) echo '<h2 class="section-title">' . esc_html( $blog_heading ) . '</h2>';
            // if( $sub_title ) echo '<div class="section-desc">' . wpautop( wp_kses_post( $sub_title ) ) . '</div>'; 
        ?>
        <?php 
        setup_postdata($post);
$thumbnail = get_the_post_thumbnail();
$title = get_the_title();
$permalink = get_permalink();
$posts = get_posts(array(
    'numberposts'      => 4
));
?>
        </article><!-- #post-<?php the_ID(); ?> -->
        <div class="row">
            <?php
    foreach ($posts as $post) {
        setup_postdata($post);
        $thumbnail = get_the_post_thumbnail();
        $title = get_the_title();
        $permalink = get_permalink();
        $content = get_the_content();
        ?>
            <div class="col-6 p-box-bottom">
                <div class="p-box-blog">
                    <div class="thumbnail-container">
                        <div class="thumbnail-image p-title-blog">
                            <?php echo '<a href="' . $permalink . '">' . $thumbnail . '</a>';?></div>

                        <div class="p-content-blog">
                            <p> <?php echo '<a href="' . $permalink . '">' . $title . '</a>'; ?></p>
                            <p><?php echo wp_trim_words($content,15,''); ?></p>
                        </div>
                        <a href="<?php echo $permalink; ?>" class="p-read-more">Read more</a>
                    </div>
                </div>
            </div>

            <?php
    }
    wp_reset_postdata();
    ?>
        </div><!-- .article-wrap -->

       

        <?php } ?>
    </div>
</section>
<?php 