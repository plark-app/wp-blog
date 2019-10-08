<?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    $author_id=$post->post_author;
    $tags = wp_get_post_tags($post->ID);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
        <?php echo($post->post_content); ?>
    </div><!-- .entry-content -->

    <div class="content-single__info">
        <?php if ($tags): ?>
            <div class="content-single__tags">
                <?php
                    foreach ($tags as $tag) {
                        $tag_link = get_tag_link($tag->term_id);
                ?>
                    <a class='content-single__tag' href='<?php echo($tag_link) ?>'><?php echo($tag->name) ?></a>
                    <?php }
                ?>
            </div>
        <?php endif;?>

        <div class="content-single__author">
            <div class="content-single__author-avatar">
                <?php echo get_avatar( get_the_author_meta('email'), '50' ); ?>
            </div>
            <a href="?author=<?php echo $author_id; ?>">
                <?php echo get_the_author_meta('first_name', $author_id); ?>
                <?php echo get_the_author_meta('last_name', $author_id); ?>
            </a>
        </div>
    </div>
    <div class="content-single__posts">
        <?php if ($prev_post): ?>
        <div class="content-single__post">
            <a class="content-single__post-link" href="<?php echo($prev_post->guid); ?>">
                <span class="content-single__post--next" style="background-image: url('<?php echo (get_the_post_thumbnail_url($prev_post->ID)); ?>')"></span>
                <span class="content-single__post--type">
                    Previous Post
                </span>
                <h3 class="content-single__post--title">
                    <div class="prev-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="1280.000000pt" height="640.000000pt" viewBox="0 0 1280.000000 640.000000" preserveAspectRatio="xMidYMid meet" style="&#10;    width: 20px;&#10;    height: 10px;&#10;">
                            <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                            <path d="M9280 5934 c-106 -21 -223 -80 -293 -150 -99 -97 -148 -196 -168 -336 -10 -72 -9 -97 5 -164 22 -108 75 -212 144 -282 33 -33 391 -297 851 -627 l794 -570 -5084 -5 c-4763 -5 -5087 -6 -5132 -22 -146 -52 -265 -152 -330 -275 -114 -217 -77 -472 93 -644 70 -71 126 -108 217 -142 l58 -22 5078 -5 5078 -5 -752 -615 c-414 -338 -776 -638 -804 -667 -29 -29 -68 -84 -89 -125 -112 -224 -73 -470 105 -649 104 -105 233 -159 382 -159 99 0 186 22 270 68 70 39 2847 2303 2942 2399 160 162 199 422 93 633 -46 94 -119 163 -324 311 -1086 782 -2701 1940 -2747 1970 -83 54 -166 80 -272 84 -49 2 -101 1 -115 -1z"/>
                            </g>
                        </svg>
                    </div>
                    <?php echo($prev_post->post_title); ?>
                </h3>
            </a>
        </div>
        <?php endif; ?>
        <?php if ($next_post): ?>
        <div class="content-single__post">
            <a class="content-single__post-link" href="<?php echo($next_post->guid); ?>">
                <span class="content-single__post--next" style="background-image: url('<?php echo (get_the_post_thumbnail_url($next_post->ID)); ?>')"></span>
                <span class="content-single__post--type">
                    Next Post
                </span>
                <h3 class="content-single__post--title">
                    <?php echo($next_post->post_title); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="1280.000000pt" height="640.000000pt" viewBox="0 0 1280.000000 640.000000" preserveAspectRatio="xMidYMid meet" style="&#10;    width: 20px;&#10;    height: 10px;&#10;">
                        <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                        <path d="M9280 5934 c-106 -21 -223 -80 -293 -150 -99 -97 -148 -196 -168 -336 -10 -72 -9 -97 5 -164 22 -108 75 -212 144 -282 33 -33 391 -297 851 -627 l794 -570 -5084 -5 c-4763 -5 -5087 -6 -5132 -22 -146 -52 -265 -152 -330 -275 -114 -217 -77 -472 93 -644 70 -71 126 -108 217 -142 l58 -22 5078 -5 5078 -5 -752 -615 c-414 -338 -776 -638 -804 -667 -29 -29 -68 -84 -89 -125 -112 -224 -73 -470 105 -649 104 -105 233 -159 382 -159 99 0 186 22 270 68 70 39 2847 2303 2942 2399 160 162 199 422 93 633 -46 94 -119 163 -324 311 -1086 782 -2701 1940 -2747 1970 -83 54 -166 80 -272 84 -49 2 -101 1 -115 -1z"/>
                        </g>
                    </svg>
                </h3>
            </a>
        </div>
        <?php endif;?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->