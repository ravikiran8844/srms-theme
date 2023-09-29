<?php

/**
 * Template Name:Admission Procedures Page 
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
                    <line y1="10" x2="80" y2="10" stroke="#EF0F42" stroke-width="2" />
                    <line x1="96" y1="9" x2="176" y2="9" stroke="#EF0F42" stroke-width="2" />
                    <circle cx="88" cy="10" r="9" stroke="#EF0F42" stroke-width="2" />
                </svg>
            </div>

        </div>



        <div class="row">

            <div class="col-12">
                <div class="card rk-card mb-5">
                    <div class="card-header text-center">
                        <div><?php echo  get_field('section_1_title'); ?></div>
                    </div>
                    <div class="card-body rk-card_body px-lg-5">



                        <div class="col-12 p-2 mb-5">

                            <?php
                            $text = get_field('section_1_content');
                            ?>

                            <div class="custom-list-item">
                                <?php echo $text; ?>
                            </div>


                        </div>


                    </div>

                </div>



                <div class="row">

                    <div class="col-12">
                        <div class="card rk-card">
                            <div class="card-header text-center">
                                <div><?php echo  get_field('section_2_title'); ?></div>
                            </div>
                            <div class="card-body rk-card_body px-lg-5">



                                <div class="col-12 p-2 mb-5">

                                    <?php
                                    $text = get_field('section_2_content');
                                    ?>

                                    <div class="custom-list-item">
                                        <?php echo $text; ?>
                                    </div>



                                    <div class="mt-5">
                                        <?php
                                        $table = get_field('section_2_table');

                                        if (!empty($table)) {

                                            echo '<table class="table custom-table text-center">';

                                            if (!empty($table['caption'])) {

                                                echo '<caption>' . $table['caption'] . '</caption>';
                                            }

                                            if (!empty($table['header'])) {

                                                echo '<thead class="table-header-bg table-primary">';

                                                echo '<tr>';

                                                foreach ($table['header'] as $th) {

                                                    echo '<th>';
                                                    echo $th['c'];
                                                    echo '</th>';
                                                }

                                                echo '</tr>';

                                                echo '</thead>';
                                            }

                                            echo '<tbody>';

                                            foreach ($table['body'] as $tr) {

                                                echo '<tr>';

                                                foreach ($tr as $td) {

                                                    echo '<td>';
                                                    echo $td['c'];
                                                    echo '</td>';
                                                }

                                                echo '</tr>';
                                            }

                                            echo '</tbody>';

                                            echo '</table>';
                                        }

                                        ?>
                                    </div>


                                </div>


                            </div>

                        </div>







                    </div>
</section>



<?php
get_footer();
