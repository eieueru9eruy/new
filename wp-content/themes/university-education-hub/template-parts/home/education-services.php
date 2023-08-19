<?php
/**
 * Template part for displaying education category section
 *
 * @package University Education Hub
 * @subpackage university_education_hub
 */
?>

<?php if( get_theme_mod('university_education_hub_services_box_icon1') != '' || get_theme_mod('university_education_hub_services_box_title1') != '' || get_theme_mod('university_education_hub_services_box_icon2') != '' || get_theme_mod('university_education_hub_services_box_title2') != '' || get_theme_mod('university_education_hub_services_box_icon3') != '' || get_theme_mod('university_education_hub_services_box_title3') != '' ){ ?>
  <section id="education-services">
    <div class="container">
      <div class="row">
        <?php for ($i=1; $i <= 3; $i++) { ?>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <?php if( get_theme_mod('university_education_hub_services_box_icon'.$i) != '' || get_theme_mod('university_education_hub_services_box_title'.$i) != '' ){ ?>
              <div class="category-inner-box">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-3 align-self-center">
                    <?php if( get_theme_mod('university_education_hub_services_box_icon'.$i) != '' ){ ?>
                      <i class="<?php echo esc_html(get_theme_mod('university_education_hub_services_box_icon'.$i)); ?>"></i>
                    <?php }?>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-9 align-self-center">
                    <?php if( get_theme_mod('university_education_hub_services_box_title'.$i) != '' ){ ?>
                      <h4><?php echo esc_html(get_theme_mod('university_education_hub_services_box_title'.$i)); ?></h4>
                    <?php }?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>