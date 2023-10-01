<?php
/**
 * Template Name: Home Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>


<section class="banner">
<div id="owl-carousel" class="owl-carousel">
    <div class="item">
        <img class="img-fluid" width="1920" height="880" src="http://localhost/srms/wp-content/uploads/2023/09/banner.png" alt="Slide 1">
    </div>
</div>
</section>

<section class="enroll_sec">
<div class="container">
       <div class="row">
    <div class="col-md-6">
    
    <div class="img_enrolls">
    <?php
$image = get_field('image1'); 

if ($image) {
    $image_url = esc_url($image['url']);
    $image_alt = esc_attr($image['alt']);
    $image_title = esc_attr($image['title']);
    echo '<img class="enroll_img" src="' . $image_url . '" alt="' . $image_alt . '" title="' . $image_title . '" />';
}
?>
</div>
<div class="text_enroll">

<h3 class="enrol_title"><?php the_field('enroll_title');?></h3>

<p class="enroll_para"><?php the_field('enroll_text');?> </p>

</div>

    </div>
    <div class="col-md-6">
    <?php
$button_text = get_field('enroll_button');
$url = get_field('enroll_url');
?>

<?php if ($button_text && $url) : ?>
    <div class="button-container text-right">
  <a href="<?php echo esc_url($url); ?>" class="button_enroll"><?php echo esc_html($button_text); ?></a>
  </div>

<?php endif; ?>
    </div>
</div>
</div>
</section>


<section class="second_sec">
<div class="container">
<div class="row">
<div class="col-12">

<h2 class="sectwo_title"><?php the_field('sectiontwo_title');?></h3>
<?php
$image = get_field('underline_image'); 

if ($image) {
    $image_url = esc_url($image['url']);
    $image_alt = esc_attr($image['alt']);
    $image_title = esc_attr($image['title']);
    echo '<img class="sec_imgs" src="' . $image_url . '" alt="' . $image_alt . '" title="' . $image_title . '" />';
}
?>

</div>
</div>
</div>
</section>

<section class="about_sec">

<div class="container">
<div class="row">
<div class="col-md-6">

</div>
<div class="col-md-6">

</div>
</div>
</div>
</section>






<section class="home-section7">
        <div class="container py-5">
           <div class="row">



           
           <div class="col-sm-6 col-lg-3 mb-4">
                <div class="home-section7_item text-white">
                    <div class="fs-1 fw-bold"><span class="counter">40</span>+</div>
                    <div class="fs-5">Years of experience</div>
                </div>

            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="home-section7_item text-white">
                    <div class="fs-1 fw-bold"><span class="counter">100</span>+</div>
                    <div class="fs-5">Staff</div>
                </div>

            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="home-section7_item text-white">
                    <div class="fs-1 fw-bold"><span class="counter">1500</span>+</div>
                    <div class="fs-5">Students</div>
                </div>

            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="home-section7_item text-white">
                    <div class="fs-1 fw-bold"><span class="counter">80</span>%</div>
                    <div class="fs-5">Pass Rate</div>
                </div>

            </div>
           </div>
        </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>

<script>
$('.counter').counterUp({
  delay: 10,
  time: 4000
});
$('.counter').addClass('animated fadeInDownBig');
$('.fs-1').addClass('animated fadeIn');
</script>

<script>
    jQuery(document).ready(function($) {
        $("#owl-carousel").owlCarousel({
            items: 1, // Number of items to display
            autoplay: true, // Autoplay the carousel
            loop: true, // Infinite loop
            nav: true, // Show navigation buttons
            dots: false // Hide pagination dots
        });
    });
</script>


<?php
get_footer();