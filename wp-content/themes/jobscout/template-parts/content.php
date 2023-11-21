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
}

.p-content-blog p a {
    font-weight: bold;
    color: rgb(0, 0, 0);
    font-size:16px
}

.p-box-bottom {
    margin-bottom: 20px
}

.p-content-blog {
    line-height: 20px;
    font-size: 15px
}

.p-read-more {
    color: #f0a165
}
.p-center-blog{
    text-align:center;
    padding-bottom:20px
}
.site-content{
    margin:0 !important;
}
.p-blog-background{
    margin-bottom:50px;
}
</style>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/Blog">
    <?php
setup_postdata($post);
$thumbnail = get_the_post_thumbnail();
$title = get_the_title();
$permalink = get_permalink();
$posts = get_posts(array(
    'numberposts'      => 8
));
?>
</article><!-- #post-<?php the_ID(); ?> -->
<div class="p-blog-background">
<div class="p-center-blog">
    <h1>NEWEST BLOG ENTRIES</h1>
</div>
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
                <div class="thumbnail-image p-title-blog ">
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
</div>
</div>
