<?php
/**
 * Template part - Projects Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kosmo
 */
    $kosmo_projects_title = get_theme_mod('kosmo-projects_title');
    $kosmo_projects_section     = get_theme_mod( 'kosmo_projects_section_hideshow','hide');
    
    $projects_no        = 6;
    $projects_pages      = array();
    
    for( $i = 1; $i <= $projects_no; $i++ ) {
      $projects_pages[]    =  get_theme_mod( "kosmo_projects_page_$i", 1 );
    }

    $projects_args  = array(
      'post_type' => 'page',
      'post__in' => array_map( 'absint', $projects_pages ),
      'posts_per_page' => absint($projects_no),
      'orderby' => 'post__in'
    ); 
      
    $projects_query = new   wp_Query( $projects_args );
    if( $kosmo_projects_section == "show") :
?>
  
        <!-- project section -->
        <section class="work-section background">
            <div class="container">
                <div class="section-title text-center">
                	<?php if($kosmo_projects_title != "")   {  ?>
                    <h2 class="title-services-other title-2"><?php echo esc_html(get_theme_mod('kosmo-projects_title')); ?></h2>
                    <?php }?>
                    <h4 class="subtitle-services-other subtitle-2"><?php echo  esc_html(get_theme_mod('kosmo-projects_subtitle')); ?></h4>
                </div>
                <div class="projects pro-showcase container">
                    <div class="row grid">
                      <?php
                      if($projects_query->have_posts()):
                          while($projects_query->have_posts()) :
                          $projects_query->the_post();
                      ?>
            				      <!-- item -->
                          <div class="col-md-4 col-sm-6 col-xs-12 grid-item web branding">
                              <div class="work">
                                <?php if(has_post_thumbnail()) : ?>
                                  <?php the_post_thumbnail('kosmo-projects-thumbnail', array('class' => 'img-responsive')); 
                                endif; ?>
                                  <div class="overlay">
                                      <div class="inner-project">
                                          <div class="box">
                                              <h5><?php the_title(); ?></h5>
                                          </div>
                                          <div class="inner-icon text-center">
                                            <a href="<?php the_post_thumbnail_url('kosmo-projects-thumbnail', array('class' => 'img-responsive')); ?>" class="zoom-img">
                                              <div class="z-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                              </div>
                                            </a>
                                            <a class="s-icon" href="<?php the_permalink();?>">
                                              <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
              			      <!-- End item -->
            			    <?php
            		          endwhile;
            		          wp_reset_postdata();
                      endif;
            		      ?>  
                    </div>
                </div>
            </div>
        </section>
        <!-- End Project section -->
<?php
    endif;
?>