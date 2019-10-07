<?php $author_id=$post->post_author; ?>
<div class="single-post__intro" style='background-image: url("<?php echo(the_post_thumbnail_url()); ?>")'>
    <div class="single-post__info">
        <ul class="single-post__tags">
            <?php
                $tags = wp_get_post_tags($post->ID);
                foreach ($tags as $tag) {
                    $tag_link = get_tag_link($tag->term_id);
            ?>
                <a class='single-post__tag' href='<?php echo($tag_link) ?>'><?php echo($tag->name) ?></a>
                <?php }
            ?>
        </ul>
        <h1 class="single-post__title">
            <?php echo get_the_title() ?>
        </h1>
        <div class="single-post__about">
            <span class="single-post__author">
                By <a href="?author=<?php echo $author_id; ?>">
                    <?php echo get_the_author_meta('first_name', $author_id); ?>
                    <?php echo get_the_author_meta('last_name', $author_id); ?>
            </a>
            </span>
            |
            <span class="single-post__date"><?php echo get_the_date('M j, o') ?></span>
        </div>
    </div>
</div>
