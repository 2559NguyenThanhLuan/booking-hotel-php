<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content name="keywords">
    <meta content name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary"
            style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <?php require 'shares/header.php'; ?>
    <!-- Navbar & Hero End -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6
                    class="section-title bg-white text-center text-primary px-3">Rooms</h6>
                <h1 class="mb-5">Awesome Rooms</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-2 mb-lg-0 mb-4 px-0">
                    <nav class="navbar navbar-expand-lg navbar-white bg-white shadow mb-3 rounded">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">FILTERS</h4>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                    <label class="form-label">Check-in</label>
                                    <input type="date" class="form-control shadow-none">
                                    <label class="form-label">Check-out</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Facility one</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f2">Facility two</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f3">Facility three</label>
                                    </div>
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <label class="form-label">Adults</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div class="">
                                            <label class="form-label">Chilren</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="img/rooms/1.jpg" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5>Simple Room Name</h5>
                                <div class="features mb-4">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2 Rooms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bathroms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Balcony
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        3 Sofa
                                    </span>
                                </div>
                                <div class="facilities mb-3">
                                    <h6 class="mb-3">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Television
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Room heater
                                    </span>
                                </div>
                                <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">$200 per night</h6>
                                <a href="#" class="btn btn-sm w-100 text-white bg-primary shadow-none mb-2">Book now</a>
                                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="img/rooms/1.jpg" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5>Simple Room Name</h5>
                                <div class="features mb-4">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2 Rooms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bathroms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Balcony
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        3 Sofa
                                    </span>
                                </div>
                                <div class="facilities mb-3">
                                    <h6 class="mb-3">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Television
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Room heater
                                    </span>
                                </div>
                                <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">$200 per night</h6>
                                <a href="#" class="btn btn-sm w-100 text-white bg-primary shadow-none mb-2">Book now</a>
                                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="img/rooms/1.jpg" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5>Simple Room Name</h5>
                                <div class="features mb-4">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2 Rooms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bathroms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Balcony
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        3 Sofa
                                    </span>
                                </div>
                                <div class="facilities mb-3">
                                    <h6 class="mb-3">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Television
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Room heater
                                    </span>
                                </div>
                                <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">$200 per night</h6>
                                <a href="#" class="btn btn-sm w-100 text-white bg-primary shadow-none mb-2">Book now</a>
                                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita.
                            Diam dolor diam ipsum sit. Aliqu diam amet diam
                            et eos. Clita erat ipsum et lorem et sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita.
                            Diam dolor diam ipsum sit. Aliqu diam amet diam
                            et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo magna dolore erat
                            amet</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2"
                            href>Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Tour</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control bg-transparent"
                                            id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email"
                                            class="form-control bg-transparent"
                                            id="email"
                                            placeholder="Your Email">
                                        <label for="email">Your
                                            Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date"
                                        id="date3"
                                        data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-transparent datetimepicker-input"
                                            id="datetime"
                                            placeholder="Date & Time"
                                            data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">Date &
                                            Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select
                                            class="form-select bg-transparent"
                                            id="select1">
                                            <option value="1">Destination
                                                1</option>
                                            <option value="2">Destination
                                                2</option>
                                            <option value="3">Destination
                                                3</option>
                                        </select>
                                        <label
                                            for="select1">Destination</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea
                                            class="form-control bg-transparent"
                                            placeholder="Special Request"
                                            id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Special
                                            Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button
                                        class="btn btn-outline-light w-100 py-3"
                                        type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp"
                data-wow-delay="0.1s">
                <h6
                    class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
                    data-wow-delay="0.1s">
                    <div
                        class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div
                            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor
                            diam ipsum sit diam amet diam eos erat ipsum et
                            lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
                    data-wow-delay="0.3s">
                    <div
                        class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div
                            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i
                                class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor
                            diam ipsum sit diam amet diam eos erat ipsum et
                            lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
                    data-wow-delay="0.5s">
                    <div
                        class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div
                            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor
                            diam ipsum sit diam amet diam eos erat ipsum et
                            lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->

    <!-- Footer Start -->
    <?php require 'shares/footer.php'; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script
        src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>