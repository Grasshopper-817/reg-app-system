
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSU-MSAT Online Appointment</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <!-- defaultcss -->
    <link rel="stylesheet" href="{{ asset('css/defaultcss/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/defaultcss/display.css') }}">
    <link rel="stylesheet" href="{{ asset('css/defaultcss/offcanvas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/defaultcss/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/defaultcss/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/defaultcss/input-forms.css') }}">

    <!-- homepage -->
    <link rel="stylesheet" href="{{ asset('css/homepage/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage/breakpoints.css') }}">


    <!-- others, modal and id="appointment01" -->
    <link rel="stylesheet" href="{{ asset('css/homepage/appointment01/articles-list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage/appointment01/document-list.css') }}">

    <link rel="stylesheet" href="{{ asset('css/homepage/modal.css') }}">

    {{-- <script src="https://kit.fontawesome.com/7856143440.js" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('https://kit.fontawesome.com/7856143440.js') }}" crossorigin="anonymous"></script>

    <script src="jquery/jquery-3.6.4.js"></script>
</head>
<body>
    <!-- HOMEPAGE SECTION -->
    <div class="homepage-cover">
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
                                    <a href="index.html" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about-sect" class="nav-link">About</a>
                                </li> 
                                <li class="nav-item">
                                    <a href="announcement.html" class="nav-link">Announcements</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row content-cover">
            <div class="col-md-6 con1-pad">
                <div class="container announcement" id="announcement-sect">
                    <p class="head font-mont title font-bold">ANNOUNCEMENTS</p>
                    <div class="row notice">
                        <p class="title font-mont font-semibold" id="postTitle">Closed Transactions on February 15, 2023</p>
                        <p class="font-mont font-small date" id="datePosted">February 10, 2023</p>
                        <p class="font-small subtitle" id="postSubtitle">Please be informed that the Office of the Registrar will be closed for transactions on Friday, February 15, 2023. This is due to the scheduled upgrade of our information.</p>
                        <button class="btn ms-auto font-small" id="btn-readMore">Read More</button>
                    </div>
                    <div class="row notice">
                        <p class="title font-mont font-semibold" id="postTitle">Closed Transactions on February 15, 2023</p>
                        <p class="font-mont font-small date" id="datePosted">February 10, 2023</p>
                        <p class="font-small subtitle" id="postSubtitle">Please be informed that the Office of the Registrar will be closed for transactions on Friday, February 15, 2023. This is due to the scheduled upgrade of our information.</p>
                        <button class="btn ms-auto font-small" id="btn-readMore">Read More</button>
                    </div>
                </div>
            </div>
            <!-- WELCOME -->
            <div class="col-md-6 make-appoint">
                <p class="display-text font-mont font-bold font-white">Make Your Online <br>Appointment <br>Now</p>
                <button href="#app-form" class="btn" id="btn-make-appoint">Click Here</button>
            </div>
        </div>
    </div>

    <!-- APPOINTMENT SECTION-->
    <div class="row w-100 appointment">
        <!-- ang mga appointment forms naa diri -->
        <div class="col-lg-8 appointment-forms">
            <div id="app-form">
                <div class="display-text font-white font-bold font-mont">MAKE AN APPOINTMENT</div>
                <form id="appointment-form" method="POST">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" id="inputFirstName" placeholder="">
                        </div>
                        <div class="col-lg-3">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" id="inputLastName" placeholder="">
                        </div>
                        <div class="col-lg-3">
                            <label for="inputMiddleName">Middle Name</label>
                            <input type="text" class="form-control" id="inputMiddleName" placeholder="">
                        </div>
                        <div class="col-lg-2">
                            <label for="inputSuffix">Suffix</label>
                            <input type="text" class="form-control" id="inputSuffix" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label for="inputCivilStatus">Civil Status</label>
                            <input type="text" class="form-control" id="inputCivilStatus" placeholder="">
                        </div>
                        <div class="col-lg-8">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label for="inputCpNo">Cellphone No.</label>
                            <input type="tel" class="form-control" id="inputCpNo" placeholder="">
                        </div>
                        <div class="col-lg-8">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="inputGender">Gender</label>
                            <input type="text" class="form-control" id="inputGender" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label for="inputBirthdate">Birthdate</label>
                            <input type="date" class="form-control" id="inputBirthdate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label for="inputStudentStatus">Status</label>
                            <select class="form-control" id="inputStudentStatus">
                            <option value="">Choose...</option>
                            <option value="Undergraduate">Undergraduate</option>
                            <option value="Graduate">Graduate</option>
                            <option value="High School">High School</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputCourse">Course</label>
                            <select class="form-control" id="inputCourse">
                            <option value="">Choose...</option>
                            <option value="BSCS">Bachelor of Science in Computer Science</option>
                            <option value="BSIT">Bachelor of Science in Industrial Technology</option>
                            </select>
                        </div>
                        <div class="col-lg-4 " id="input-acadYear">
                            <label for="inputAcadYear">Academic Year</label>
                            <input type="text" class="form-control" id="inputAcadYear" placeholder="">
                        </div>
                        <div class="col-lg-4 " id="input-gradYear">
                            <label for="inputAcadYear">Year Graduated</label>
                            <input type="text" class="form-control" id="inputGradYear" placeholder="">
                        </div>
                    </div>
            
                </form>
            </div>
        </div>

        <!-- ARTICLES AND DOCUMENTS *************** -->
        <div class="col-lg-4 appointment01">
            <!-- ang articles before moproceed sa list sa documents para marequest -->
            <div class="appointment-articles">
                <div id="articles-section">
                    <div class="articles-content">
                        <div class="msat-logo"><img src="{{ asset('images/msat-logo.png') }}" alt="MSAT logo"></div>
                        <div class="row w-100 article-list">
                            <div class="font-title font-mont font-white font-bold">READ THE ARTICLES TO PROCEED</div>
                            <div class="article">
                                <p>How to make an Appointment?</p><button class="btn">>></button>
                            </div>
                            <div class="article">
                                <p>What are the requirements?</p><button class="btn">>></button>
                            </div>
                            <div class="article">
                                <p>Document Fees.</p><button class="btn">>></button>
                            </div>
                        </div>
                        <div class="row w-100 proceed">
                            <button class="btn ms-auto btn-proceed" type="submit" id="article-btnproceed" onclick="documentSect(); appointment_form(event);">PROCEED</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- list sa documents mao ni pgmaclick ang button na proceed -->
            <div class="document-section" id="document-section">
                <div class="document-list">
                    <!-- any suggestions about sa pguncheck sa modal if mapress ang back button-->
                    <div class="check-custom">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="documents" id="Transcript">
                            <label for="transcript" class="form-check-label">Transcript</label>
                        </div> 
                    </div>
                    <div class="check-custom">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="documents" id="diploma">
                            <label for="diploma" class="form-check-label" >Diploma</label>
                        </div> 
                    </div>
                    <div class="check-custom">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="documents" id="form137">
                            <label for="form137" class="form-check-label">Certification / Form 137</label>
                        </div> 
                    </div>
                </div>
                <div class="app-btn">
                    <button class="btn-proceed btn" type="button" onclick="articleSect()">
                        Back
                    </button>
                    <button class="btn-proceed btn" type="button" data-bs-toggle="modal" data-bs-target="#calendar-modal">
                        Proceed
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT SECTION -->
    <div class="about row">
        <div class="col-md-6 about-details">
            <div class="about-title display-text font-mont font-bold">MSU-MSAT Registrar</div>    
            <div class="about-subtitle font-este font-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptates distinctio reiciendis fugit sed, itaque saepe veritatis id in ullam nostrum autem animi praesentium. Iste sit eum sed placeat eaque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, suscipit culpa! Voluptate tempora vitae fugiat excepturi, nisi eum quod totam eaque ea at. Similique fugiat at, doloribus dolores itaque possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora quisquam fugiat delectus deleniti distinctio! Voluptas animi sunt natus nam adipisci, corrupti quod asperiores necessitatibus corporis modi quas omnis aperiam nulla!</p>
            </div>
        </div>
        <div class="col-md-6 about-image">
        </div>
    </div>

    <!-- CONTACT US SECTION floating button-->
    <div class="fixed-bottom" id="contactus">
        <div class="contactus-form">
            <div class="head">
                Contact Us
            </div>
            <div class="body">
            </div>
        </div>
        <button class="btn font-mont" id="btn-support">
            <i class="fa-regular fa-message icon-support"></i>
            <p>Contact Us</p>
        </button>
    </div>

    <!-- MODAL SECTION -->
    <!-- req-purpose -->
    <div class="modal fade" id="req-purposes-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="req-purpose-title" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-mont font-bold" id="req-purpose-title">Transcript of Records</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="h5 font-bold font-mont">Requirements</p>
              <p class="fs-6 text-justify font-este">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio earum veniam commodi rerum facilis, quaerat reiciendis laborum, modi blanditiis vitae rem ad atque eos totam voluptatibus fuga pariatur ipsum aliquid.</p>
              <ul>
                <li>Clearance</li>
                <li>ID</li>
              </ul>
              <p class="fs-6 text-justify font-este">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet similique qui ea dicta quod! Distinctio ab sed facere, necessitatibus illum animi asperiores sequi aperiam nemo reiciendis, cum nobis! Quasi, dolorum!
              </p>
              <p class="fs-6 font-bold font-mont mt-3">Please state the purpose of your request for this document.</p>
              <form method="post" class="mt-2" id="document-form">
                <div class="form-floating font-black font-bold font-mont">
                  <textarea class="form-control" placeholder="Purpose" id="floatingTextarea" name="purposeInput"></textarea>
                  <label for="floatingTextarea">Purpose</label>
                </div>
                <div class="form-floating mt-3 font-black font-bold font-mont">
                  <input type="text" class="form-control" id="floatingInput" name="purposeAcadYearInput" placeholder="2023">
                  <label for="floatingInput">Academic Year</label>
                </div>
      
                <!-- Graduate/Undergraduate -->
                <div class="form-group row" id="college-form">
                  <div class="col-lg-12 d-flex align-items-center custom-form-group">
                      <p class="font-small font-mont">Before MSU-MSAT, did you study in a different college?</p>
                      <div>
                          <label>
                              <input type="radio" name="isATransfer" value="yes">
                              Yes
                          </label>
                          <label>
                              <input type="radio" name="isATransfer" value="no">
                              No
                          </label>
                      </div>
                  </div>
                  <div class="col-lg-12" id="ATransferSchool">
                      <label for="inputAcadYear">Please indicate school</label>
                      <input type="text" class="form-control" id="inputATransferSchool" placeholder="">
                  </div>
      
                  <div class="col-lg-12 d-flex align-items-center custom-form-group">
                      <p class="font-small font-mont">After MSU-MSAT, did you study in a different college?</p>
                      <div>
                          <label>
                              <input type="radio" name="isBTransfer" value="yes">
                              Yes
                          </label>
                          <label>
                              <input type="radio" name="isBTransfer" value="no">
                              No
                          </label>
                      </div>
                  </div>
                  <div class="col-lg-12" id="BTransferSchool">
                      <label for="inputAcadYear">Please indicate school</label>
                      <input type="text" class="form-control" id="inputBTransferSchool" placeholder="">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-proceed" data-bs-dismiss="modal" id="back-btn">Back</button>
              <button type="button" class="btn btn-proceed" name="proceed-docPurpose"  data-bs-dismiss="modal">Proceed</button>
            </div>
          </div>
        </div>
    </div>

    <!-- CAlendar -->
    <div class="modal fade" id="calendar-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="req-purpose-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-mont font-bold" id="req-purpose-title">Calendar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-proceed" data-bs-dismiss="modal">Back</button>
              <button type="button" class="btn btn-proceed" name="proceed-docPurpose" data-bs-toggle="modal" data-bs-target="#review-modal">Proceed</button>
            </div>
          </div>
        </div>
    </div>
      
    <!-- review modal -->
    <div class="modal fade" id="review-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="req-purpose-title" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-mont font-bold" id="req-purpose-title">Review</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h1 class="h5 font-bold font-mont">Personal Information</h1>
              <div class="d-flex flex-column">
                <span class="font-bold mr-5">First Name: </span><small>Meriflor</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Middle Name: </span><small>Nonong</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Last Name: </span><small>Gonoy</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Suffix Name: </span><small></small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Civil Status: </span><small>Single</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Address: </span><small>P3 Libertad Kolambugan, Lanao del Norte</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Cellphone Number: </span><small>09559381788</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Email: </span><small>mgonoy13@gmail.com</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Gender: </span><small>Female</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Birthdate: </span><small>November 21, 2021</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Status: </span><small>Undergraduate</small>
              </div>
              <div class="d-flex flex-column">
                <span class="fs-6 font-bold">Course: </span><small>Bachelor of Science in Computer Science</small>
              </div>
              <!-- condition here if ang student is undergrad, or graduate -->
              <div class="d-flex flex-column" id="acadYearSect">
                <span class="fs-6 font-bold">Academic Year: </span><small>2022-2023</small>
              </div>
              <div class="" id="gradYearSect">
                <span class="fs-6 font-bold">Year Graduated: </span><small></small>
              </div>
              
              <div id="document-requested">
                <h1 class="h5 font-mont mt-5 font-bold">Document Requested Title (ex. TOR)</h1>
                <small class="text-justify">
                  Requirements hereeee,, Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, atque odit. Et minus similique possimus assumenda quo blanditiis necessitatibus vel tenetur alias odio harum nihil accusamus quisquam, dolorem inventore ea?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse pariatur voluptatum repudiandae temporibus odit, quasi, nemo eius necessitatibus labore tenetur delectus? Rem similique aliquid cum. Mollitia ad molestias expedita amet.
                </small>
              </div>
    
              <!-- example ikaduha na doc,,  -->
              <div id="document-requested">
                <h1 class="h5 font-mont mt-5 font-bold">Document Requested Title (ex. CAV)</h1>
                <small class="text-justify">
                  Requirements hereeee,, Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, atque odit. Et minus similique possimus assumenda quo blanditiis necessitatibus vel tenetur alias odio harum nihil accusamus quisquam, dolorem inventore ea?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse pariatur voluptatum repudiandae temporibus odit, quasi, nemo eius necessitatibus labore tenetur delectus? Rem similique aliquid cum. Mollitia ad molestias expedita amet.
                </small>
              </div>
              <div id="document-requested">
                <h1 class="h5 font-mont mt-5 font-bold">Scheduled Day</h1>
                <span class="fs-6 font-bold">Date: </span><small>March 20, 2023</small>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-proceed" data-bs-toggle="modal" data-bs-target="#calendar-modal">Back</button>
              <button type="button" class="btn btn-proceed" id="confirmReview" data-bs-toggle="modal" data-bs-target="#confirmed-modal">Confirm</button>
            </div>
          </div>
        </div>
    </div>
    
    <!-- confirmation modal -->
    <div class="modal fade" id="confirmed-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content modal-dialog-confirm modal-confirm-padding">
            <div class="modal-body text-center">
                <i class="fa-regular fa-circle-check fa-2xl mb-5" style="color: #ffffff;"></i>
                <p class="h5 font-bold-font-mont">Your appointment has been created.<br>Please proceed to the registrar's office on the scheduled day to claim or process your request, and remember to bring any necessary documents with you.</p>
                <p class="mt-5 font-este">If you have any questions or concerns, please don't hesitate to contact us.</p>
              <a type="button" class="btn btn-confirm mt-5" name="proceed-docPurpose" data-bs-dismiss="modal" id="confirm-btn">Confirm</a>
            </div>
            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="js/div-height.js"></script>
    <script src="js/form.js"></script>
    <script src="js/clear-inputs.js"></script>
    <script src="js/documents.js"></script>
    <script src="js/process/appointment.js"></script>
</body>
</html>