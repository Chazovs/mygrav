<?php 
// To display Blog Post section on front page
?>
<?php  
$kosmo_blog_title =  get_theme_mod('kosmo_blog_title');  
$kosmo_blog_section = get_theme_mod('kosmo_blog_section_hideshow','show');

if ($kosmo_blog_section =='show') { 
?>

    <!-- Blog Section -->
    <section class="home-news">
        <div class="container">
            <div class="section-title text-center">
                <?php if($kosmo_blog_title !="")
                {?>
                <h2 class="subtitle-blog title-2"><?php echo esc_html(get_theme_mod('kosmo_blog_title')); ?></h2>
                <?php } ?>
                <div class="spacer-50"> </div>
            </div>
            <div class="row news">
                <?php 
                $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
                if ( $latest_blog_posts->have_posts() ) : 
                    while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); 
                ?>
                    <div class="col-md-4">
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="blog-img-box">
                               <a class="hover-effect" href="<?php the_permalink() ?>">
                                    <img src="<?php the_post_thumbnail_url('kosmo-blog-front-thumbnail', array('class' => 'img-responsive')); ?>" alt="Fuel" />
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="blog-content">
                            <h3><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                            <h4>
									<i class="fa fa-user" aria-hidden="true"></i>
									<?php echo esc_html__('By ','kosmo'); ?>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                        <?php 
                                           the_author(); 
                                        ?>
                                    </a>
                                <span class="meta-comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comment', 'kosmo'), __('1 Comment', 'kosmo'), __('% Comments', 'kosmo') ); ?>
                                </span>
                                <span class="meta-date">
                                   <i class="fa fa-calendar" aria-hidden="true"></i>
                                   <?php the_time( get_option( 'date_format' ) ); ?>
                                </span>   
                            </h4>
                            <?php the_excerpt();?>
                        </div>
                    </div>
                    <?php endwhile; 
                endif; ?>
            </div>
            <div class="blog-btn text-center">
                <a href="<?php echo esc_url(get_theme_mod( 'kosmo_blog_btnurl', 1 )); ?>" class="btn btn-primary" role="button"><?php echo esc_html(get_theme_mod( "kosmo_blog_btntxt")); ?></a>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
<?php } ?>