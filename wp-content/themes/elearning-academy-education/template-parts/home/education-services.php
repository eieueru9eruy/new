<?php
/**
 * Template part for displaying education category section
 *
 * @package Elearning Academy Education
 * @subpackage elearning_academy_education
 */
?>

<?php if( get_theme_mod('elearning_academy_education_services_box_icon1') != '' || get_theme_mod('elearning_academy_education_services_box_title1') != '' || get_theme_mod('elearning_academy_education_services_box_icon2') != '' || get_theme_mod('elearning_academy_education_services_box_title2') != '' || get_theme_mod('elearning_academy_education_services_box_icon3') != '' || get_theme_mod('elearning_academy_education_services_box_title3') != '' ){ ?>
  <section id="education-services">
    <div class="container">
      <div class="edu-services-box">
        <div class="row">
          <?php for ($i=1; $i <= 4; $i++) { ?>
            <div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
              <?php if( get_theme_mod('elearning_academy_education_services_box_icon'.$i) != '' || get_theme_mod('elearning_academy_education_services_box_title'.$i) != '' ){ ?>
                <div class="category-inner-box <?php echo('category-inner-box').$i; ?>">
                  <?php if( get_theme_mod('elearning_academy_education_services_box_icon'.$i) != '' ){ ?>
                    <i class="<?php echo esc_html(get_theme_mod('elearning_academy_education_services_box_icon'.$i)); ?>"></i>
                  <?php }?>
                  <?php if( get_theme_mod('elearning_academy_education_services_box_title'.$i) != '' ){ ?>
                    <h4><?php echo esc_html(get_theme_mod('elearning_academy_education_services_box_title'.$i)); ?></h4>
                  <?php }?>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php } ?>