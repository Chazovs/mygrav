<?php 
// To display Footer Call Out section on front page
?>
<?php
$kosmo_contact_section_hideshow = get_theme_mod('kosmo_contact_section_hideshow','hide');
if ($kosmo_contact_section_hideshow =='show') { ?>
<?php $ctah_btn_text = get_theme_mod('ctah_btn_text'); ?> 
    <!-- cloud Section -->
    <section class="cloud-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cloud-des">
                        <h4><?php echo esc_html(get_theme_mod('ctah_heading')); ?></h4>
                    </div>   
                </div>
                <?php if (!empty($ctah_btn_text)) { ?>
                <div class="col-md-3">
                    <div class="cloude-btn">
                        <a href="<?php echo esc_url(get_theme_mod('ctah_btn_url')); ?>" class="btn"><?php echo esc_html($ctah_btn_text); ?></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>