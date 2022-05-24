<?php include'template-parts/header.php';?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Kontaktiere uns</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Seite</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Kontakt</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1445.0986662933235!2d6.4382872568060865!3d51.17169361872981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8acb371d8b6e3%3A0xbf18de66b6155048!2sTime!5e0!3m2!1sde!2sde!4v1652797061360!5m2!1sde!2sde"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Kontaktiere uns</h6>
                    <h1 class="display-6 mb-4">Wenn Sie Fragen haben, kontaktieren Sie uns bitte</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quis magni eveniet quo? Dolorem voluptatibus perspiciatis exercitationem facilis quibusdam hic molestias optio. Ex, iure necessitatibus ea delectus autem suscipit rerum?</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="name" placeholder="Your Name">
                                    <label for="name">Ihren Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" id="email" placeholder="Your Email">
                                    <label for="email">Ihren Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject" placeholder="Subject">
                                    <label for="subject">Thema</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Nachricht</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Nachricht senden</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php include'template-parts/footer.php';?>