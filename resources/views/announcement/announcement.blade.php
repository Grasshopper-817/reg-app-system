<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement | MSU-MSAT Registrar's Online Appointment</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/faqs-announcement/announcement.css">
    <link rel="stylesheet" href="css/faqs-announcement/fonts.css">
    
    <script src="https://kit.fontawesome.com/7856143440.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="announcement-cover">
        <div class="content">
            <div class="bar p-2">
                <div class="container d-flex flex-row align-items-center justify-content-between">
                    <div class="logo-container d-flex flex-row align-items-center">
                        <div class="logo">
                            <img class="image-fluid" src="/images/msat-logo.png" alt="">
                        </div>
                        <p class="text-wrap font-body font-quick font-bold fs-6 font-white ps-3 m-0">MSU-MSAT Registrar's Online Appointment</p>
                    </div>
                </div>
            </div>
            <div class="head container d-flex flex-column align-items-center justify-content-center font-white">
                <p class="display-2 font-corm font-bold">Announcements</p>
                <p class="h4 font-corm">Latest News and Updates</p>
            </div>
        </div>
    </div>

    <div class="announcement-content row">
        <div class="col-md-4">
            <div class="list-group list-group-flush d-none d-md-block">
                <a class="list-group-item list-group-item-action active">The system is down for whole week from April 7 - 14, 2023</a>
                <a class="list-group-item list-group-item-action">Closed Transaction on April 12, 2023</a>
                <a class="list-group-item list-group-item-action">Closed Transaction on Friday the 13th</a>
                <a class="list-group-item list-group-item-action">There will be an event for February 14th, the transaction will be closed</a>
                <a class="list-group-item list-group-item-action">Closed Transaction for Holiday January 30, 2023</a>
            </div>
            <div class="dropdown d-md-none w-100 row mb-4">
                <button class="btn dropdown-toggle" type="button" id="dropdownAnnouncement"  data-bs-toggle="dropdown" aria-expanded="false">
                  Announcements
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownAnnouncement">
                  <a class="dropdown-item active" href="#">The system is down for whole week from April 7 - 14, 2023</a>
                  <a class="dropdown-item" href="#">Closed Transaction on April 12, 2023</a>
                  <a class="dropdown-item" href="#">Closed Transaction on Friday the 13th</a>
                  <a class="dropdown-item" href="#">There will be an event for February 14th, the transaction will be closed</a>
                  <a class="dropdown-item" href="#">Closed Transaction for Holiday January 30, 2023</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="post-title " class="h4 font-bold font-karma pt-2">
                The system is down for whole week from April 7 - 14, 2023
            </div>
            <small id="post-date" class="font-karma row m-0 p-0">Posted on: April 6, 2023</small>
            <pre id="post-content" class="pt-4 font-nun fs-6 text-justify">Attention students, faculty, and staff: 
                
                This is an important announcement from the Office of the Registrar. Due to necessary maintenance and upgrades, our registration system will be temporarily down for one week, starting Monday, April 10th at 8:00 am and ending Monday, April 17th at 8:00 am. 
                
                During this time, you will not be able to register for classes, drop or add classes, or make any changes to your schedule. Additionally, we will not be able to process any requests for official transcripts, diplomas, or other documents during this time. 
                
                If you need these documents urgently, please make sure to submit your request before the system goes down. We apologize for any inconvenience this may cause and ask for your patience as we work to improve our system for the benefit of the entire university community. 
                
                Thank you for your understanding and cooperation.
            </pre>
        </div>
    </div>






    <!-- contact us section -->
    <div class="fixed-bottom" id="contactus">
        <button class="btn font-sanc" id="btn-support" data-bs-toggle="modal" data-bs-target="#contact-us-modal">
            <i class="fa-regular fa-message icon-support"></i>
        </button>
    </div>
    <div class="modal fade" id="contact-us-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content modal-dialog-confirm modal-confirm-padding">
                <div class="modal-body text-center m-0 p-4">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <h1 class="modal-title fs-3 font-white font-nun" id="staticBackdropLabel">Contact Us</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="d-flex flex-column align-items-start pt-3">
                        <label for="inputName">Full Name</label>
                        <input class="form-control" name="inputName" id="inputName" type="text" value="" aria-label="default input example" placeholder="">
                        <label for="inputEmail" class="pt-2">Email</label>
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="">
                        <label for="inputMessage" class="pt-2">Message</label>
                        <textarea type="text" class="form-control" name="inputMessage" id="inputMessage" placeholder=""></textarea>
                    </div>
                    <div class="d-flex flex-row justify-content-end pt-3">
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Back</button>
                        <button type="submit" class="btn btn-submit ms-3">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="js/navbar.js"></script>
    <script src="js/faqs/faqs.js"></script>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
</body>
</html>