<?php

/**
 * Template Name: Home Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">

<!-- <section class="banner">
    <div id="owl-carousel" class="owl-carousel">
        <div class="item">
            <img class="img-fluid" width="1920" height="880" src="http://localhost/srms/wp-content/uploads/2023/09/banner.png" alt="Slide 1">
        </div>
    </div>
</section> -->






<!-- <section class="splide" aria-label="Main Image Slider">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide"><img class="img-fluid" width="1920" height="880" src="http://localhost/srms/wp-content/uploads/2023/09/banner.png" alt="Slide 1"></li>
            <li class="splide__slide"><img class="img-fluid" width="1920" height="880" src="http://localhost/srms/wp-content/uploads/2023/09/banner.png" alt="Slide 2"></li>
		</ul>
  </div>
</section> -->



<?php if (have_rows('section_1_slider')) : // Check if there are slides available ?>
    <section class="splide" aria-label="Main Image Slider">
        <div class="splide__track">
            <ul class="splide__list">
                <?php while (have_rows('section_1_slider')) : the_row(); ?>
                    <?php $image = get_sub_field('slide'); // Get the slide image field ?>
                    <li class="splide__slide"><img class="img-fluid w-100" loading="eager" fetchpriority="high" src="<?php echo esc_url($image['url']); ?>" width="<?php echo esc_attr($image['width']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>






<!-- <section class="enroll_sec">
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

                    <h3 class="enrol_title"><?php the_field('enroll_title'); ?></h3>

                    <p class="enroll_para"><?php the_field('enroll_text'); ?> </p>

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
</section> -->


<section class="home-section2 enquire-section text-white">
    <div class="container py-4">
        <div class="col-12 d-flex flex-column flex-md-row justify-content-between  align-items-center">
            <div class="d-flex  flex-column flex-md-row gap-4  align-items-center">
                <div class="our-facilities_item-img_wrapper">
                    <img class="img-fluid" src="http://localhost/srms/wp-content/uploads/2023/09/Group-4114.png" alt="icon">
                </div>
                <div class="my-3 text-center my-md-0 text-md-start">
                    <h3>ENROLL YOUR CHILD</h3>
                    <h5>We provide the perfect education for your child every day</h5>
                </div>
            </div>

            <div>
                
                    <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-light px-4 py-2 rounded-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Enquire Now
                </button>

            </div>

        </div>

    </div>

</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog enquire-section_modal">
    <div class="modal-content">
      
      <div class="modal-body position-relative">
        <div class="row">
            <div class="col-12 col-md-7 p-4 contact-form_card">
                <div class="page_main-title">Get in Touch</div>

                <div>
                <?php
                    // Use the do_shortcode function to insert the WPForms shortcode
                    echo do_shortcode('[wpforms id="167" title="false"]');
                    ?>
                </div>
            </div>
            <div class="col-12 d-none d-md-block col-md-5">
                <img class="img-fluid h-100 object-fit-cover" src="https://srms.brightbridge.co/wp-content/uploads/2023/10/Mask-group-26.webp" alt="">
            </div>

        </div>
        

            <div class=" position-absolute  top-0  end-0">
                <button type="button" class="btn btn-dark btn-sm rounded-5" data-bs-dismiss="modal">X</button>
            </div>

      </div>

                   
    </div>
  </div>
</div>

<section class="about_sec">
    <div class="container">
        <div class="col-12 col-md-10 my-5 m-auto text-center">
            <div class="page_main-title">
                <?php the_field('section_3_about_us_section_title'); ?>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                    <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2" />
                    <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2" />
                    <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2" />
                </svg>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <img width="844" height="534" class="img-fluid" src="<?php the_field('section_3_about_us_section_image'); ?>" alt="School Photo">
            </div>
            <div class="col-md-6 mb-5">
                <div class="mb-4 page_section-title"><?php the_field('section_3_about_us_section_title'); ?></div>
                <p><?php the_field('section_3_about_us_section_text'); ?></p>
                <a class="btn custom-red_button px-4 mt-4" href="/about">Know More</a>
            </div>
        </div>
    </div>
</section>



<section class="home-section4 mb-5" style="background-image: url('https://srms.brightbridge.co/wp-content/uploads/2023/10/section5-scaled.webp'); background-size:cover;">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-6 text-white m-auto">
               <div class="mb-5">
               <div class="fs-2 fw-bold">Our Vision </div>
                <div>Our school should be recognized in the community as the one that achieves high academic standards and whose students who pass out are citizens of Good character.</div>
               </div>
               <div>
               <div class="fs-2 fw-bold">Our Vision </div>
                <div>Our school should be recognized in the community as the one that achieves high academic standards and whose students who pass out are citizens of Good character.</div>
               </div>
            </div>
            <div class="col-12 col-lg-6 mb-5 text-center mt-5">
                <img width="380" height="380" class="img-fluid" src="https://srms.brightbridge.co/wp-content/uploads/2023/10/home-section-5-image.png" alt="">
            </div>
        </div>
    </div>
</section>


<!-- <section class="home-section5 accordion-img-text-blocks">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid accordion-img-text-blocks_item-img" width="837" height="618" src="https://s3-alpha-sig.figma.com/img/52bd/ead0/86de5dd2cb47fe776f4ffeb19af7448c?Expires=1696809600&Signature=kIzgeSod1ozUgWeFuSMeK1OqO2s8zIeJHyUYxvbRa1-1Bs5KxY8ecaITRRw84dWZWruPNLB387oyHv5XYcLrYq1dfpRIq0Sj3M0hYDfIg4axDWfwYAl7bE-5EJRklXTiivys2T839O4TZWPNkNFRZNvS6Q7A7In35yH~iBg7A5FzrB7KtSTto4EU8j06BaLbWutTg6FmPlQQw0ssA~vXG-Dim2pwi3Z7HyYKyp38te6rnG1-WgWeyzpdM00aRdcdpGZWEt5SyY26SgQb7Yo5CRnpeLcEDh437VqClil5wpaZivL700D33KvJ9sTz5vbHJ-scqlshwFQ8a6KRWY0Fkw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
                    <div class="accordion-img-text-blocks_item-text">
                        <details>
                            <summary>Principal's Message</summary>
                            <p>
                                "Children are the most valuable treasure of a strong and wealthy nation." Since its inception, Sri Ramakrishna Matriculation Higher Secondary School, Avarampalayam, has endeavored to transcend learning beyond boundaries.To teach is to touch a life forever", In every treasured child there is a world waiting to be explored. We are devoted to set benchmarks with ethos in holistic education that encompasses academics . . .
                            </p>
                        </details>
                    </div>

                    <div class="accordion-img-text-blocks_item-arrow">
                        <a href="/principals-message">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="24" viewBox="0 0 33 24" fill="none">
                                <path d="M2.23438 11.9999H30.5817M30.5817 11.9999L19.9514 1.71423M30.5817 11.9999L19.9514 22.2857" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid accordion-img-text-blocks_item-img" width="837" height="618" src="https://s3-alpha-sig.figma.com/img/2db8/683c/85de9a028d78fe1cf1d3ae55468b37f4?Expires=1696809600&Signature=VnX4Hau50MSST9QHfSnb39hc8CC2vEA6lNUxduufSCx2Q2v2a-L-3gtjnzfXXxv7ZhuyWFy0gGtuzZNyHrmr1asRXBzl9VA12oFxZLImBwXkCOWxex4OKZi8cfjaPDJUAqVbPMD3sSvxiR3sOzCeswFBvABYBUGTWG8lSap94pl0We74mKThjASfct5GhmQb3uK50GHyOZ1uSgUwk98IXESkzUEsqhQJUBS0qmnYbiFoMXxYB84HektijvHSr-GCPd2gPpKnWzu7yx6lS66tM52wSgfk07dZv0SPYTVWTx3om6LI3OxMeZkHoWaZKAdD2OrCOrjsF7dE3~tYvZMoEw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
                    <div class="accordion-img-text-blocks_item-text">
                        <details>
                            <summary>Management</summary>
                            <p>
                                SNR Sons Charitable Trust has continued to provide an excellent education from KG to Post Doctoral level to its students since its establishment in 1970. Our focus lies not only in mastering academics but also in training our students to encounter any challenges life casts in their way and stand up to them. With the numerous co-curricular clubs and sports activities we have with specialized tutors for each activity . . .
                            </p>
                        </details>
                    </div>

                    <div class="accordion-img-text-blocks_item-arrow">
                        <a href="/management-committee">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="24" viewBox="0 0 33 24" fill="none">
                                <path d="M2.23438 11.9999H30.5817M30.5817 11.9999L19.9514 1.71423M30.5817 11.9999L19.9514 22.2857" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section> -->


<section class="home-section5 accordion-img-text-blocks">
    <div class="container">
        <div class="row">
            <?php
            // Check if the group field exists
            if (have_rows('section_5_accordian')) {
                while (have_rows('section_5_accordian')) {
                    the_row();
                    // Principal Data
                    $principal_title = get_sub_field('principal_title');
                    $principal_text = get_sub_field('principal_text');
                    $principal_image = get_sub_field('principal_image');
                    
                    // Management Data
                    $management_title = get_sub_field('management_title');
                    $management_text = get_sub_field('management_text');
                    $management_image = get_sub_field('management_image');
                    ?>

                    <div class="col-12 col-lg-6 mb-5">
                        <div class="position-relative">
                            <?php
                            if ($principal_image) {
                                echo '<img class="img-fluid accordion-img-text-blocks_item-img" width="837" height="618" src="' . esc_url($principal_image['url']) . '" alt="' . esc_attr($principal_image['alt']) . '">';
                            }
                            ?>
                            <div class="accordion-img-text-blocks_item-text">
                                <details>
                                    <summary><?php echo esc_html($principal_title); ?></summary>
                                    <p><?php echo esc_html($principal_text); ?></p>
                                </details>
                            </div>
                            <div class="accordion-img-text-blocks_item-arrow">
                                <a href="/principals-message">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="24" viewBox="0 0 33 24" fill="none">
                                        <path d="M2.23438 11.9999H30.5817M30.5817 11.9999L19.9514 1.71423M30.5817 11.9999L19.9514 22.2857" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mb-5">
                        <div class="position-relative">
                            <?php
                            if ($management_image) {
                                echo '<img class="img-fluid accordion-img-text-blocks_item-img" width="837" height="618" src="' . esc_url($management_image['url']) . '" alt="' . esc_attr($management_image['alt']) . '">';
                            }
                            ?>
                            <div class="accordion-img-text-blocks_item-text">
                                <details>
                                    <summary><?php echo esc_html($management_title); ?></summary>
                                    <p><?php echo esc_html($management_text); ?></p>
                                </details>
                            </div>
                            <div class="accordion-img-text-blocks_item-arrow">
                                <a href="/management-committee">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="24" viewBox="0 0 33 24" fill="none">
                                        <path d="M2.23438 11.9999H30.5817M30.5817 11.9999L19.9514 1.71423M30.5817 11.9999L19.9514 22.2857" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
        </div>
    </div>
</section>







<section class="home-section6 our-facilities">
    <div class="container">
        <div class="col-12 mb-5 text-center">
            <?php
            $main_heading = get_field('section_6_our-facilities')['main_heading'];
            if ($main_heading) {
                echo '<div class="page_main-title">' . esc_html($main_heading) . '</div>';
            }
            ?>
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                    <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2" />
                    <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2" />
                    <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2" />
                </svg>
            </div>
        </div>

        <div class="row our-facilities_items">
            <?php
            $items = get_field('section_6_our-facilities')['item'];
            if ($items) {
                foreach ($items as $item) {
                    $title = $item['title'];
                    $text = $item['text'];
                    $image = $item['image'];

                    if ($title || $text || $image) {
                        echo '<div class="col-12 col-md-6 col-lg-4 mb-5">';
                        echo '<div class="our-facilities_item d-flex align-items-center">';
                        
                        if ($image) {
                            echo '<div class="our-facilities_item-img_wrapper me-2 d-flex align-items-center justify-content-center">';
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                            echo '</div>';
                        }
                        
                        echo '<div>';
                        
                        if ($title) {
                            echo '<div class="fs-2 fw-bold mb-1">' . esc_html($title) . '</div>';
                        }
                        
                        if ($text) {
                            echo '<p>' . esc_html($text) . '</p>';
                        }
                        
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>
    </div>
</section>




<section class="home-section7" style="background-image: url('https://srms.brightbridge.co/wp-content/uploads/2023/09/banner-img-scaled.webp');">
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



<section class="home-section8 news-events-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 my-5 m-auto text-center">
                <div class="page_main-title">
                Our News & Events
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                        <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2" />
                        <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2" />
                        <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-lg-6">
         
                <?php
                    // Get the ID of the "News" category by its slug
                    $category = get_category_by_slug('news');

                    if ($category) {
                        $category_id = $category->term_id;

                        // Query for the latest post in the "News" category
                        $args = array(
                            'cat' => $category_id,
                            'posts_per_page' => 1,
                        );

                        $latest_query = new WP_Query($args);

                        if ($latest_query->have_posts()) :
                            while ($latest_query->have_posts()) : $latest_query->the_post();
                                // Get the post's featured image URL
                                $thumbnail = get_the_post_thumbnail_url();
                    ?>
                                <div class="card mb-3 home-blog-post_card">
                                  <div class="row g-0">
                                    <div class="col-md-5">
                                    <?php if ($thumbnail) : ?>
                                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>" class="card-img-top img-fluid h-100">
                                    <?php endif; ?>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-header d-flex flex-wrap justify-content-between pt-3">
                                            <div class="mt-3">
                                                <div class="d-flex align-items-center"><span class="me-2"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.60938 10.9713H24.404" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M19.1816 15.5283H19.1929" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14.0059 15.5283H14.0171" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.81836 15.5283H8.82961" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M19.1816 20.062H19.1929" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14.0059 20.062H14.0171" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.81836 20.062H8.82961" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M18.7188 2.33331V6.17281" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.29297 2.33331V6.17281" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9446 4.17572H9.06612C5.63999 4.17572 3.5 6.08431 3.5 9.59258V20.1505C3.5 23.7139 5.63999 25.6667 9.06612 25.6667H18.9338C22.3708 25.6667 24.5 23.747 24.5 20.2388V9.59258C24.5108 6.08431 22.3816 4.17572 18.9446 4.17572Z" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        </span><?php echo get_the_date('d-m-Y'); ?>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div>
                                                    <div  class="d-flex align-items-center"><span class="me-2"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 26.25C14.1974 26.2489 14.3886 26.181 14.5425 26.0575C14.875 25.76 23.625 18.7075 23.625 11.375C23.625 8.82229 22.6109 6.37414 20.8059 4.5691C19.0009 2.76406 16.5527 1.75 14 1.75C11.4473 1.75 8.99914 2.76406 7.1941 4.5691C5.38906 6.37414 4.375 8.82229 4.375 11.375C4.375 18.7075 13.125 25.76 13.4575 26.0575C13.6114 26.181 13.8026 26.2489 14 26.25ZM6.125 11.375C6.125 9.28642 6.95468 7.28338 8.43153 5.80653C9.90838 4.32968 11.9114 3.5 14 3.5C16.0886 3.5 18.0916 4.32968 19.5685 5.80653C21.0453 7.28338 21.875 9.28642 21.875 11.375C21.875 16.8875 15.8638 22.5837 14 24.2288C12.1363 22.5837 6.125 16.8875 6.125 11.375Z" fill="#B1B1B1"/>
                                                    <path d="M18.375 11.375C18.375 10.5097 18.1184 9.66385 17.6377 8.94438C17.157 8.22492 16.4737 7.66416 15.6742 7.33303C14.8748 7.0019 13.9951 6.91526 13.1465 7.08407C12.2978 7.25288 11.5183 7.66956 10.9064 8.28141C10.2946 8.89327 9.87788 9.67282 9.70907 10.5215C9.54026 11.3701 9.6269 12.2498 9.95803 13.0492C10.2892 13.8487 10.8499 14.532 11.5694 15.0127C12.2888 15.4934 13.1347 15.75 14 15.75C15.1603 15.75 16.2731 15.2891 17.0936 14.4686C17.9141 13.6481 18.375 12.5353 18.375 11.375ZM11.375 11.375C11.375 10.8558 11.529 10.3483 11.8174 9.91663C12.1058 9.48495 12.5158 9.1485 12.9955 8.94982C13.4751 8.75114 14.0029 8.69915 14.5121 8.80044C15.0213 8.90173 15.489 9.15173 15.8562 9.51885C16.2233 9.88596 16.4733 10.3537 16.5746 10.8629C16.6759 11.3721 16.6239 11.8999 16.4252 12.3795C16.2265 12.8592 15.8901 13.2692 15.4584 13.5576C15.0267 13.846 14.5192 14 14 14C13.3038 14 12.6361 13.7234 12.1438 13.2312C11.6516 12.7389 11.375 12.0712 11.375 11.375Z" fill="#B1B1B1"/>
                                                    </svg>
                                                    </span>SRMHS, Coimbatore</div>
                                                </div>    
                                            </div>

                                        </div>

                                        <div class="card-body">
                                            <h2 class="card-title mb-3"><?php the_title(); ?></h2>
                                            <div class="card-text">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="btn my-4 px-4">Read More</a>
                                        </div>
                                        </div>

                                  </div>
                                </div>
                    <?php
                            endwhile;
                            wp_reset_postdata(); // Reset post data to the main query
                        else :
                            echo 'No posts found in the "News" category.';
                        endif;
                    } else {
                        echo 'The "News" category does not exist.';
                    }
                    ?>


            </div>


            <div class="col-12 col-lg-6">
                <div class="d-flex justify-content-between mb-4">
                    <div class="page_section-title">Upcoming Events</div>
                    <div>
                        <a href="#" class="upcoming-events-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
                                <g clip-path="url(#clip0_894_255)">
                                    <path d="M1.44434 10H24.5554M24.5554 10L15.8888 1.42859M24.5554 10L15.8888 18.5714" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_894_255">
                                    <rect width="26" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4 p-4">
                         <div class="home-page-event-card_date-wrapper text-white h-100 d-flex justify-content-center  align-items-center">
                            <div class="text-center">
                            <div class="h2">25</div>
                            <div class="fs-5">July</div>
                            </div>
                         </div>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dancing for a happy life</h5>
                            <div class="d-flex flex-column">
                                            <div class="mt-3">
                                                <div class="d-flex align-items-center"><span class="me-2"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.60938 10.9713H24.404" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M19.1816 15.5283H19.1929" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14.0059 15.5283H14.0171" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.81836 15.5283H8.82961" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M19.1816 20.062H19.1929" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14.0059 20.062H14.0171" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.81836 20.062H8.82961" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M18.7188 2.33331V6.17281" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.29297 2.33331V6.17281" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9446 4.17572H9.06612C5.63999 4.17572 3.5 6.08431 3.5 9.59258V20.1505C3.5 23.7139 5.63999 25.6667 9.06612 25.6667H18.9338C22.3708 25.6667 24.5 23.747 24.5 20.2388V9.59258C24.5108 6.08431 22.3816 4.17572 18.9446 4.17572Z" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        </span><?php echo get_the_date('d-m-Y'); ?>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div>
                                                    <div  class="d-flex align-items-center"><span class="me-2"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 26.25C14.1974 26.2489 14.3886 26.181 14.5425 26.0575C14.875 25.76 23.625 18.7075 23.625 11.375C23.625 8.82229 22.6109 6.37414 20.8059 4.5691C19.0009 2.76406 16.5527 1.75 14 1.75C11.4473 1.75 8.99914 2.76406 7.1941 4.5691C5.38906 6.37414 4.375 8.82229 4.375 11.375C4.375 18.7075 13.125 25.76 13.4575 26.0575C13.6114 26.181 13.8026 26.2489 14 26.25ZM6.125 11.375C6.125 9.28642 6.95468 7.28338 8.43153 5.80653C9.90838 4.32968 11.9114 3.5 14 3.5C16.0886 3.5 18.0916 4.32968 19.5685 5.80653C21.0453 7.28338 21.875 9.28642 21.875 11.375C21.875 16.8875 15.8638 22.5837 14 24.2288C12.1363 22.5837 6.125 16.8875 6.125 11.375Z" fill="#B1B1B1"/>
                                                    <path d="M18.375 11.375C18.375 10.5097 18.1184 9.66385 17.6377 8.94438C17.157 8.22492 16.4737 7.66416 15.6742 7.33303C14.8748 7.0019 13.9951 6.91526 13.1465 7.08407C12.2978 7.25288 11.5183 7.66956 10.9064 8.28141C10.2946 8.89327 9.87788 9.67282 9.70907 10.5215C9.54026 11.3701 9.6269 12.2498 9.95803 13.0492C10.2892 13.8487 10.8499 14.532 11.5694 15.0127C12.2888 15.4934 13.1347 15.75 14 15.75C15.1603 15.75 16.2731 15.2891 17.0936 14.4686C17.9141 13.6481 18.375 12.5353 18.375 11.375ZM11.375 11.375C11.375 10.8558 11.529 10.3483 11.8174 9.91663C12.1058 9.48495 12.5158 9.1485 12.9955 8.94982C13.4751 8.75114 14.0029 8.69915 14.5121 8.80044C15.0213 8.90173 15.489 9.15173 15.8562 9.51885C16.2233 9.88596 16.4733 10.3537 16.5746 10.8629C16.6759 11.3721 16.6239 11.8999 16.4252 12.3795C16.2265 12.8592 15.8901 13.2692 15.4584 13.5576C15.0267 13.846 14.5192 14 14 14C13.3038 14 12.6361 13.7234 12.1438 13.2312C11.6516 12.7389 11.375 12.0712 11.375 11.375Z" fill="#B1B1B1"/>
                                                    </svg>
                                                    </span>SRMHS, Coimbatore</div>
                                                </div>    
                                            </div>

                                        </div>
                        </div>
                        </div>
                    </div>
                </div>


                <div class="mt-4">
                    <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4 p-4">
                         <div class="home-page-event-card_date-wrapper text-white h-100 d-flex justify-content-center  align-items-center">
                            <div class="text-center">
                            <div class="h2">25</div>
                            <div class="fs-5">July</div>
                            </div>
                         </div>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dancing for a happy life</h5>
                            <div class="d-flex flex-column">
                                            <div class="mt-3">
                                                <div class="d-flex align-items-center"><span class="me-2"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.60938 10.9713H24.404" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M19.1816 15.5283H19.1929" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14.0059 15.5283H14.0171" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.81836 15.5283H8.82961" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M19.1816 20.062H19.1929" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14.0059 20.062H14.0171" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.81836 20.062H8.82961" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M18.7188 2.33331V6.17281" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.29297 2.33331V6.17281" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9446 4.17572H9.06612C5.63999 4.17572 3.5 6.08431 3.5 9.59258V20.1505C3.5 23.7139 5.63999 25.6667 9.06612 25.6667H18.9338C22.3708 25.6667 24.5 23.747 24.5 20.2388V9.59258C24.5108 6.08431 22.3816 4.17572 18.9446 4.17572Z" stroke="#B1B1B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        </span><?php echo get_the_date('d-m-Y'); ?>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div>
                                                    <div  class="d-flex align-items-center"><span class="me-2"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 26.25C14.1974 26.2489 14.3886 26.181 14.5425 26.0575C14.875 25.76 23.625 18.7075 23.625 11.375C23.625 8.82229 22.6109 6.37414 20.8059 4.5691C19.0009 2.76406 16.5527 1.75 14 1.75C11.4473 1.75 8.99914 2.76406 7.1941 4.5691C5.38906 6.37414 4.375 8.82229 4.375 11.375C4.375 18.7075 13.125 25.76 13.4575 26.0575C13.6114 26.181 13.8026 26.2489 14 26.25ZM6.125 11.375C6.125 9.28642 6.95468 7.28338 8.43153 5.80653C9.90838 4.32968 11.9114 3.5 14 3.5C16.0886 3.5 18.0916 4.32968 19.5685 5.80653C21.0453 7.28338 21.875 9.28642 21.875 11.375C21.875 16.8875 15.8638 22.5837 14 24.2288C12.1363 22.5837 6.125 16.8875 6.125 11.375Z" fill="#B1B1B1"/>
                                                    <path d="M18.375 11.375C18.375 10.5097 18.1184 9.66385 17.6377 8.94438C17.157 8.22492 16.4737 7.66416 15.6742 7.33303C14.8748 7.0019 13.9951 6.91526 13.1465 7.08407C12.2978 7.25288 11.5183 7.66956 10.9064 8.28141C10.2946 8.89327 9.87788 9.67282 9.70907 10.5215C9.54026 11.3701 9.6269 12.2498 9.95803 13.0492C10.2892 13.8487 10.8499 14.532 11.5694 15.0127C12.2888 15.4934 13.1347 15.75 14 15.75C15.1603 15.75 16.2731 15.2891 17.0936 14.4686C17.9141 13.6481 18.375 12.5353 18.375 11.375ZM11.375 11.375C11.375 10.8558 11.529 10.3483 11.8174 9.91663C12.1058 9.48495 12.5158 9.1485 12.9955 8.94982C13.4751 8.75114 14.0029 8.69915 14.5121 8.80044C15.0213 8.90173 15.489 9.15173 15.8562 9.51885C16.2233 9.88596 16.4733 10.3537 16.5746 10.8629C16.6759 11.3721 16.6239 11.8999 16.4252 12.3795C16.2265 12.8592 15.8901 13.2692 15.4584 13.5576C15.0267 13.846 14.5192 14 14 14C13.3038 14 12.6361 13.7234 12.1438 13.2312C11.6516 12.7389 11.375 12.0712 11.375 11.375Z" fill="#B1B1B1"/>
                                                    </svg>
                                                    </span>SRMHS, Coimbatore</div>
                                                </div>    
                                            </div>

                                        </div>
                        </div>
                        </div>
                    </div>
                </div>



                </div>

            </div>

        </div>

    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>

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
<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide',{
        type    : 'loop',
        pagination:false,
        arrows:true,
        autoplay: 'pause',

    } );
    splide.mount();
  } );
</script>


<?php
get_footer();
