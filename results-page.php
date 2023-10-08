<?php
/**
 * Template Name:Results Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package 
 */
get_header();

?>




<section class="page_body">
    <div class="container">
        <div class="col-12 mb-5">
            <div class="page_main-title"><?php echo  get_field('page_title'); ?>School Toppers</div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="176" height="20" viewBox="0 0 176 20" fill="none">
                    <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2" />
                    <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2" />
                    <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2" />
                </svg>
            </div>

        </div>



        <div class="row mb-5">
            <div class="col-12">
                <div class="card rk-card mb-5">
                    <div class="card-header text-center">
                        <div>Congratulations School Toppers - Class X</div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col-12 col-md-5">
                                img
                            </div>
                            <div class="col-12 col-md-5">
                                block
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                1
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                1
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                1
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                1
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="row mb-5">
            <div class="col-12 col-lg-4 mb-4">
                <div class="card results-page-card_item">
                    <div class="card-body d-flex">
                        <div class="me-2">
                            <img src="https://srms.brightbridge.co/wp-content/uploads/2023/10/Group-4326.png" alt="logo">
                        </div>
                        <div class="mt-3">
                            <div class="mb-3 page_section-text">No. of Students Appeared</div>
                            <div><span class="h3 me-2">137</span>Students </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <div class="card results-page-card_item">
                    <div class="card-body d-flex">
                        <div class="me-2">
                            <img src="https://srms.brightbridge.co/wp-content/uploads/2023/10/Group-4326.png" alt="logo">
                        </div>
                        <div class="mt-3">
                            <div class="mb-3 page_section-text">No. of Students Appeared</div>
                            <div><span class="h3 me-2">137</span>Students </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <div class="card results-page-card_item">
                    <div class="card-body d-flex">
                        <div class="me-2">
                            <img src="https://srms.brightbridge.co/wp-content/uploads/2023/10/Group-4326.png" alt="logo">
                        </div>
                        <div class="mt-3">
                            <div class="mb-3 page_section-text">No. of Students Appeared</div>
                            <div><span class="h3 me-2">137</span>Students </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>



<?php
get_footer();