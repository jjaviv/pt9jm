<section id="portfolio" class="portfolio">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/main.js"></script>

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Els nostres productes</h2>
            <h3>Revisa els nostres<span> Productes</span></h3>
            <p>Explora els nostres productes.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Tots</li>
                    <!-- <li data-filter=".filter-teclats">Teclats</li>
                    <li data-filter=".filter-auriculars">Auriculars</li> -->
                    <?php foreach ($woocommerce->get('products/categories') as $cat) {
                        if ($cat->slug != "sense-categoria")
                            echo '<li data-filter=".filter-' . $cat->name . '">' . $cat->name . '</li>';
                    } ?>
                </ul>
            </div>
        </div>
      
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  <!-- bucle productes-->
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
                       
            <!--fi bucle productes-->
        </div>
       
        <!-- <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        </div> -->

    </div>
</section>