<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <!-- css -->
    <link rel="stylesheet" href="css/defaultcss/fonts.css">
    <link rel="stylesheet" href="css/defaultcss/display.css">
    <link rel="stylesheet" href="css/defaultcss/offcanvas.css">
    <link rel="stylesheet" href="css/defaultcss/navbar.css">
    <link rel="stylesheet" href="css/defaultcss/buttons.css">
    <link rel="stylesheet" href="css/defaultcss//inputs-forms.css">

    <link rel="stylesheet" href="css/announcement/breakpoints.css">
    <link rel="stylesheet" href="css/announcement/announcement.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.js"></script>

    <title>Announcement</title>
    
</head>
<body>
    <div class="announcement-cover">
        <div class="row w-100">
            <nav class="navbar navbar-expand-md navbar-dark" id="usernav">
                <div class="container-fluid">
                    <div class="logo navbar-brand">
                        <span class="font-mont font-bold">MSU-MSAT Registrar's Online Appointment</span>
                        <span class="font-small font-mont font-white location" href="#">Maigo, Lanao del Norte</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav font-mont ms-auto">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">About</a>
                                </li> 
                                <li class="nav-item">
                                    <a href="announcement.html" class="nav-link active">Announcements</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row w-100">
            <p class="title-announcement h1 mb-3 font-mont font-bold">ANNOUNCEMENTS</p>
        </div>
    </div>

    <div class="announcement-content row">
        <div class="col-lg-5 d-flex flex-column font-mont">
            <!-- lists of announcements  -->
            <div class="p-3 card-custom active mb-2">
                <p class="fs-5 font-bold">Closed Transactions on February 15, 2023</p>
                <p class="fs-6">
                    February 10, 2023
                </p>
            </div>
            <div class="p-3 card-custom mb-2">
                <p class="fs-5 font-bold">Closed Transactions on February 15, 2023</p>
                <p class="fs-6">
                    February 10, 2023
                </p>
            </div>
            <div class="p-3 card-custom mb-2">
                <p class="fs-5 font-bold">Closed Transactions on February 15, 2023</p>
                <p class="fs-6">
                    February 10, 2023
                </p>
            </div>
        </div>
        <!-- specific announcement content -->
        <div class="col-lg-7 px-5 py-3">
            <p class="fs-5 font-bold">Closed Transactions on February 15, 2023</p>
            <p class="fs-6 font-mont">
                February 10, 2023
            </p>
            <p class="fs-6 font-este mt-4 h-auto announcement-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, minima impedit tempore eius eveniet doloremque doloribus officiis rerum dolorem nostrum accusantium ullam dicta ducimus, sunt iure, eligendi tempora minus. Eveniet?<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis dignissimos rem, nulla sit nihil ipsa quae autem aut facere soluta sequi. Voluptatem harum, in dolores rem cum voluptatum quis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates velit, dicta officiis, repellat, esse molestiae libero numquam accusamus ullam minima iure. Quis nemo est veritatis porro vel laboriosam repudiandae labore!
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="js/announcement.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>