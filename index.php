<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Étude notariale de Me Sara Ahmanna - Services de droit immobilier, commercial, urbanisme et fiscalité à Marrakech">
    <meta name="keywords" content="notaire, Marrakech, droit immobilier, fiscalité, droit commercial">

    <title>Étude Notariale - Me Sara Ahmanna | Services Notariaux à Marrakech</title>

    <!-- Preload critical resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="assets/css/style.css" as="style">

    <!-- Bootstrap CSS with integrity check -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Font Awesome with integrity check -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Skip to content link for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>

    <?php include 'includes/header.php'; ?>

    <main id="main-content" class="container-fluid px-0">
        <!-- Hero Section -->
        <!-- Hero Banner with Overlay and CTA -->
        <section class="hero-section">
            <img src="https://www.selexium.com/app/uploads/2022/07/media-notaire-entreprise.jpg" class="hero-image"
                alt="Étude notariale de Me Sara Ahmanna" loading="eager">

            <div class="hero-content">
                <h1 class="hero-title">Étude Notariale<br>Maître Abdallah EL Gamani</h1>
                <a href="appointment.php" class="btn btn-dark btn-lg hero-btn">
                    Prendre Rendez-vous <i class="fas fa-calendar-check ms-2"></i>
                </a>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services py-5 bg-light" id="services" aria-labelledby="services-heading">
            <div class="container">
                <h1 id="services-heading" class="text-center mb-5">Nos Services</h1>
                <div class="row g-4 justify-content-center">
                    <!-- Service Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <article class="card h-100 shadow-sm">
                            <img class="card-img-top img-fluid"
                                src="https://media.istockphoto.com/id/1057613520/fr/photo/bon-service-coop%C3%A9ration-consultation-de-la-femme-daffaires-et-le-m%C3%A2le-conseiller-avocat-ou.jpg?s=612x612&w=0&k=20&c=JAi_ZA5wZSbVW6l2zdkfR4ERCtjJsX5Io_MdtWd1Skw="
                                alt="Fiscalité Immobilière" loading="lazy" width="600" height="456">
                            <div class="card-body">
                                <h2 class="card-title text-center py-3 h4">Fiscalité Immobilière</h2>
                                <p class="card-text">Avant de réaliser une opération immobilière, le notaire est tenu
                                    d'informer ses clients sur la fiscalité applicable à l'opération envisagée, qu'il
                                    s'agisse de la fiscalité applicable au vendeur ou de celle concernant l'acquéreur.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <article class="card h-100 shadow-sm">
                            <img class="card-img-top img-fluid"
                                src="https://cdn.sanity.io/images/n2i0cmq4/production/799691fdd07bb5df8bec399212e39359cb14afec-1000x667.jpg?fm=webp&fit=clip&auto=format"
                                alt="Droit Commercial" loading="lazy" width="600" height="456">
                            <div class="card-body">
                                <h2 class="card-title text-center py-3 h4">Droit Commercial</h2>
                                <p class="card-text">Accompagnement juridique pour les entreprises dans leurs opérations
                                    commerciales, rédaction de contrats, et conseils en matière de conformité légale.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <article class="card h-100 shadow-sm">
                            <img class="card-img-top img-fluid"
                                src="https://media.istockphoto.com/id/1332309817/fr/photo/plaque-signal%C3%A9tique-du-notaire.jpg?s=612x612&w=0&k=20&c=CdbtENZ6Qvsvhd5zEUUesC7KciUtPuwpiDZzGFrlRO4="
                                alt="Droit d'Urbanisme" loading="lazy" width="600" height="456">
                            <div class="card-body">
                                <h2 class="card-title text-center py-3 h4">Droit d'Urbanisme</h2>
                                <p class="card-text">Conseils et assistance dans les démarches administratives liées à
                                    l'urbanisme, permis de construire, et régularisation de situations.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section style="border-top: 1px solid #e9ecef;" class="about py-2" id="about" aria-labelledby="about-heading">
            <div class="container">
                <h1 id="about-heading" class="text-center mb-4">À Propos</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <article class="text-start">
                            <p>Maître Abdallah EL GAMANI est un notaire expérimenté basé à Agadir, offrant des services
                                juridiques et notariaux de haute qualité depuis son cabinet situé au cœur de la ville.
                                Spécialisé dans le droit immobilier, les transactions commerciales, les contrats
                                familiaux et les successions, Maître EL GAMANI accompagne ses clients avec
                                professionnalisme, rigueur et une expertise approfondie des lois marocaines.

                                Son étude notariale, située au 98, Imm (AFENSOU) Angle Bd. Hassan I et Rue EI Ghazali,
                                2ᵉ étage, N°3 – Dakhla, Agadir 80000, est reconnue pour son approche personnalisée et
                                son engagement envers la transparence et la sécurité juridique. Que vous soyez un
                                particulier, une entreprise ou un investisseur, Maître EL GAMANI et son équipe vous
                                conseillent avec précision pour toutes vos démarches notariales.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section style="border-top: 1px solid #e9ecef;" class="contact py-5 bg-light" aria-labelledby="contact-heading">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 id="contact-heading" class="mb-4">Contactez-nous</h2>

                        <address class="d-flex flex-column gap-4">
                            <div class="contact-item d-flex align-items-start gap-3">
                                <div class="mt-1"><i class="fa-solid fa-compass fa-lg text-primary"></i></div>
                                <div>
                                    <h3 class="h6 mb-1">Adresse</h3>
                                    <p class="mb-0">98, Imm (AFENSOU) Angle Bd. Hassan I<br>
                                        et Rue EI Ghazali, 2ème étage, N°3 - Dakhla<br>
                                        Agadir 80000</p>
                                </div>
                            </div>

                            <div class="contact-item d-flex align-items-start gap-3">
                                <div class="mt-1"><i class="fa-solid fa-phone fa-lg text-primary"></i></div>
                                <div>
                                    <h3 class="h6 mb-1">Téléphone</h3>
                                    <p class="mb-0">
                                        <a href="tel:+212528220101">+212 (0) 5 28 22 01 01</a><br>
                                        <a href="tel:+212528224323">+212 (0) 5 28 22 43 23</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-item d-flex align-items-start gap-3">
                                <div class="mt-1"><i class="fa-solid fa-envelope fa-lg text-primary"></i></div>
                                <div>
                                    <h3 class="h6 mb-1">Email</h3>
                                    <p class="mb-0"><a href="mailto:etudegamani@gmail.com">etudegamani@gmail.com</a></p>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-3 mt-3">
                                <a href="#rdv-form" class="btn btn-primary btn-lg flex-grow-1">Prenez Rendez-vous <i
                                        class="fas fa-chevron-down ms-2"></i></a>
                                <a href="#contact-form" class="btn btn-outline-primary btn-lg flex-grow-1">Envoyer
                                    Message <i class="fas fa-chevron-down ms-2"></i></a>
                            </div>
                        </address>
                    </div>

                    <div class="col-lg-6">
                        <div id="map" class="rounded shadow-sm" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <!-- Leaflet JS with integrity check -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Bootstrap Bundle JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <!-- Main JS -->
    <script src="assets/js/script.js" defer></script>
</body>

</html>