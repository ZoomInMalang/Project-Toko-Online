<?php

include "koneksi.php";
$qry_detail_buku = mysqli_query($conn, "select * from daftar where id_daftar = '" . $_GET['id_daftar'] . "'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/vegas.min.css" rel="stylesheet">

    <link href="css/tooplate-barista.css" rel="stylesheet">

</head>

<body>

    <main>
        <?php
        include 'header.php';
        ?>

        <section class="about-section section-padding" id="section_2">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12">
                        <div class="ratio ratio-1x1">
                            <div class="team-block-image-wrap">
                                <img src="images/<?= $dt_buku['foto'] ?>" class="team-block-image img-fluid" alt="">
                            </div>

                            <div class="about-video-info d-flex flex-column">
                                <h4 class="mt-auto"><?= $dt_buku['judul'] ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                        <em class="text-white">Barista.co</em>

                        <h2 class="text-white mb-3"><?= $dt_buku['judul'] ?></h2>

                        <p class="text-white"><?= $dt_buku['deskripsi_singkat'] ?></p>

                        <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet Baristas</a>
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
                        <em class="text-white d-block mb-4">Contact</em>

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