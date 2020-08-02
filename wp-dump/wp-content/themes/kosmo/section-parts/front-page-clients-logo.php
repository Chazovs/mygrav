<?php 
// To display Clients-logo section on front page
//error_reporting(0);
?>
<?php
    $kosmo_clients_section_hideshow = get_theme_mod('kosmo_clients_section_hideshow','hide');
    $kosmo_clients_title = get_theme_mod('kosmo_clients_title');
    $clients_no        = 6;
    $clients_logo      = array();
    for( $i = 1; $i <= $clients_no; $i++ ) {
        $clients_logo[]    =  get_theme_mod( "kosmo_client_logo_$i", 1 );
    }
    $client_args  = array(
      'post_type' => 'page',
      'post__in' => array_map( 'absint', $clients_logo ),
      'posts_per_page' => absint($clients_no),
      'orderby' => 'post__in'
    );
    $client_query = new   wp_Query( $client_args );
    if ($kosmo_clients_section_hideshow =='show') { 
?> 
    <!-- Partners Section -->
    <section class="home-partners">
        <div class="container">
            <div class="section-title text-center">
                <?php if($kosmo_clients_title != "")   {  ?>
                <h2 class="subtitle-testimonials title-2"><?php echo esc_html(get_theme_mod('kosmo_clients_title')); ?></h2>
                <?php } ?>
                <div class="spacer-20"> </div>
            </div>

            <div class="row partners">
                <div class="owl-carousel kosmo-carousel"
                    data-loop="false"
                    data-margin="10"
                    data-autoplay="false"
                    data-autoplayTimeout="8000"
                    data-nav="false"
                    data-r-large="4"
                    data-r-medium="4"
                    data-r-small="3"
                    data-r-x-medium="2"
                    data-r-x-small="1">
                    <?php
                    if($client_query->have_posts() ):                   
                       while($client_query->have_posts()) :
                       $client_query->the_post();
                    ?>                    
                        <div class="item">
                            <div class="partner-images">
                                <?php 
                                if(has_post_thumbnail()): 
                                    the_post_thumbnail();
                                endif; 
                                ?>
                            </div>
                        </div>
                    <?php     
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End partner section -->

<!-- Main Content Section -->
<?php } ?>