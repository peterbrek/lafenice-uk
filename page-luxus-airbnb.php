<!-- Project header -->
<?php
$page_title = 'Luxury Airbnb apartment';

$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace("en/","",$uri); 
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
                    <div class="col-md-7">
                        <ul class="gallery-inner">
                            <!-- Image 1 -->
                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-1b.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-1.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li>   

                            <!-- Image 2 -->
                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-2.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-2.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-3.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-3.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-4.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-4.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-5b.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-5.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-6.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-6.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-7.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-7.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-8b.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-8.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-9.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-9.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            <li>
                                <a href="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-10.jpg" data-lightbox="example-set">
                                    <img src="http://www.lafenice.hu/assets/img/portfolio/<?=$project_folder ?>/<?=$project_name ?>-10.jpg" alt="<?=$page_title ?>">
                                </a>
                            </li> 

                            

                        </ul>
                    </div>

                    <!-- Project Information (location, date, category some information about your project) -->
                    <div class="col-md-5">
                        
                        <!-- Description -->
                        <div class="project-description">
                            <p>Our Client asked us to design a luxury place which ocassionally can be rented out on Airbnb.</p>
                            <p>The apartment went through a complete refurbishing.</p>
                            <p>In the Living/Dining room we fitted the beautiful curved sofa with a bench/coffee table from our supplier DOMKAPA, using a special Easy clean fabric for upholstery.</p>
                            <p>To highlight the high ceiling we used the CASAMANCE wall mural to add the main Design element to the room.</p>
                            
                            <p>In the bathroom we used the amazing tiles from the italian company Vallelunga & Co and for the rest of the apartment the DESIGN LVT floor from JAB in a nice herringbone.</p>
                            
                            <p>All curtains and blinds are from HOULES.</p>
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
                <a href="/en/references" class="btn black-btn">See all our references</a>
                </div>

            </section>
            <!-- End Related Projects -->

        </div>
        <!-- End Site Wrapper -->












<?php include('footer.php'); ?>