<article id="post-<?php the_ID(); ?>" role="article">
    <header class="article-header row">
        <div class="small-12 columns">
            <a href="<?php the_permalink() ?>" class="colored" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('eight-columns'); ?></a>
            <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <!--<p class="byline vcard"><time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>" pubdate><?php echo get_the_time(get_option('date_format'));?></time> av <span class="author"><?php the_author_posts_link(); ?></span></p>-->
        </div>
    </header> <!-- end article header -->
    <section class="entry-content">
        <?php the_content(); ?>
    </section> <!-- end article section -->
    <footer class="article-footer">
        <?php if(!is_page()) { ?>
        <a href="" class="btn-tiny primary"><i class="icon-facebook"></i></a>
        <a href="" class="btn-tiny secondary"><i class="icon-twitter"></i></a>
        <?php } ?>
    </footer> <!-- end article footer -->
</article> <!-- end article -->
