<main class="l-page --home">
    <header class="l-fullBanner" data-aos="fade-up">
        <div class="l-fullBanner__swiper js-l-fullBanner__swiper swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#video-explore" class="l-fullBanner__mediaCover js-m-modal__open">
                        <video src="media/video/demo.mp4" autoplay loop muted></video>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#video-explore" class="l-fullBanner__mediaCover js-m-modal__open">
                        <picture>
                            <!-- mobile -->
                            <source media="(max-width:460px)" srcset="./media/img/content/fullBanner_home_1--s.jpg">
                            <!-- tablet -->
                            <source media="(max-width:800px)" srcset="./media/img/content/fullBanner_home_1--m.jpg">
                            <!-- desk -->
                            <img src="./media/img/content/fullBanner_home_1.jpg" alt="Invisible">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
        <div class="l-fullBanner__arrows">
            <div class="swiper-button-prev"><?php include('media/img/assets/arrow_white.svg'); ?></div>
            <div class="swiper-button-next"><?php include('media/img/assets/arrow_white.svg'); ?></div>
        </div>
    </header>
    <?php include('parts/sections/sGalleryProduct.php'); ?>
    <section class="s-blog" data-aos="fade-up">
        <div class="u-container">
            <div class="s-blog__head">
                <h2>Blog</h2>
            </div>
            <div class="s-blog__content">
                <ul class="s-blog__content__col">
                    <li>
                        <a href="blog-post" class="c-cardBlogPost" title="A diversidade natural das madeiras">
                            <figure class="c-cardBlogPost__cover">
                                <img src="./media/img/content/demo_7.jpg" alt="A diversidade natural das madeiras">
                            </figure>
                            <div class="c-cardBlogPost__content">
                                <div class="c-cardBlogPost__content__title"><h3>A diversidade natural das madeiras</h3></div>
                                <span class="c-cardBlogPost__content__more">> Acesse</span>
                            </div>
                        </a>
                    </li>
                    <li>
                         <a href="blog-post" class="c-cardBlogPost" title="Lançamentos 2022 Decortiles no 3D Warehouse">
                            <figure class="c-cardBlogPost__cover">
                                <img src="./media/img/content/demo_9.jpg" alt="Lançamentos 2022 Decortiles no 3D Warehouse">
                            </figure>
                            <div class="c-cardBlogPost__content">
                                <div class="c-cardBlogPost__content__title"><h3>Lançamentos 2022 Decortiles no 3D Warehouse</h3></div>
                                <span class="c-cardBlogPost__content__more">> Acesse</span>
                            </div>
                        </a>
                    </li>
                    <li>
                         <a href="blog-post" class="c-cardBlogPost" title="Design feito com ouro do Jalapão">
                            <figure class="c-cardBlogPost__cover">
                                <img src="./media/img/content/demo_8.jpg" alt="Design feito com ouro do Jalapão">
                            </figure>
                            <div class="c-cardBlogPost__content">
                                <div class="c-cardBlogPost__content__title"><h3>Design feito com ouro do Jalapão</h3></div>
                                <span class="c-cardBlogPost__content__more">> Acesse</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="s-blog__content__col">
                    <li>
                         <a href="blog-post" class="c-cardBlogPost --full" title="Um pé de quê? Jatobá">
                            <figure class="c-cardBlogPost__cover">
                                <img src="./media/img/content/demo_2.jpg" alt="Um pé de quê? Jatobá">
                            </figure>
                            <div class="c-cardBlogPost__content">
                                <div class="c-cardBlogPost__content__title"><h3>Um pé de quê? Jatobá</h3></div>
                                <span class="c-cardBlogPost__content__more">> Acesse</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="s-banner" data-aos="fade-up">
        <div class="u-container">
            <a href="#webapp" class="js-m-modal__open">
                <picture>
                    <!-- mobile -->
                    <source media="(max-width:460px)" srcset="./media/img/content/fullBanner_home_wpp--s.jpg">
                    <!-- tablet -->
                    <source media="(max-width:800px)" srcset="./media/img/content/fullBanner_home_wpp--m.jpg">
                    <!-- desk -->
                    <img src="./media/img/content/fullBanner_home_wpp.jpg" alt="Banner">
                </picture>
            </a>
        </div>
    </section>
</main>