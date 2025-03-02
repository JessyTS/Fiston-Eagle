<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Urban Academia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="title">
        <meta content="" name="description">
        <link rel="shortcut icon" href="img/logo.PNG" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/notification.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
        <div class="notification-container"></div>
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <img src="img/logo.PNG" style="max-height: 50px;" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Urban Academia</a>
                    <a href="#about" class="nav-item nav-link">A propos</a>
                </div>
                <a href="#home" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                    <img src="img/logo.PNG" style="max-height: 90px;" alt="">
                </a>
                <div class="navbar-nav me-auto py-0">
                    <a href="#form" class="nav-item nav-link">Inscription</a>
                    <a href="#photo" class="nav-item nav-link">Galeries</a>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-light my-6 mt-0" id="home">
            <img class="logoHo logo2 d-none" src="img/logo.PNG" alt="">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-9 pb-0 pt-lg-0">
                        <img class="logoHero logo1 mb-3" src="img/logo.PNG" alt="">
                        <div class="text-white texthero display-6 mb-3">Inscrivez-vous dès maintenant et développez vos compétences en</div>
                        <h2 class="text-primary typed-text-output d-inline"></h2>
                        <div class="typed-text d-none">Lumière, Son, Production, Effet spéciaux, Animations texte, Ecriture script, Etalonnage, Montage</div>
                        <div class="d-flex align-items-center">
                            <a href="#form" class="btn btn-primary py-3 px-4 me-5">Je m'inscris</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="display-4 text-primary mb-4">Urban Academia</div>
                        <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Afordable Prices</p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>High Quality Product</p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>On Time Project Delivery</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <img class="img-fluid rounded" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                            <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">1234</h2>
                        </div>
                        <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.</p>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                            <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">1234</h2>
                        </div>
                        <p class="mb-0">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl pb-5" id="form">
            <div class="container py-5">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Inscrivez-vous</h1>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-2">Téléphone:</p>
                        <h3 class="fw-bold">+243 89 3900 599</h3>
                        <hr class="w-100">
                        <p class="mb-2">E-mail:</p>
                        <h3 class="fw-bold">contact@fistoneagle.com</h3>
                        <hr class="w-100">
                        <p class="mb-2">Nos réseaux:</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-4">Veuillez remplir ce formulaire. Vous serez ensuite redirigé vers notre terminal de paiement pour finaliser votre inscription. Une fois le paiement confirmé, toutes les informations vous seront envoyées instantanément sur WhatsApp.</p>
                        <form action="https://api-testbed.maxicashapp.com/PayEntryPost" method="POST">
                            <input type="hidden" name="PayType" value="MaxiCash">
                            <input type="hidden" name="Reference">
                            <input type="hidden" name="Currency" value="USD">
                            <input type="hidden" name="Amount" value="">
                            <input type="hidden" name="accepturl">
                            <input type="hidden" name="cancelurl">
                            <input type="hidden" name="declineurl">
                            <input type="hidden" name="MerchantID">
                            <input type="hidden" name="MerchantPassword">
                            <input type="hidden" name="Language" value="Fr">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="firstname" placeholder="Votre prénom" maxlength="50" required>
                                        <label for="firstname">Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="lastname" placeholder="Votre nom" maxlength="50" required>
                                        <label for="lastname">Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="Telephone" placeholder="Votre téléphone" maxlength="20" required>
                                        <label for="phone">Whatsapp (+243XXXXXXXXX)</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="Email" placeholder="Votre e-mail" maxlength="50" required>
                                        <label for="email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select form-select-lg" required>
                                        <option selected disabled value="">Quel est le domaine aimeriez-vous améliorer ?</option>
                                        <option value="0">Lumière</option>
                                        <option value="1">Son</option>
                                        <option value="2">Production</option>
                                        <option value="3">Effet spéciaux</option>
                                        <option value="4">Animations</option>
                                        <option value="5">Texte</option>
                                        <option value="6">Ecriture script</option>
                                        <option value="7">Etalonnage</option>
                                        <option value="8">Montage</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select class="form-select form-select-lg" required>
                                        <option selected disabled value="">Quel est votre niveau ?</option>
                                        <option value="0">Débutant</option>
                                        <option value="1">Intermédiaire</option>
                                        <option value="2">Senior</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5 w-100" type="submit">S'inscrire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-6 pt-5" id="photo">
            <div class="container">
                <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">My Projects</h1>
                    </div>
                </div>
                <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-1.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-2.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-3.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-4.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-5.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-6.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-xxl pt-5 px-0">
                <div class="bg-dark">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a class="border-bottom text-white" href="https://urbangospeldrc.com">Urban Gospel</a>, Tous droits réservés.</div>
                        <div class="col-md-6 text-center text-md-end">Conçu par <a class="border-bottom text-white" href="https://gvtechdrc.com/">GV Tech</a></div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="js/main.js"></script>
        <script type="module" src="js/notification.js"></script>
        <script type="module" src="js/function.js"></script>
        <script type="module" src="js/form.js"></script>
    </body>
</html>