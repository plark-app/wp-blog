<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plark_theme
 */
?>

<?php
    function delicious_recent_posts() {
        $del_recent_posts = new WP_Query();
        $del_recent_posts->query('showposts=4');
            while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post(); ?>
                <li class="sidebar__post">
                    <a class="sidebar__post-link" href="<?php esc_url(the_permalink()); ?>">
                        <div class="sidebar__post-image" style='background-image: url("<?php echo(the_post_thumbnail_url( array(260, 315))); ?>")'></div>
                        <span class="sidebar__post-text">
                            <span class="sidebar__post-title"><?php esc_html(the_title()); ?></span>
                            <span class="sidebar__post-date"><?php echo get_the_date('M j, o') ?></span>
                        </span>
                    </a>
                </li>
            <?php endwhile;
        wp_reset_postdata();
    }
?>


<?php if (is_active_sidebar('plark-sidebar')):?>
<aside id="secondary" class="widget-area">
    <?php if ( is_active_sidebar( 'plark-sidebar' )): ?>
        <div class="sidebar plark">
            <h4 class="sidebar__title">Recent posts</h4>
            <ul class="sidebar__recent-posts">
                <?php echo delicious_recent_posts() ?>
            </ul>
            <?php dynamic_sidebar( 'plark-sidebar' ); ?>
        </div>
    <?php endif; ?>
</aside>
<?php endif; ?>
