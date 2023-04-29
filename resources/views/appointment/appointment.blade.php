<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Online Appointment</title>
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <link rel="icon" type="image/png" href="images/msat-logo.png">
    <link rel="stylesheet" href="css/dashboard/dasboard02.css">
    <link rel="stylesheet" href="css/dashboard/fonts.css">
    <link rel="stylesheet" href="css/dashboard/breakpoints.css">
    <link rel="stylesheet" href="css/dashboard/modal.css">
    <link rel="stylesheet" href="css/dashboard/reciept.css">

    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />

</head>
<body> 

    <!-- NAVBAR pan ni //TODO-->
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
                                        {{ $firstName }}   {{ $lastName }}
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#edit-profile.$user->id" onclick="profileView()">Edit Profile</a></li>
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
    <div class="site-content d-flex justify-content-center p-5">
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
                            @if(count($announcements) > 0)
                                @foreach($announcements as $announcement)
                                <a href="/announcement" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{ $announcement->announcement_title }}</h5>
                                        <small class="text-body-secondary">{{ $announcement->created_at->format('m/d/y') }}</small>
                                    </div>
                                </a>
                            @endforeach
                            @else
                                <li class="list-group-item">There are no announcements at the moment.</li>
                            @endif
                            
                        </div>
                      </div>
                    </div>
        <!-- APPOINTMENTS -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dashboard-appointment" aria-expanded="false" aria-controls="dashboard-appointment">
                                Your Appointments
                            </button>
                        </h2>

    <!-- display appointments here -->

                        <div id="dashboard-appointment" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                @if(count($pending) > 0)
                                    @foreach($pending as $pendapp)
                                    <li class="list-group-item"> <b>{{ $pendapp->form->name }}</b>  on <b>{{ $pendapp->appointment_date }}</b> (<i>{{ $pendapp->status }}</i>)</li>
                                    @endforeach
                                @else
                                    <li class="list-group-item">You have no pending appointments at the moment.</li>
                                @endif
                                </ul>
                            </div>
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
                        <div class="accordion accordion-flush mb-1" id="accordionFlushExample">
                        @foreach ($forms as $form)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $form->id }}" aria-expanded="false" aria-controls="{{ $form->id }}">
                                        {{ $form->name }}
                                    </button>
                                </h2>
                                <div id="{{ $form->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="requirements d-flex flex-row flex-wrap fs-6">
                                            <b class="me-1">Availability of the Service: </b> 
                                            {{ $form->form_avail }}
                                        </div>
                                        <div class="requirements d-flex flex-column fs-6">
                                        <b>Who May Avail the Service:  </b> 
                                          {{ $form->form_who_avail }}
                                        </div>
                                        <div class="requirements d-flex flex-column fs-6">
                                            <b>What Are the Requirements:</b> 
                                                {{ $form->form_requirements }}
                                        </div>
                                        <div class="process">
                                            <p class="fs-6"><b>Complete Processing Time: </b>
                                                {{ $form->form_process }}</p>
                                        </div>
                                        <div class="fees">
                                            <p class="fs-6"><b>Document Fee: </b>
                                                {{ $form->fee }}</p>
                                        </div>
                                        <div class="max-time">
                                            <p class="fs-6"><b>Maximum Time to Claim: </b>
                                                {{ $form->form_max_time }}
                                        </div>
                                        <div class="row w-100 d-flex flex-row justify-content-end">
                                            <button type="button" class="btn btn-appoint open-modal" data-bs-toggle="modal" data-bs-target="#appointmentModal" data-form-id="{{ $form->id }}" data-form-name="{{ $form->name }}">
                                                Book Appointment
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <!--endd sa document form-->
                    </div>

                    <!-- edit profile section link -->                    
                    <div class="edit-profile" id="edit-profile">
                        <div class="edit-profile-head">
                            <p class="display-6 font-mont font-bold"> Edit Profile</p>
                        </div>
                        <div class="edit-profile-form">
                            <form action="{{ route('updateProfile') }}" method="post"> 
                                @csrf
                                @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif 
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="editFirstName">First Name</label>
                                        <input id="editFirstName" name="editFirstName" class="form-control" type="text" value="{{ $firstName }}" aria-label="default input example" required>
                                    </div>    
                                    <div class="col-md-6">
                                        <label for="editLastName">Last Name</label>
                                        <input id="editLastName" name="editLastName" class="form-control" type="text" value="{{ $lastName }}" aria-label="default input example" required>
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="editMiddleName">Middle Name</label>
                                        <input id="editMiddleName" name="editMiddleName" class="form-control" type="text" value="{{ $middleName }}" aria-label="default input example">
                                    </div>  
                                    <div class="col-md-6">
                                        <label for="editSuffix">Suffix</label>
                                        <input id="editSuffix" name="editSuffix" class="form-control" type="text" value="{{ $suffix }}" aria-label="default input example">
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="editSchoolID">School ID</label>
                                        <input id="editSchoolID" name="editSchoolID" class="form-control" type="text" value="{{ $school_id }}" aria-label="default input example" required>
                                    </div> 
                                    <div class="col-md-6">
                                        <label for="editCpNo">Cellphone No.</label>
                                        <input id="editCpNo" name="editCpNo" class="form-control" type="text" value="{{  $cell_no }}" aria-label="default input example" required>
                                    </div>    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="editEmail">Email</label>
                                        <input id="editEmail" name="editEmail" class="form-control" type="email" value="{{ $email }}" aria-label="default input example" required>
                                    </div>  
                                    <div class="col-md-6">
                                        <label for="editAddress">Address</label>
                                        <input id="editAddress" name="editAddress" class="form-control" type="text" value="{{ $address }}" aria-label="default input example" required>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-lg-6">
                                        <label for="editCivilStatus">Civil Status</label>
                                        <select name="editCivilStatus" class="form-control" id="editCivilStatus" name="editCivilStatus" required>
                                          <option value=""{{ $civil_status == null ? 'selected' : '' }}>Choose...</option>
                                          <option value="Single"{{ $civil_status == 'Single' ? 'selected' : '' }}>Single</option>
                                          <option value="Married"{{ $civil_status == 'Married' ? 'selected' : '' }}>Married</option>
                                          <option value="Single Parent"{{ $civil_status == 'Single Parent' ? 'selected' : '' }}>Single Parent</option>
                                          <option value="Widow"{{ $civil_status == 'Widow' ? 'selected' : '' }}>Widow</option>
                                          <option value="Divorced"{{ $civil_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                          <option value="Annulled"{{ $civil_status == 'Annulled' ? 'selected' : '' }}>Annulled</option>
                                          <option value="Separated"{{ $civil_status == 'Separated' ? 'selected' : '' }}>Separated</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="editBirthdate">Birthdate</label>
                                        <input type="date" class="form-control" id="editBirthdate" name="editBirthdate" value="{{ $birthdate }}" required>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-lg-6">
                                        <label for="editGender">Gender</label>
                                        <select name="editGender" class="form-control" id="editGender" required>
                                          <option value=""{{ $gender == null ? 'selected' : '' }}>Choose...</option>
                                          <option value="Female"{{ $gender == 'Female' ? 'selected' : '' }}>Female</option>
                                          <option value="Male"{{ $gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="editCourse">Course</label>
                                        <select name="editCourse" class="form-control" id="editCourse" required>
                                           <option value=""{{ $course == null ? 'selected' : '' }}>Choose...</option>
                                                <option value="Secondary Level High School / Senior High School"{{ $course == 'Secondary Level High School / Senior High School' ? 'selected' : '' }}>Secondary level High School / Senior High School</option>
                                                <option value="Bachelor of Science in Computer Science"{{ $course == 'Bachelor of Science in Computer Science' ? 'selected' : '' }}>Bachelor of Science in Computer Science</option>
                                                <option value="Bachelor of Technology and Livelihood Education"{{ $course == 'Bachelor of Technology and Livelihood Education' ? 'selected' : '' }}>Bachelor of Technology and Livelihood Education</option>
                                                <option value="Bachelor of Technical-Vocational Teacher Education"{{ $course == 'Bachelor of Technical-Vocational Teacher Education' ? 'selected' : '' }}>Bachelor of Technical-Vocational Teacher Education</option>
                                                <option value="Bachelor of Science in Hospitality Management"{{ $course == 'Bachelor of Science in Hospitality Management' ? 'selected' : '' }}>Bachelor of Science in Hospitality Management</option>
                                                <option value="Bachelor of Industrial Technology Major in Drafting"{{ $course == 'Bachelor of Industrial Technology Major in Drafting' ? 'selected' : '' }}>Bachelor of Industrial Technology Major in Drafting</option>
                                                <option value="Bachelor of Industrial Technology Major in Garments Fashion and Design"{{ $course == 'Bachelor of Industrial Technology Major in Garments Fashion and Design' ? 'selected' : '' }}>Bachelor of Industrial Technology Major in Garments Fashion and Design</option>
                                                <option value="Bachelor of Industrial Technology Major in Mechanical Technology"{{ $course == 'Bachelor of Industrial Technology Major in Mechanical Technology' ? 'selected' : '' }}>Bachelor of Industrial Technology Major in Mechanical Technology</option>
                                                <option value="Bachelor of Industrial  Technology Major in Food and Service Management"{{ $course == 'Bachelor of Industrial  Technology Major in Food and Service Management' ? 'selected' : '' }}>Bachelor of Industrial  Technology Major in Food and Service Management</option>
                                                <option value="Bachelor of Industrial Technology Major in Electrical Technology"{{ $course == 'Bachelor of Industrial Technology Major in Electrical Technology' ? 'selected' : '' }}>Bachelor of Industrial Technology Major in Electrical Technology</option>
                                                <option value="Bachelor of Industrial Technology Major in Automotive Technology"{{ $course == 'Bachelor of Industrial Technology Major in Automotive Technology' ? 'selected' : '' }}>Bachelor of Industrial Technology Major in Automotive Technology</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-lg-6">
                                        <label for="editStatus">Status</label>
                                        <select name="editStatus" class="form-control" id="editStatus" required>
                                          <option value=""{{ $status == null ? 'selected' : '' }}>Choose...</option>
                                          <option value="Secondary Level"{{ $status == 'Secondary Level' ? 'selected' : '' }}>Secondary Level</option>
                                          <option value="Undergraduate College"{{ $status == 'Undergraduate College' ? 'selected' : '' }}>Undergraduate College</option>
                                          <option value="Masteral/Alumni"{{ $status == 'Masteral/Alumni' ? 'selected' : '' }}>Masteral/Alumni</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="edit-AcadYear" style="display:none;">
                                            <label for="editAcadYear">Academic Year</label>
                                            <input type="text" class="form-control" id="editAcadYear" name="editAcadYear" value="{{ $acadYear }}">
                                        </div>
                                        <div id="edit-GradYear" style="display:none;">
                                            <label for="editGradYear">Year Graduated</label>
                                            <input type="text" class="form-control" id="editGradYear" name="editGradYear" value="{{ $gradYear }}">
                                        </div>
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

                    <!-- APPOINTMENT RECORD SECTION -->
                    <div class="appointment-records" id="appointment-records">
                        <div class="appointment-records-head">
                            <p class="display-6 font-mont font-bold">Appointment Records</p>
                        </div>
                    
                        @if(count($appointments) > 0)
                            @foreach($appointments as $appointment)
                            <div class="appointment-records-lists mb-1">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $appointment->id }}" aria-expanded="false" aria-controls="{{ $appointment->id }}">
                                                {{ $appointment->form->name }}: {{ $appointment->created_at->format('M d, Y h:i A') }}
            
                                        </h2>
                                        <div id="{{ $appointment->id }}"  class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" >
                                            <div class="accordion-body">
                                                {{-- <div class="requestID">
                                                    <p class="fs-6">
                                                        <b>Tracking ID: </b>
                                                        {{ $appointment->booking_number }}
                                                    </p>
                                                </div>
                                                <div class="date-filled">
                                                    <p class="fs-6"><b>Date Filled: </b>{{ $appointment->created_at->format('M d, Y h:i A') }}</p>
                                                </div>
                                                <div class="purpose">
                                                    <p class="fs-6"><b>Purpose: </b>{{ $appointment->app_purpose }}</p>
                                                </div>
                                                <div class="payment">
                                                    <p class="fs-6"><b>Payment: </b>Gcash</p>
                                                </div> --}}
                                                {{-- <div class="proof-of-payment">
                                                  <p class="fs-6"><img src="" alt=""><img class="w-100" src="images/g-cash-temp.png" alt=""></p>  
                                                </div> --}}
                                                <div class="purpose">
                                                    <p class="fs-6"><b>Status: </b>{{ $appointment->status }}</p>
                                                </div>
                                                <div class="receipt-box p-3">
                                                    <div class="receipt-content fs-6 d-flex flex-column font-mont">
                                                        <div class="content-head d-flex flex-column">
                                                            <small class="font-bold">Mindanao State University - Maigo School of Arts and Trades</small>
                                                            <small>msumsat.edu.ph</small>
                                                        </div>
                                                        <div class="content-body mt-5">
                                                            <div class="d-flex flex-wrap m-0 p-0">
                                                                <small class="font-bold me-1">Date Filled: </small>
                                                                <small>{{ $appointment->created_at->format('M d, Y h:i A') }}</small>
                                                            </div>
                                                            <div class="d-flex flex-wrap m-0 p-0">
                                                                <small class="font-bold me-1">Appointment Date: </small>
                                                                <small>{{ $appointment->appointment_date}}</small>
                                                            </div>
                                                            <div class="d-flex flex-wrap m-0 p-0">
                                                                <small class="font-bold me-1">Client name: </small>
                                                                <small>{{ $appointment->user->firstName }} {{ $appointment->user->middleName }} {{ $appointment->user->lastName }} {{ $appointment->user->suffix }}</small>
                                                            </div>
                                                            <div class="d-flex flex-wrap m-0 p-0">
                                                                <small class="font-bold me-1">Appointment No.: </small>
                                                                <small>{{ $appointment->booking_number }}</small>
                                                            </div>
                                                            <div class="d-flex flex-wrap m-0 p-0">
                                                                <small class="font-bold me-1">Email: </small>
                                                                <small>{{ $appointment->user->email }}</small>
                                                            </div>
                                                            <div class="d-flex flex-wrap m-0 p-0">
                                                                <small class="font-bold me-1">Document Requested: </small>
                                                                <small class="">{{ $appointment->form->name }}</small>
                                                            </div>
                                                            <div class="d-flex flex-wrap m-0 p-0">
                                                                <small class="font-bold me-1">Total Amount: </small>
                                                                <small>{{ $appointment->form->fee }}</small>
                                                            </div>
                                                        </div>
                                                        <div class="content-foot mt-5 d-flex flex-row align-items-center">
                                                            <img src="/images/qrcode.png" alt="">
                                                            <div class="d-flex flex-column m-0 p-0">
                                                                <small style="font-size: 11px;">*Bring the total amount and the requeirements</small>
                                                                <small style="color: red;font-size: 11px;">Please take a screenshot of the receipt or open this account to present this on registrar personnel.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="more-info d-flex flex-row row font-mont p-3">
                                                    <div class="col-md-6">
                                                        <small class="fs-6"><b>Purpose: </b>{{ $appointment->app_purpose }}</small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a class="btn btn-proof" data-bs-toggle="collapse" href="#proof" role="button" aria-expanded="false" aria-controls="proof">
                                                        View Proof of Payment
                                                        </a>
                                                        <div class="collapse mt-2" id="proof">
                                                            <img src="/images/g-cash-temp.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="appointment-records-lists">
                                <p>You have no bookings at the moment.</p>
                            </div>
                        @endif
                    </div>
                    <!--close  sa open div sa appointment--->
                </div>
            </div>
        </div>
    </div>

    <!-- modalizationizest -->
                <!-- appointmentModal -->

                <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif   -->
                     
                <!-- fix -->
<form action="{{ route('bookAppointment') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="appointmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="form_name"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-doc">
                    <input type="hidden" name="form_id" id="form_id">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="app_purpose">Purpose</label>
                                <textarea class="form-control form-control" id="app_purpose" name="app_purpose" style="height: 150px;" type="text" placeholder="" aria-label="default input example"></textarea>
                            </div>
                            <div class="row mb-3" id="app-acad-year">
                                <label for="inputDocAcadYear">Academic Year</label>
                                <input class="form-control form-control" type="text" name="acad_year" id="acad_year" placeholder="Academic Year" aria-label="default input example">
                            </div>
                            <div><hr class="row mb-3"></div>
                            <div class="row d-flex flex-row w-100 mb-3">
                                <p class="fs-4 font-mont font-bold">Payment</p>
                                <div>
                                    <input type="radio" id="walk-in" name="payment_method" value="Walk-in">
                                    <label for="walk-in">Walk-in</label>
                                </div>
                                <div>
                                    <input type="radio" id="g-cash" name="payment_method" value="GCash">
                                    <label for="gcash">G-Cash</label>
                                </div>
                            </div>
                            <div class="row mb-3" id="walk-in-sect">
                                <!-- doesn't do anything or bcn sunod if naa -->
                            </div>
                            <div class="row mb-3" id="gcash-sect">
                                <img src="/images/g-cash-temp.png" alt="">
                                <div class="mt-3">
                                    <label for="proof_of_payment" class="form-label">Upload the picture or screenshot of the proof of payment.</label>
                                    <input class="form-control" type="file" id="proof_of_payment" name="proof_of_payment" accept=".jpg,.png,.jpeg,.svg">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="calendar"></div>
                        </div>
                    </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-appoint" data-bs-dismiss="modal">Close</button>
              <button type="button" id="proceedButton" class="btn btn-appoint" data-bs-toggle="modal" data-bs-target="#reviewModal">Proceed</button>
            </div>
          </div>
        </div>
    </div>

    <!--  MODAAAAAAAAAAAAAALz -->
    <div class="modal fade" id="reviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Transcript of Records</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- fix reminder -->
                <input type="hidden" id="proof_of_payment_01">

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="">First Name</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $firstName }}" aria-label="default input example" disabled>
                        </div>    
                        <div class="col-md-3">
                            <label for="">Last Name</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $lastName }}" aria-label="default input example" disabled>
                        </div>  
                        <div class="col-md-3">
                            <label for="">Middle Name</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $middleName }}" aria-label="default input example" disabled>
                        </div>  
                        <div class="col-md-3">
                            <label for="">Suffix</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $suffix }}" aria-label="default input example" disabled>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="">School ID</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $school_id }}" aria-label="default input example" disabled>
                        </div> 
                        <div class="col-md-3">
                            <label for="">Cellphone No.</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $cell_no }}" aria-label="default input example" disabled>
                        </div>    
                        <div class="col-md-3">
                            <label for="">Email</label>
                            <input class="form-control form-control" type="email" placeholder="{{ $email }}" aria-label="default input example" disabled>
                        </div>  
                        <div class="col-md-3">
                            <label for="">Address</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $address }}" aria-label="default input example" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Civil Status</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $civil_status }}" aria-label="default input example" disabled>
                        </div>    
                        <div class="col-md-4">
                            <label for="">Birthdate</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $birthdate }}" aria-label="default input example" disabled>
                        </div>    
                        <div class="col-md-4">
                            <label for="">Gender</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $gender }}" aria-label="default input example" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label for="">Status</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $status }}" aria-label="default input example" disabled>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Course</label>
                            <input class="form-control form-control" type="text" placeholder="{{ $course }}" aria-label="default input example" disabled>
                        </div>
                        <div class="col-lg-4 " id="input-acadYear">
                            <label for="inputAcadYear">Academic Year</label>
                            <input type="text" class="form-control" id="inputAcadYear" value="{{ $acadYear }}" disabled>
                        </div>
                        <div class="col-lg-4 " id="input-gradYear">
                            <label for="inputGradYear">Year Graduated</label>
                            <input type="text" class="form-control" id="inputGradYear" value="{{ $gradYear }}" disabled>
                        </div>
                    </div>
                    <!-- review -->
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
                                <label for="inputATransferSchool">Please indicate school</label>
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
                            <textarea id="app_purpose01" class="form-control" type="text" aria-label="default input example" disabled></textarea>
                        </div>  
                        <div class="col-md-4">
                            <label for="">Appointment Date</label>
                            <input class="form-control" type="text" placeholder="" id="appointment_date" aria-label="default input example" value="" disabled>
                        </div>
                        <div class="col-md-4">
                            <b>Payment Method: </b>
                            <p class="fs-6 font-mont" id="payment_method_01"></p>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-appoint" data-bs-toggle="modal" data-bs-target="#appointmentModal">Back</button>
              <button type="submit" id="submitButton" class="btn btn-appoint">Submit</button>
              <!-- data-bs-toggle="modal" data-bs-target="#confirmedModal" -->
            </div> 
          </div>
        </div>
    </div>
</form>

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
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src="js/dashboard/navbar.js"></script>
    <!-- <script src="js/dashboard/dashboard.js"></script> -->
    <script src="js/navbar.js"></script>
    <script src="js/form.js"></script>
    <!-- <script src="js/dashboard/forms.js"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

    <!-- script for the calendar and such exclusively for appointment blade php -->
    <script>
        var appointment_date;
        var appointment_booked = false;

        $(document).ready(function() { 
            $('#calendar').fullCalendar({
                header: {
                    defaultView: 'month'
                },
                navLinks: false,
                editable: true,
                eventLimit: true,
                events: [],
                selectable: true,
                selectHelper: true,
                businessHours: { //0 and 6 mao ang sat ug sun
                    daysOfWeek: [ 1, 2, 3, 4, 5 ], // mon-fri
                    startTime: '8:00', 
                    endTime: '17:00', 
                },
                select: function(start) {
                    var today = moment();
                    if (start.isBefore(today, 'day')) {
                        alert('You cannot book appointments for past dates.');
                        return;
                    }
                    if (start.day() === 6 || start.day() === 0) {
                        alert('You cannot book appointments on weekends.');
                        return;
                    }
                    if (appointment_booked) {
                        alert('You have already booked an appointment. Please cancel the existing appointment before booking a new one.');
                        return;
                    }
                    appointment_date = moment(start).format('MMMM DD, YYYY');
                    console.log('Selected date:', appointment_date);
                    var confirmBooking = confirm('Do you want to book this date?');
                    if (confirmBooking) {
                        var eventData = {
                            title: 'Booking',
                            start: start,
                            booked: true
                        };
                        appointment_booked = true;
                        $('#calendar').fullCalendar('renderEvent', eventData, true);
                    }
                },
                eventRender: function(event, element) {
                    if (event.booked) {
                        element.append("<div class='booked-text'>You booked!!!</div>");

                        var today = moment();
                        if (event.start.isBefore(today, 'day')) {
                            element.draggable = false;
                            element.resizable = false;
                        }
                    }
                },
                eventClick: function(event) {
                    appointment_booked = false;
                    $('#calendar').fullCalendar('removeEvents', event._id);
                },
                eventDrop: function(event) {
                    var new_date = moment(event.start).format('MMMM DD, YYYY');
                    var today = moment();
                    if (new_date !== appointment_date) {
                        if (event.start.isBefore(today, 'day')) {
                            alert('You cannot move appointments to past dates.');
                            $('#calendar').fullCalendar('rerenderEvents');
                            return;
                        }
                        appointment_date = new_date;
                        console.log('Selected date:', appointment_date);
                        alert('Your appointment has been moved to ' + moment(event.start).format('MMMM DD, YYYY'));
                    }
                }
            });
        });

        $('.open-modal').on('click', function() {
            var form_id = $(this).data('form-id');
            var form_name = $(this).data('form-name');
            var accordion_item = $(this).closest('.accordion-item');
            var accordion_id = accordion_item.find('.accordion-collapse').attr('id');
            var modal = $('#appointmentModal');
            if(form_name === 'Issuance of Transcript of Records'){
                $('#app-acad-year').show();
            }else{
                $('#app-acad-year').hide();
            }
            modal.find('#form_name').text(form_name);
            modal.find('#form_id').val(form_id);
            modal.find('#accordion_id').val(accordion_id);
            console.log(form_id);
            console.log(form_name);
            console.log(accordion_id);
        });
// review
        $('#proceedButton').on('click', function(event) {
            var form_id = $('#form_id').val();
            var app_purpose = $('#app_purpose').val();
            var acad_year = $('#acad_year').val();
            var payment_method = $('input[name=payment_method]:checked').val();
            // fix not documented yet
            var proof_of_payment = $('#proof_of_payment')[0].files[0];

            
            $('#appointmentModal').modal('hide');
            $('#form_id').val(form_id);
            $('#acad_year').val(acad_year);
            $('#app_purpose01').val(app_purpose);
            $('#appointment_date').val(appointment_date);
            $('#payment_method_01').text(payment_method);

            if (typeof proof_of_payment !== 'undefined') {
                $('#proof_of_payment_01').val(proof_of_payment);
            }

            $('#reviewModal').modal('show');

            console.log(form_id);
            console.log(payment_method);
            console.log(proof_of_payment);
            console.log(app_purpose);
            console.log(acad_year);
            console.log(appointment_date);
        });
        
        $('#submitButton').on('click', function(event) {
            var form_id = $('#form_id').val();
            var app_purpose = $('#app_purpose').val();
            var acad_year = $('#acad_year').val();
            var payment_method = $('#payment_method_01').text();
            var proof_of_payment = $('#proof_of_payment').prop('files')[0];
            var appointment_date = $('#appointment_date').val();
            var a_transfer = $('input[name=isATransfer]:checked').val();
            var b_transfer = $('input[name=isBTransfer]:checked').val();
            if(a_transfer === "yes"){
                a_transfer = 1;
                var a_transfer_school = $('#inputATransferSchool').val();
            }else{
                a_transfer = 0;
                var a_transfer_school = null;
            }if(b_transfer === "yes"){
                b_transfer = 1;
                var b_transfer_school = $('#inputBTransferSchool').val();
            }else{
                b_transfer = 0;
                var b_transfer_school = null;
            }

            console.log(form_id);
            console.log(app_purpose);
            console.log(payment_method);
            console.log(proof_of_payment);
            console.log(acad_year);
            console.log(appointment_date);
            console.log(a_transfer);
            console.log(b_transfer);
            $('#reviewModal').modal('hide');
            
            var formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('form_id', form_id);
            formData.append('app_purpose', app_purpose);
            formData.append('acad_year', acad_year);
            formData.append('appointment_date', appointment_date);
            formData.append('a_transfer', a_transfer);
            formData.append('a_transfer_school', a_transfer_school);
            formData.append('b_transfer', b_transfer);
            formData.append('b_transfer_school', b_transfer_school);
            formData.append('payment_method', payment_method);
            formData.append('proof_of_payment', proof_of_payment);

            $.ajax({
                url: "{{ route('bookAppointment') }}",
                method: "POST",
                processData: false,
                contentType: false,
                data: formData,
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    </script>
</body>
</html>
