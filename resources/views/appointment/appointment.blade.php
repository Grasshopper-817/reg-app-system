 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Online Appointment</title>
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/dashboard/dasboard02.css">
    <link rel="stylesheet" href="css/dashboard/fonts.css">
    <link rel="stylesheet" href="css/dashboard/breakpoints.css">
    <link rel="stylesheet" href="css/dashboard/modal.css">

    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />

</head>
<body> 

    <!-- NAVBAR pan ni -->
    <div class="navbar-cover">
        <nav class="navbar navbar-expand-md navbar-dark p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <div class="d-flex flex-row justify-content-between align-items-center w-100 container py-4">
                    <div class="navbar-brand d-flex flex-row align-items-center">
                        <img src="/images/msat-logo.png" alt="">
                        <span class="font-mont font-bold mx-3 lh-10">MSU-MSAT Registrar's Online <br>Appointment</span>
                    </div>
                    <div class="button">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="menu w-100 py-2">
                    <div class="container d-flex flex-row justify-content-start">
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav font-mont">
                                    <li class="nav-item">
                                        <a href="#dashboard-doc-app" class="nav-link active" onclick="dashboardView()">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">FAQs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#appointment-records" class="nav-link" onclick="recordsView()">Appointments</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Meriflor G. 
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#edit-profile" onclick="profileView()">Edit Profile</a></li>
                                            <li><a class="dropdown-item" href="#account-settings" onclick="settingsView()">Account Settings</a></li>
                                            <li><a class="dropdown-item" href="logout">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- content sa user page,, mgchange2 gamit atung extend2 section2 chu2, idivide nlng daun palihog-->
    <div class="site-content d-flex justify-content-center container py-5">
        <!-- dashboard -->
        <div class="dashboard d-flex row flex-row w-100" id="dashboard">
            <div class="col-md-4 mb-4">
                <div class="accordion accordion-flush" id="dashboard-sidebar">
            <!-- announcement -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dashboard-announcement" aria-expanded="false" aria-controls="dashboard-announcement">
                          Announcements
                        </button>
                      </h2>
                      <div id="dashboard-announcement" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Close Transaction as of February 5, 2023</h5>
                                  <small class="text-body-secondary">1/31/22</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Close Transaction as of February 5, 2023</h5>
                                  <small class="text-body-secondary">1/31/22</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Close Transaction as of February 5, 2023</h5>
                                  <small class="text-body-secondary">1/31/22</small>
                                </div>
                            </a>
                        </div>
                      </div>
                    </div>
        <!-- APPOINTMENTS -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dashboard-appointment" aria-expanded="false" aria-controls="dashboard-appointment">
                            Appointments
                        </button>
                        </h2>
                    <div id="dashboard-appointment" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">You have no pending appointments at the moment.</div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- DOCUMENT LISTS -->
            <div class="col-md-8 ps-3">
                <div class="dashboard-content">
                    <!-- dashboard-document lists appointment -->
                    <div class="dashboard-doc-app" id="dashboard-doc-app"> 
                        <div class="doc-app-head">
                            <p class="display-6 font-mont font-bold"> Document Lists</p>
                        </div>
                        <small class="font-mont font-maroon notice-box d-flex flex-row w-100 mb-3">Please review your personal information before scheduling an appointment.</small>
                        {{-- <div class="d-flex flex-row font-mont justify-content-end mt-3">
                            <div class="dropdown">
                                <button class="btn btn-appoint dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Student Status
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" value="College" href="#">College</a></li>
                                  <li><a class="dropdown-item" value="High School" href="#">High School</a></li>
                                  <li><a class="dropdown-item" value="Masteral/Alumni" href="#">Masteral/Alumni</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <!--Starting sa document form-->
                        @foreach ($forms as $form)
                        <div class="accordion accordion-flush mb-1" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $form->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                        {{ $form->name }}
                                    </button>
                                </h2>
                                <div id="{{ $form->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="requirements">
                                            <p class="fs-6">
                                                <b>Requirements: </b>
                                                {{ $form->description }}
                                            </p>
                                        </div>
                                        <div class="process">
                                            <p class="fs-6"><b>Days of Process: </b>{{ $form->days }}</p>
                                        </div>
                                        <div class="fees">
                                            <p class="fs-6"><b>Document Fee: </b>{{ $form->fee }}</p>
                                        </div>
                                        <div class="row w-100 d-flex flex-row justify-content-end">
                                            <button type="button" class="btn btn-appoint" data-bs-toggle="modal" data-bs-target="#appointmentModal" data-form-id="{{ $form->id }}">
                                                Appoint
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--endd sa document form-->
                    </div>

                    <!-- edit profile section link  -->
                    <div class="edit-profile" id="edit-profile">
                        <div class="edit-profile-head">
                            <p class="display-6 font-mont font-bold"> Edit Profile</p>
                        </div>
                        <div class="edit-profile-form">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">First Name</label>
                                        <input class="form-control form-control" type="text" value="Meriflor" aria-label="default input example" required>
                                    </div>    
                                    <div class="col-md-6">
                                        <label for="">Last Name</label>
                                        <input class="form-control form-control" type="text" value="Gonoy" aria-label="default input example" required>
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">Middle Name</label>
                                        <input class="form-control form-control" type="text" value="Nonong" aria-label="default input example" required>
                                    </div>  
                                    <div class="col-md-6">
                                        <label for="">Suffix</label>
                                        <input class="form-control form-control" type="text" value="N/A" aria-label="default input example">
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">School ID</label>
                                        <input class="form-control form-control" type="text" value="1009975" aria-label="default input example" required>
                                    </div> 
                                    <div class="col-md-6">
                                        <label for="">Cellphone No.</label>
                                        <input class="form-control form-control" type="text" value="09559381788" aria-label="default input example" required>
                                    </div>    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">Email</label>
                                        <input class="form-control form-control" type="email" value="mgonoy13@gmail.com" aria-label="default input example" required>
                                    </div>  
                                    <div class="col-md-6">
                                        <label for="">Address</label>
                                        <input class="form-control form-control" type="text" value="P3 Libertad Kolambugan LDN" aria-label="default input example" required>
                                    </div>
                                </div><div class="form-group row mt-3">
                                    <div class="col-lg-6">
                                        <label for="inputCivilStatus">Civil Status</label>
                                        <select class="form-control" id="inputCivilStatus" required>
                                          <option value="">Choose...</option>
                                          <option value="Single">Single</option>
                                          <option value="Married">Married</option>
                                          <option value="Single Parent">Single Parent</option>
                                          <option value="Widow">Widow</option>
                                          <option value="Divorced">Divorced</option>
                                          <option value="Annulled">Annulled</option>
                                          <option value="Separated">Separated</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="inputBirthdate">Birthdate</label>
                                        <input type="date" class="form-control" id="inputBirthdate" required>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-lg-4">
                                        <label for="inputGender">Gender</label>
                                        <select class="form-control" id="inputGender" required>
                                          <option value="">Choose...</option>
                                          <option value="Female">Female</option>
                                          <option value="Male">Male</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="inputStatus">Status</label>
                                        <select class="form-control" id="inputStatus" required>
                                          <option value="">Choose...</option>
                                          <option value="Undergraduate">Undergraduate</option>
                                          <option value="High School">High School</option>
                                          <option value="Alumni">Masteral/Alumni</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="inputCourse">Course</label>
                                        <select class="form-control" id="inputCourse" required>
                                            <option value="">Choose...</option>
                                            <option value="BSCS">Bachelor of Science in Computer Science</option>
                                            <option value="BIT">Bachelor of Industrial Technology Major in Drafting</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="row d-flex flex-row justify-content-end my-3">
                                    <button type="submit" class="btn btn-appoint font-mont font-body">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- account settings section  -->
                    <div class="account-settings" id="account-settings">
                        <div class="account-settings-head">
                            <p class="display-6 font-mont font-bold">Account Settings</p>
                        </div>
                        <div class="account-form">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">Password</label>
                                        <input class="form-control form-control" type="password" placeholder="" aria-label="default input example">
                                    </div>    
                                    <div class="col-md-6">
                                        <label for="">Re-type password</label>
                                        <input class="form-control form-control" type="password" placeholder="" aria-label="default input example">
                                    </div>  
                                </div>
                                <div class="row d-flex flex-row justify-content-end my-3">
                                    <button type="submit" class="btn btn-appoint font-mont font-body">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- APPOINTMENT SECTION -->
                    <div class="appointment-records" id="appointment-records">
                        <div class="appointment-records-head">
                            <p class="display-6 font-mont font-bold">Appointment Records</p>
                        </div>
                        <div class="appointment-records-lists">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                      Transcript of Records (TOR): March 20, 2023: Pending
                                    </button>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="requestID">
                                            <p class="fs-6">
                                                <b>Request ID: </b>
                                                R-1010101
                                            </p>
                                        </div>
                                        <div class="date-filled">
                                            <p class="fs-6"><b>Date Filled: </b>March 9, 2023</p>
                                        </div>
                                        <div class="purpose">
                                            <p class="fs-6"><b>Purpose: </b>Need for work char</p>
                                        </div>
                                        <div class="payment">
                                            <p class="fs-6"><b>Payment: </b>Walk-in</p>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        School ID: January 7, 2023: Completed
                                    </button>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="requestID">
                                            <p class="fs-6">
                                                <b>Request ID: </b>
                                                R-1010101
                                            </p>
                                        </div>
                                        <div class="date-filled">
                                            <p class="fs-6"><b>Date Filled: </b>March 9, 2023</p>
                                        </div>
                                        <div class="purpose">
                                            <p class="fs-6"><b>Purpose: </b>Need for work char</p>
                                        </div>
                                        <div class="payment">
                                            <p class="fs-6"><b>Payment: </b>G-Cash</p>
                                        </div>
                                        <div class="proof-of-payment w-100">
                                            <p class="fs-6"><img class="w-100" src="images/g-cash-temp.png" alt=""></p>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        {Document}: {Date Appointed}: {Appointment Status}
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="requestID">
                                            <p class="fs-6">
                                                <b>Request ID: </b>
                                                {ReqID}
                                            </p>
                                        </div>
                                        <div class="date-filled">
                                            <p class="fs-6"><b>Date Filled: </b>{dateFilled}</p>
                                        </div>
                                        <div class="purpose">
                                            <p class="fs-6"><b>Purpose: </b>{purpose}</p>
                                        </div>
                                        <div class="payment">
                                            <p class="fs-6"><b>Payment: </b>{paymentMethod}</p>
                                        </div>
                                        <div class="proof-of-payment">
                                            <p class="fs-6"><img src="" alt="">{imageProof,, with script nsab ni ata}</p>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modalizationizest -->
                <!-- appointmentModal -->
    <div class="modal fade" id="appointmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Transcript of Records</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-doc">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="inputDocPurpose">Purpose</label>
                                <textarea class="form-control form-control" name="inputDocPurpose" style="height: 150px;" type="text" placeholder="" aria-label="default input example"></textarea>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDocAcadYear">Academic Year</label>
                                <input class="form-control form-control" type="text" name="inputDocAcadYear" placeholder="Academic Year" aria-label="default input example">
                            </div>
                            <div><hr class="row mb-3"></div>
                            <div class="row d-flex flex-row w-100 mb-3">
                                <p class="fs-4 font-mont font-bold">Payment</p>
                                <div>
                                    <input type="radio" id="walk-in" name="payment" value="walk-in">
                                    <label for="walk-in">Walk-in</label>
                                </div>
                                <div>
                                    <input type="radio" id="gcash" name="payment" value="gcash">
                                    <label for="gcash">G-Cash</label>
                                </div>
                            </div>
                            <div class="row mb-3" id="walk-in-sect">
                                <!-- doesn't do anything or bcn sunod if naa -->
                            </div>
                            <div class="row mb-3" id="gcash-sect">
                                <img src="/images/g-cash-temp.png" alt="">
                                <div class="mt-3">
                                    <label for="formFile" class="form-label">Upload the picture or screenshot of the proof of payment.</label>
                                    <input class="form-control" type="file" id="formFile" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-appoint" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-appoint" data-bs-toggle="modal" data-bs-target="#reviewModal">Proceed</button>
            </div>
          </div>
        </div>
    </div>

    <!-- REVIEW MODAAAAAAAAAAAAAALz -->
    <div class="modal fade" id="reviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Transcript of Records</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="">First Name</label>
                            <input class="form-control form-control" type="text" placeholder="Meriflor" aria-label="default input example" disabled>
                        </div>    
                        <div class="col-md-3">
                            <label for="">Last Name</label>
                            <input class="form-control form-control" type="text" placeholder="Gonoy" aria-label="default input example" disabled>
                        </div>  
                        <div class="col-md-3">
                            <label for="">Middle Name</label>
                            <input class="form-control form-control" type="text" placeholder="Nonong" aria-label="default input example" disabled>
                        </div>  
                        <div class="col-md-3">
                            <label for="">Suffix</label>
                            <input class="form-control form-control" type="text" placeholder="N/A" aria-label="default input example" disabled>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="">School ID</label>
                            <input class="form-control form-control" type="text" placeholder="1009975" aria-label="default input example" disabled>
                        </div> 
                        <div class="col-md-3">
                            <label for="">Cellphone No.</label>
                            <input class="form-control form-control" type="text" placeholder="09559381788" aria-label="default input example" required>
                        </div>    
                        <div class="col-md-3">
                            <label for="">Email</label>
                            <input class="form-control form-control" type="email" placeholder="mgonoy13@gmail.com" aria-label="default input example" required>
                        </div>  
                        <div class="col-md-3">
                            <label for="">Address</label>
                            <input class="form-control form-control" type="text" placeholder="P3 Libertad Kolambugan LDN" aria-label="default input example" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Civil Status</label>
                            <input class="form-control form-control" type="text" placeholder="Single" aria-label="default input example" disabled>
                        </div>    
                        <div class="col-md-4">
                            <label for="">Birthdate</label>
                            <input class="form-control form-control" type="text" placeholder="November 21, 2000" aria-label="default input example" disabled>
                        </div>    
                        <div class="col-md-4">
                            <label for="">Gender</label>
                            <input class="form-control form-control" type="text" placeholder="Female" aria-label="default input example" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label for="inputStudentStatus">Status</label>
                            <select class="form-control" id="inputStudentStatus" required>
                            <option value="">Choose...</option>
                            <option value="Undergraduate">Undergraduate</option>
                            <option value="Graduate">Graduate</option>
                            <option value="High School">High School</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputCourse">Course</label>
                            <select class="form-control" id="inputCourse" required>
                                <option value="">Choose...</option>
                                <option value="BSCS">Bachelor of Science in Computer Science</option>
                                <option value="BIT">Bachelor of Industrial Technology Major in Drafting</option>
                            </select>
                        </div>
                        <div class="col-lg-4 " id="input-acadYear">
                            <label for="inputAcadYear">Academic Year</label>
                            <input type="text" class="form-control" id="inputAcadYear" placeholder="" required>
                        </div>
                        <div class="col-lg-4 " id="input-gradYear">
                            <label for="inputGradYear">Year Graduated</label>
                            <input type="text" class="form-control" id="inputGradYear" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3" id="college-form">
                        <div class="col-lg-6 d-flex flex-column justify-content-start custom-form-group">
                            <p class="font-small font-mont m-0">Before MSU-MSAT, did you study in a different college?</p>
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
                            <div class="w-100" id="ATransferSchool">
                                <label for="inputAcadYear">Please indicate school</label>
                                <input type="text" class="form-control" id="inputATransferSchool" placeholder="">
                            </div>
                        </div>
                
                        <div class="col-lg-6 d-flex flex-column justify-content-start custom-form-group">
                            <p class="font-small font-mont m-0">After MSU-MSAT, did you study in a different college?</p>
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
                            <div class="w-100" id="BTransferSchool">
                                <label for="inputAcadYear">Please indicate school</label>
                                <input type="text" class="form-control" id="inputBTransferSchool" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="py-3"><hr></div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Purpose</label>
                            <textarea class="form-control form-control" type="text" placeholder="Single" aria-label="default input example" disabled>This is required for my Internship at OO Company</textarea>
                        </div>  
                        <div class="col-md-4">
                            <label for="">Appointment Date</label>
                            <input class="form-control form-control" type="text" placeholder="April 6, 2023" aria-label="default input example" disabled>
                        </div>
                        <div class="col-md-4">
                            <p class="fs-6 font-mont"><b>Payment Method: </b> Gcash</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-appoint" data-bs-toggle="modal" data-bs-target="#appointmentModal">Back</button>
              <button type="button" class="btn btn-appoint" data-bs-toggle="modal" data-bs-target="#confirmedModal">Submit</button>
            </div>
          </div>
        </div>
    </div>

    <!-- confirmation modal -->
    <div class="modal fade" id="confirmedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content modal-dialog-confirm modal-confirm-padding">
            <div class="modal-body text-center">
                <!-- <i class="fa-regular fa-circle-check fa-2xl mb-5" style="color: #ffffff;"></i> -->
                <p class="h5 font-bold-font-mont">Your appointment has been created.<br>Please proceed to the registrar's office on the scheduled day to claim or process your request, and remember to bring any necessary documents with you.</p>
                <p class="mt-5 font-este">If you have any questions or concerns, please don't hesitate to contact us.</p>
              <a type="button" class="btn btn-confirm mt-5" name="proceed-docPurpose" data-bs-dismiss="modal" id="confirm-btn">Confirm</a>
            </div>
            </div>
          </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="js/dashboard/navbar.js"></script>
    <script src="js/dashboard/dashboard.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/dashboard/forms.js"></script>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
        $('#calendar').fullCalendar({
          header: {
            defaultView: 'month'
          },
          navLinks: true,
          selectable: true,
          selectHelper: true,
          select: function(start, end) {
            alert('You clicked on ' + moment(start).format('YYYY-MM-DD'));
          },
          editable: true,
          eventLimit: true,
          events: [
            {
              title: 'Event 1',
              start: '2023-03-01'
            },
            {
              title: 'Event 2',
              start: '2023-03-05',
              end: '2023-03-07'
            },
            {
              title: 'Event 3',
              start: '2023-03-09T12:30:00',
              allDay: false
            }
          ]
        });
      });
    </script>
</body>
</html>