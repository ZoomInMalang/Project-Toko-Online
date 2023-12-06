<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aniflex</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/vegas.min.css" rel="stylesheet">

    <link href="css/tooplate-barista.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Aniflex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="koleksi.php">Koleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="koleksi.php">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="koleksi.php">Koleksi</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <main>

        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12 mx-auto">
                        <em class="small-text">welcome to Aniflex.org</em>

                        <h1>Aniflex</h1>

                        <p class="text-white mb-4 pb-lg-2">
                            your <em>favourite</em> coffee daily lives.
                        </p>

                        <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="#section_2">
                            Our Story
                        </a>

                        <a class="btn custom-btn smoothscroll me-2 mb-2" href="#barista-team"><strong>Watch Now</strong></a>
                    </div>

                </div>
            </div>

            <div class="hero-slides"></div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12">
                        <div class="ratio ratio-1x1">
                            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                                <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>

                            <div class="about-video-info d-flex flex-column">
                                <h4 class="mt-auto">We Started Since 2009.</h4>

                                <h4>Best Cafe in Klang.</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                        <em class="text-white">Barista.co</em>

                        <h2 class="text-white mb-3">Cafe KL</h2>

                        <p class="text-white">The café had been in the town for as long as anyone could remember, and it had become a beloved institution among the locals.</p>

                        <p class="text-white">The café was run by a friendly and hospitable couple, Mr. and Mrs. Johnson. Barista Cafe is free Bootstrap 5 HTML layout provided by <a rel="nofollow" href="https://www.tooplate.com" target="_blank">Tooplate</a>.</p>

                        <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet Baristas</a>
                    </div>

                </div>
            </div>
        </section>


        <section class="barista-section section-padding section-bg" id="barista-team">
            <div class="container">
                <div class="row justify-content-center">

                    <?php
                    include "koneksi.php";
                    $qry_buku = mysqli_query($conn, "select * from daftar");
                    while ($dt_buku = mysqli_fetch_array($qry_buku)) {
                    ?>

                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <a href="detail.php?id_daftar=<?= $dt_buku['id_daftar'] ?>">

                                <div class="team-block-wrap">

                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0"><?= $dt_buku['judul'] ?></h4>
                                        </div>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/<?= $dt_buku['foto'] ?>" class="team-block-image img-fluid" alt="">
                                    </div>

                                </div>
                            </a>
                        </div>

                    <?php
                    }
                    ?>



                </div>
            </div>
        </section>





        <section class="contact-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <em class="text-white">Say Hello</em>
                        <h2 class="text-white mb-4 pb-lg-2">Contact</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <form action="#" method="post" class="custom-form contact-form" role="form">

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                    <input type="text" name="name" id="name" class="form-control" placeholder="Jackson" required="">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jack@gmail.com" required="">
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">How can we help?</label>

                                    <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>

                                </div>
                            </div>

                            <div class="col-lg-5 col-12 mx-auto mt-3">
                                <button type="submit" class="form-control">Send Message</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5039.668141741662!2d72.81814769288509!3d19.043340656729775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c994f34a7355%3A0x2680d63a6f7e33c2!2sLover%20Point!5e1!3m2!1sen!2sth!4v1692722771770!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </section>


        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 me-auto">
                        <em class="text-white d-block mb-4">Where to find us?</em>

                        <strong class="text-white">
                            <i class="bi-geo-alt me-2"></i>
                            Bandra West, Mumbai, Maharashtra 400050, India
                        </strong>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://x.com/minthu" target="_new" class="social-icon-link bi-twitter">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                        <em class="text-white d-block mb-4">Contact Us </em>

                        <p class="d-flex mb-1">
                            <strong class="me-2">Phone:</strong>
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                (65)
                                305 2409 671
                            </a>
                        </p>

                        <p class="d-flex">
                            <strong class="me-2">Email:</strong>

                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                hello@barista.co
                            </a>
                        </p>
                    </div>


                    <div class="col-lg-5 col-12">
                        <em class="text-white d-block mb-4">Opening Hours.</em>

                        <ul class="opening-hours-list">
                            <li class="d-flex">
                                Monday - Friday
                                <span class="underline"></span>

                                <strong>9:00 - 18:00</strong>
                            </li>

                            <li class="d-flex">
                                Saturday
                                <span class="underline"></span>

                                <strong>11:00 - 16:30</strong>
                            </li>

                            <li class="d-flex">
                                Sunday
                                <span class="underline"></span>

                                <strong>Closed</strong>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8 col-12 mt-4">
                        <p class="copyright-text mb-0">Copyright © Barista Cafe 2048
                            - Design: <a rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a></p>
                    </div>
                </div>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>