<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if( is_front_page() ):

        // Quitar estilos y scripts del head
        // Los quito porque no se usarán y aumentan la velocidad
        remove_action('wp_head', 'wp_print_styles', 8);
        remove_action('wp_head', 'wp_print_head_scripts', 9);
        remove_action('wp_head', 'wp_enqueue_scripts', 1);

    endif; ?>

    <?php wp_head(); ?>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" />

    <?php if( IS_DEV ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/styles.dev.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">

        <script src="<?php echo get_template_directory_uri(); ?>/assets/dist/main.dev.js"></script>
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/styles.css">
    <?php endif; ?>    

</head>

<body <?php body_class(); ?>>

    <?php if( is_page('punta-cana-gyrofly') ): ?>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasShare" aria-labelledby="offcanvasShareLabel">
            <div class="offcanvas-header text-center">
                <h5 class="offcanvas-title ms-auto" id="offcanvasExampleLabel">Compartir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-center">
                <?php echo do_shortcode('[addtoany]'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="menu-container">
                
                <?php

                wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'container' => '',
                    'depth'             => 2,
                    'menu_class' => 'navbar-nav mx-auto mb-0 mb-lg-0',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));

                ?>
            </div>

            <div class="mt-5">
                <!-- Switch de idiomas -->
                <?php get_template_part('parts/part/header', 'lang.switch', array( 'offcanvas'=> true ) ); ?>
            </div>

        </div>
    </div>

    <div class="top-bar d-none d-lg-block position-relative">
        <div class="container">

            <div class="d-flex align-items-center">

                <ul class="redes list-unstyled d-flex mb-0">
                    <li><a target="_blank" href="https://www.tiktok.com/@topetopdo"><i class="bi bi-tiktok"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/topetopdo/"><i class="bi bi-instagram"></i></a></li>
                    <li><a href=""><i class="bi bi-facebook"></i></a></li>
                </ul>

                <ul class="list-unstyled d-flex options ms-auto mb-0 align-items-center">
                    <li>
                        <a href="">
                            <i class="bi bi-telephone-fill"></i>
                            +1 (809) 555 5555
                        </a>
                    </li>

                    <li class="lang-switch dropdown">
                        <button class="d-flex dropdown-toggle p-0 border-0 bg-transparent" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-globe2"></i>
                            <span class="d-block">Español</span>
                            <i class="bi bi-chevron-down position-relative"></i>
                        </button>

                        <ul class="lang-list dropdown-menu">
                            <li><a class="d-block text-center py-1" href="">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header>

        <nav class="navbar navbar-expand-lg <?php echo ( is_front_page() ) ? '' : 'permanent-white bg-tt-white'; ?>">

            <!-- <div class="bg-blue-el"></div> -->

            <div class="container position-relative">

                <a class="navbar-brand me-auto" href="<?php echo get_home_url(); ?>">
                    <img class="logo-blanco d-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo de FIMED">
                    <svg class="logo-color d-none" xmlns="http://www.w3.org/2000/svg" width="142" height="30"
                        viewBox="0 0 142 30" fill="none">
                        <path
                            d="M130.633 1.87231C124.708 1.87231 119.905 6.66363 119.89 12.5814V29.8553H125.164V28.8316C125.164 25.8137 127.615 23.3591 130.633 23.3591C133.331 23.3591 135.797 22.3658 137.685 20.7217C139.945 18.7542 141.376 15.8505 141.376 12.6157C141.376 6.68266 136.566 1.87231 130.633 1.87231ZM130.633 18.0844C127.615 18.0844 125.164 15.6298 125.164 12.6119V12.5776C125.183 9.57877 127.627 7.14695 130.633 7.14695C133.639 7.14695 136.098 9.5978 136.098 12.6119C136.098 15.626 133.647 18.0844 130.633 18.0844Z"
                            fill="url(#paint0_linear_337_3652)" />
                        <path
                            d="M5.27464 15.2379C5.27464 19.7095 8.90904 23.4429 13.3807 23.4429V28.7175C6.00533 28.7175 0 22.6132 0 15.234V0H5.27464V9.25155H9.09552V14.5262H5.27464V15.2302V15.2379Z"
                            fill="url(#paint1_linear_337_3652)" />
                        <path
                            d="M22.9709 7.29163C25.985 7.29163 28.4396 9.74627 28.4396 12.7604C28.4396 15.7744 25.985 18.2291 22.9709 18.2291C19.9568 18.2291 17.5022 15.7744 17.5022 12.7604C17.5022 9.74627 19.9568 7.29163 22.9709 7.29163ZM22.9709 2.01318C17.0379 2.01318 12.2275 6.82353 12.2275 12.7565C12.2275 18.6896 17.0379 23.4999 22.9709 23.4999C28.9039 23.4999 33.7143 18.6896 33.7143 12.7565C33.7143 6.82353 28.9039 2.01318 22.9709 2.01318Z"
                            fill="url(#paint2_linear_337_3652)" />
                        <path
                            d="M47.1254 2.01709C41.2 2.01709 36.3972 6.80841 36.382 12.7262V30.0001H41.6567V28.9764C41.6567 25.9585 44.1075 23.5038 47.1254 23.5038C49.8236 23.5038 52.2897 22.5106 54.1773 20.8665C56.4378 18.899 57.8688 15.9953 57.8688 12.7605C57.8688 6.82743 53.0584 2.01709 47.1254 2.01709ZM47.1254 18.2292C44.1075 18.2292 41.6567 15.7745 41.6567 12.7566V12.7224C41.6757 9.72354 44.1189 7.29172 47.1254 7.29172C50.1319 7.29172 52.5903 9.74256 52.5903 12.7566C52.5903 15.7707 50.1395 18.2292 47.1254 18.2292Z"
                            fill="url(#paint3_linear_337_3652)" />
                        <path
                            d="M70.945 2.01318C65.012 2.01318 60.2017 6.82353 60.2017 12.7565C60.2017 18.6896 65.012 23.4999 70.945 23.4999V18.2253C67.9271 18.2253 65.4763 15.7744 65.4763 12.7565C65.4763 9.73866 67.9271 7.28782 70.945 7.28782C73.0077 7.28782 74.8002 8.42952 75.7325 10.1192H70.945V15.3939H81.3573C81.5742 14.549 81.6884 13.6661 81.6884 12.7565C81.6884 11.847 81.5742 10.9641 81.3573 10.1192C80.1852 5.4611 75.9647 2.01318 70.945 2.01318Z"
                            fill="url(#paint4_linear_337_3652)" />
                        <path
                            d="M89.8592 15.2379C89.8592 19.7095 93.4936 23.4429 97.9652 23.4429V28.7175C90.5899 28.7175 84.5845 22.6132 84.5845 15.234V0H89.8592V9.25155H93.6801V14.5262H89.8592V15.2302V15.2379Z"
                            fill="url(#paint5_linear_337_3652)" />
                        <path
                            d="M107.042 7.29163C110.056 7.29163 112.51 9.74627 112.51 12.7604C112.51 15.7744 110.056 18.2291 107.042 18.2291C104.028 18.2291 101.573 15.7744 101.573 12.7604C101.573 9.74627 104.028 7.29163 107.042 7.29163ZM107.042 2.01318C101.109 2.01318 96.2983 6.82353 96.2983 12.7565C96.2983 18.6896 101.109 23.4999 107.042 23.4999C112.975 23.4999 117.785 18.6896 117.785 12.7565C117.785 6.82353 112.975 2.01318 107.042 2.01318Z"
                            fill="url(#paint6_linear_337_3652)" />
                        <defs>
                            <linearGradient id="paint0_linear_337_3652" x1="130.633" y1="1.87231" x2="130.633"
                                y2="29.8553" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#005CAB" />
                                <stop offset="0.27" stop-color="#005FAA" />
                                <stop offset="0.49" stop-color="#0069A8" />
                                <stop offset="0.69" stop-color="#007AA4" />
                                <stop offset="0.88" stop-color="#00929F" />
                                <stop offset="1" stop-color="#00A69C" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_337_3652" x1="6.69035" y1="0" x2="6.69035" y2="28.7175"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#005CAB" />
                                <stop offset="0.27" stop-color="#005FAA" />
                                <stop offset="0.49" stop-color="#0069A8" />
                                <stop offset="0.69" stop-color="#007AA4" />
                                <stop offset="0.88" stop-color="#00929F" />
                                <stop offset="1" stop-color="#00A69C" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_337_3652" x1="22.9709" y1="2.01318" x2="22.9709"
                                y2="23.4999" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#005CAB" />
                                <stop offset="0.27" stop-color="#005FAA" />
                                <stop offset="0.49" stop-color="#0069A8" />
                                <stop offset="0.69" stop-color="#007AA4" />
                                <stop offset="0.88" stop-color="#00929F" />
                                <stop offset="1" stop-color="#00A69C" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_337_3652" x1="47.1254" y1="2.01709" x2="47.1254"
                                y2="30.0001" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#005CAB" />
                                <stop offset="0.27" stop-color="#005FAA" />
                                <stop offset="0.49" stop-color="#0069A8" />
                                <stop offset="0.69" stop-color="#007AA4" />
                                <stop offset="0.88" stop-color="#00929F" />
                                <stop offset="1" stop-color="#00A69C" />
                            </linearGradient>
                            <linearGradient id="paint4_linear_337_3652" x1="70.945" y1="2.01318" x2="70.945"
                                y2="23.4999" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#005CAB" />
                                <stop offset="0.27" stop-color="#005FAA" />
                                <stop offset="0.49" stop-color="#0069A8" />
                                <stop offset="0.69" stop-color="#007AA4" />
                                <stop offset="0.88" stop-color="#00929F" />
                                <stop offset="1" stop-color="#00A69C" />
                            </linearGradient>
                            <linearGradient id="paint5_linear_337_3652" x1="91.2749" y1="0" x2="91.2749" y2="28.7175"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#005CAB" />
                                <stop offset="0.27" stop-color="#005FAA" />
                                <stop offset="0.49" stop-color="#0069A8" />
                                <stop offset="0.69" stop-color="#007AA4" />
                                <stop offset="0.88" stop-color="#00929F" />
                                <stop offset="1" stop-color="#00A69C" />
                            </linearGradient>
                            <linearGradient id="paint6_linear_337_3652" x1="107.042" y1="2.01318" x2="107.042"
                                y2="23.4999" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#005CAB" />
                                <stop offset="0.27" stop-color="#005FAA" />
                                <stop offset="0.49" stop-color="#0069A8" />
                                <stop offset="0.69" stop-color="#007AA4" />
                                <stop offset="0.88" stop-color="#00929F" />
                                <stop offset="1" stop-color="#00A69C" />
                            </linearGradient>
                        </defs>
                    </svg>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php wp_nav_menu( array(
                        'theme_location' => 'main-menu',
                        'container' => '',
                        'depth'             => 2,
                        'menu_class' => 'navbar-nav mx-auto mb-0 mb-lg-0',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
                    ));

                    ?>

                    <div class="actions-area ms-auto d-lg-none d-xl-flex">
                        <a href="<?php echo get_home_url(); ?>/punta-cana-gyrofly"
                            class="btn anchor-link btn-primary text-small wide btn-border-radius fw-bold text-uppercase w-100 w-lg-fit-content">Reservar
                            ahora</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    