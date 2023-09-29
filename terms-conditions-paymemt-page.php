<?php
/**
 * Template Name:Terms and Conditions Payment Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>




<section class="page_body">
    <div class="container">
            <div class="col-12 mb-5">
                        <div class="page_main-title"><?php echo  get_field('page_title'); ?></div>
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                            <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2"/>
                            <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2"/>
                            <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2"/>
                            </svg>
                        </div>

                </div>



                <div class="col-12 mb-4">
                    <?php
                        $text = get_field('content');
                    ?>

                    <div  class="custom-list-item">
                    <?php echo $text; ?>
                    </div>


                </div>


                <div class="col-12">
                  <hr>
                    
                    <div class="form-check mt-4 mb-5">
                        <input class="form-check-input" type="checkbox" value="" id="agree-conditions">
                        <label class="form-check-label" for="agree-conditions">
                        I have read and agree to the terms and conditions
                        </label>
                    </div>

                    <a href="#" class="btn btn-danger px-5 py-2 custom-red_button">Pay Now </a>

                </div>



              



    </div>
</section>



<?php
get_footer();