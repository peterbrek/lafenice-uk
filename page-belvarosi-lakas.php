<?php
$page_title = 'Downtown apartment';
$project_name = 'belvarosi-lakas';
$project_folder = '19_belvarosi_lakas';
$page_description = '';
$page_keywords = '';
include('header.php');
?>





<!-- Section General Title -->
<div class="general-title bg-color">
    <h2><?=$page_title ?></h2>
    <div class="title-divider"></div>
</div>

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Project Inner -->
            <div class="container">
                <div class="row">

                    <!-- Project Image Gallery (for more images in your gallery, image width can be changed in styles.css class gallery-inner) -->
                    <div class="col-md-12">
                        <ul class="gallery-inner">
                          <!-- Image 1 -->
                          <li>
                              <a href="https://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-1.jpg" data-lightbox="example-set">
                                  <img src="https://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-1.jpg" alt="<?=$page_title ?>">
                              </a>
                          </li>

                          <!-- Image 1 -->
                            <li>
                                <a href="https://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-2.jpg" data-lightbox="example-set">
                                    <img src="https://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-2.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li>

                            <!-- Image 2 -->
                            <li>
                                <a href="https://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-3.jpg" data-lightbox="example-set">
                                    <img src="https://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-3.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li>

                            <!-- Image 2 -->
                            <li>
                                <a href="https://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-4.jpg" data-lightbox="example-set">
                                    <img src="https://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-4.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li>



                        </ul>
                    </div>

                    <!-- Project Information (location, date, category some information about your project) -->
                    <!-- <div class="col-sm-5">


                        <div class="project-description">
                            <p></p>
                        </div>
                    </div> -->

                </div><!-- row -->
            </div><!-- /container -->
            <!-- End Project Inner -->


            <!-- Related Projects -->
            <section class="projects padding-top">
                <!-- Section General Title -->




                <!-- View All Projects Button -->
                <div class="padding-top padding-bottom text-center">
                    <a href="/references" class="btn black-btn">See all our references</a>
                </div>

            </section>
            <!-- End Related Projects -->

        </div>
        <!-- End Site Wrapper -->












<?php include('footer.php'); ?>
