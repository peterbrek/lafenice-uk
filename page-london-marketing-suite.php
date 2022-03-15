<?php
$page_title = 'London – Marketing suite';
$project_name = 'london-marketing-suite';
$project_folder = '27_london-marketing-suite';
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
                    <div class="col-sm-7">
                        <ul class="gallery-inner">
                            <!-- Image 1 -->
                            <li>
                                <a href="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-1.jpg" data-lightbox="example-set">
                                    <img src="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-1.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li>   

                            <!-- Image 2 -->
                            <li>
                                <a href="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-2.jpg" data-lightbox="example-set">
                                    <img src="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-2.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-3.jpg" data-lightbox="example-set">
                                    <img src="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-3.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-4.jpg" data-lightbox="example-set">
                                    <img src="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-4.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-5.jpg" data-lightbox="example-set">
                                    <img src="/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-5.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 


                        

                            

                        </ul>
                    </div>

                    <!-- Project Information (location, date, category some information about your project) -->
                    <div class="col-sm-5">
                        
                        <!-- Description -->
                        <div class="project-description">
                            <p>By request of our client, we completed this space surrounded with so much glass by applying soft velvet fabrics. Following the British fire regulations, we delivered fire-resistant fabrics provide by the german textile company JAB.

</p>
                        </div>
                    </div>

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