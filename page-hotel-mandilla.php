<!-- Project header -->
<?php
$page_title = 'Hotel Mandilla Köveskál, Hungary';

$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace("/en","",$uri); 
$project_name = $uri;
$project_folder = $uri;
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
                                <a href="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-1.jpg" data-lightbox="example-set">
                                    <img src="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-1.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li>   

                            <li>
                                <a href="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-2.jpg" data-lightbox="example-set">
                                    <img src="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-2.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li>   

                            <li>
                                <a href="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-3.jpg" data-lightbox="example-set">
                                    <img src="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-3.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-4.jpg" data-lightbox="example-set">
                                    <img src="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-4.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-5.jpg" data-lightbox="example-set">
                                    <img src="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-5.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-6.jpg" data-lightbox="example-set">
                                    <img src="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-6.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-7.jpg" data-lightbox="example-set">
                                    <img src="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-7.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-8.jpg" data-lightbox="example-set">
                                    <img src="assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-8.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            

                        </ul>
                    </div>

                    <!-- Project Information (location, date, category some information about your project) -->
                    <!-- <div class="col-sm-5"> -->
                        
                        <!-- Description -->
                        <!-- <div class="project-description"> -->
                            <!-- <p>Trendi Designbútorcsomag-unkat választotta kedves Ügyfelünk, melyet a lakás nagy mérete miatt (3 hálószoba) igyekeztünk kiegészíteni a stílussal megegyező egyéb darabokkal, mint pl. íróasztal, szék, stb. A hálószoba függönyeinek színével próbáltuk kihangsúlyozni hogy a lakás nappalija és nagy hálószobája  a vízre néz, ezzel adva különleges hangulatot az egész térnek.  --></p>
                        <!-- </div> -->
                    <!-- </div> -->

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