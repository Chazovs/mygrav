<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-img-box">
        <div class="hover-effect">
            <?php if(has_post_thumbnail()) : ?>
               <?php the_post_thumbnail('kosmo-page-thumbnail', array('class' => 'img-responsive')); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="blog-content">
        <h3><?php the_title(); ?></h3>
        <h4>
                <i class="fa fa-user" aria-hidden="true"></i>
                <?php echo esc_html__('By ','kosmo'); ?>
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                    <?php 
                       the_author();
                    ?>
                </a>
            <span class="meta-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comment', 'kosmo'), __('1 Comment', 'kosmo'), __('% Comments', 'kosmo') ); ?></span>
            <span class="meta-date">
               <i class="fa fa-calendar" aria-hidden="true"></i>
               <?php the_time( get_option( 'date_format' ) ); ?>
            </span> 
            <?php if (has_tag()) : ?>
                <span class="post-tags">
                    <i class="fa fa-tags"></i>
                    <?php echo esc_html__(' ', 'kosmo' ); ?><?php the_tags('&nbsp;'); ?>
                </span>         
            <?php endif; ?> 
        </h4>
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages: ', 'kosmo' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>
</div>
