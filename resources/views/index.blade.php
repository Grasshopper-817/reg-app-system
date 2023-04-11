@extends('layout.main')

@section('content')
    


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
                                    <a href="{{ route('announcement') }}" class="nav-link">Announcements</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('faqs') }}" class="nav-link">FAQs</a>
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
                <a href="#login-register" class="btn" id="btn-make-appoint">Click Here</a>
            </div>
        </div>
    </div>

    <div class="row w-100 faq-login-sect" id="login-register">
        <div class="row w-100 faq-login-card p-0 d-flex align-items-center">
            <div class="col-md-6 faq-sect">
                <div class="faq-sect-body">
                    <div class="faq-sect-head d-flex flex-row align-items-center">
                        <div class="msat-logo"><img src="http://127.0.0.1:8000/images/msat-logo.png" alt="MSAT logo"></div>
                        <div class="msat-faq title font-mont font-bold font-white mx-3">Frequently Asked Questions (FAQs)</div>
                    </div>
                    <div class="article-list d-flex flex-column mt-3">
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
                </div>
            </div>
            <div class="col-md-6 login-register-sect">
                <div class="login-sect" id="login-sect">
                    <div class="login-sect-head">
                        <p class="display-6 font-mont font-bold">Sign In</p>
                    </div>
                    <form action="{{ route('login-user') }}" method="POST">
                    @csrf
                      @if (Session::has('success'))
                      <div class="alert alert-success">{{ Session::get('success') }}</div>
                      @endif
                        @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif 
                        <div class="row mb-3">
                            <input class="form-control form-control-lg" name="email" type="email" placeholder="Email" aria-label="default input example" value="{{ old('email') }}" >
                            <span class="text-danger">@error('email'){{ $message }} @enderror </span> 
                        </div>
                        <div class="row mb-2">
                            <input class="form-control form-control-lg"  name="password" type="password" placeholder="Password" aria-label="default input example">
                            <span class="text-danger">@error('password'){{ $message }} @enderror </span> 
                        </div>
                        <div class="row">
                            <a href="#" class="forgot-pass-link mb-3 font-este d-flex flex-row justify-content-end">Forgot Password?</a>
                        </div>  
                        <div class="row d-flex flex-row justify-content-end mb-3">
                            <button type="submit" class="btn btn-login-register font-mont font-body">Sign In</button>
                        </div>   
                    </form>
                    <div class="login-sect-footer d-flex flex-row justify-content-center font-mont font-body">
                        Don't have an account yet? <button href="#" id="registerBtn" onclick="register()">Register.</button>
                    </div>
                </div>

                <!-- REGISTRATION -->
                <div class="register-sect" id="register-sect">
                    <div class="login-sect-head">
                        <p class="display-6 font-mont font-bold">Register</p>
                    </div>
                    <form action="{{ route('registration-user') }}" method="POST">
                                @csrf
                                @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="inputFirstName">First Name</label>
                                <input type="text" name="firstName" class="form-control" value="{{ old('firstName') }}" id="inputFirstName" placeholder="First Name">
                                <span class="text-danger">@error('firstName'){{ $message }} @enderror </span>
                            </div>
                            <div class="col-lg-6">
                                <label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" id="inputLastName" placeholder="Last Name">
                                <span class="text-danger">@error('lastName'){{ $message }} @enderror </span>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-lg-6">
                                <label for="inputMiddleName">Middle Name</label>
                                <input type="text" class="form-control" value="{{ old('middleName') }}" name="middleName" id="inputMiddleName" placeholder="Middle Name">
                                
                            </div>
                            <div class="col-lg-6">
                                <label for="inputSuffix">Suffix</label>
                                <input type="text" class="form-control" value="{{ old('suffix') }}" name="suffix" id="inputSuffix" placeholder="optional">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-lg-7">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="inputAddress" placeholder="Address">
                                <span class="text-danger">@error('address'){{ $message }} @enderror </span>
                            </div>
                            <div class="col-lg-5">
                                <label for="inputSchoolID">School ID</label>
                                <input type="text" class="form-control" name="school_id" value="{{ old('school_id') }}" id="inputSchoolID" placeholder="School ID">
                                <span class="text-danger">@error('school_id'){{ $message }} @enderror </span>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-lg-6">
                                <label for="inputCpNo">Cellphone No.</label>
                                <input type="text" class="form-control" name="cell_no" id="inputCpNo" placeholder="Cellphone No.">
                                <span class="text-danger">@error('cell_no'){{ $message }} @enderror </span>
                            </div>
                            <div class="col-lg-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="inputEmail" placeholder="Email">
                                <span class="text-danger">@error('email'){{ $message }} @enderror </span>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-lg-6">
                                <label for="inputCivilStatus">Civil Status</label>
                                <select class="form-control" name="civil_status" id="inputCivilStatus">
                                  <option value="">Choose...</option>
                                  <option value="single">Single</option>
                                  <option value="married">Married</option>
                                  <option value="single parent">Single Parent</option>
                                  <option value="widow">Widow</option>
                                  <option value="divorce">Divorced</option>
                                  <option value="annulled">Annulled</option>
                                  <option value="separated">Separated</option>
                                </select>
                                <span class="text-danger">@error('civil_status'){{ $message }} @enderror </span>
                            </div>
                            <div class="col-lg-6">
                                <label for="inputBirthdate">Birthdate</label>
                                <input type="date" class="form-control" name="birthdate"  id="inputBirthdate">
                                <span class="text-danger">@error('birthdate'){{ $message }} @enderror </span>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-lg-3">
                                <label for="inputGender">Gender</label>
                                <select class="form-control" name="gender" id="inputGender">
                                  <option value="">Choose...</option>
                                  <option value="female">Female</option>
                                  <option value="male">Male</option>
                                </select>
                                <span class="text-danger">@error('gender'){{ $message }} @enderror </span>
                            </div>
                            <div class="col-lg-9">
                                <label for="inputCourse">Course</label>
                                <select class="form-control" name="course" value="{{ old('course') }}" id="inputCourse">
                                    <option value="">Choose...</option>
                                    <option value="secondary">Secondary level High School / Senior High School</option>
                                    <option value="alumni">Alumni/Alumna/Masteral</option>
                                    <option value="BSCS">Bachelor of Science in Computer Science</option>
                                    <option value="BTLE ">Bachelor of Technology and Livelihood Education</option>
                                    <option value="BTTE ">Bachelor of Technical-Vocational Teacher Education</option>
                                    <option value="BSHM ">Bachelor of Science in Hospitality Management</option>
                                    <option value="BIT-MD">Bachelor of Industrial Technology Major in Drafting</option>
                                    <option value="BIT-MGFD">Bachelor of Industrial Technology Major in Garments Fashion and Design</option>
                                    <option value="BIT-MMT">Bachelor of Industrial Technology Major in Mechanical Technology</option>
                                    <option value="BIT-MFSM">Bachelor of Industrial  Technology Major in Food and Service Management</option>
                                    <option value="BIT-MET">Bachelor of Industrial Technology Major in Electrical Technology</option>
                                    <option value="BIT-MAT">Bachelor of Industrial Technology Major in Automotive Technology</option>
                                  </select>
                                  <span class="text-danger">@error('course'){{ $message }} @enderror </span>
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-lg-3">
                                <label for="inputGender">Status</label>
                                <select class="form-control" name="status"id="inputStudentStatus" required>
                                    <option value="">Choose...</option>
                                    <option value="undergraduate">Undergraduate</option>
                                    <option value="graduate">Graduate</option>
                                    <option value="high hchool">High School</option>
                                    </select>
                                <span class="text-danger">@error('gender'){{ $message }} @enderror </span>
                            </div>
                            <div class="col-lg-9">
                                <label for="inputPassword">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                                <span class="text-danger">@error('password'){{ $message }} @enderror </span>
                            </div>
                        </div>
                        <div class="form-group d-flex flex-row justify-content-center mt-3">
                            <div class="check-custom">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="acceptTerms" id="acceptTerms">
                                    <label for="acceptTerms" class="form-check-label" >I have read and accept <button>Terms and Services</button></label>
                                </div> 
                            </div>
                        </div>
                        <div class="row d-flex flex-row justify-content-end my-3">
                            <button type="submit" class="btn btn-login-register font-mont font-body">Register</button>
                        </div>
                    </form>
                    <div class="register-sect-footer d-flex flex-row justify-content-center font-mont font-body">
                        Do you already have an account?  <button href="#" id="signinBtn" onclick="signin()">Sign in.</button>
                    </div>
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

    <div class="space"></div>
    <div class="footer"></div>

    <!-- CONTACT US SECTION floating button-->
    <div class="fixed-bottom" id="contactus">
        <div class="contactus-form">
            <div class="head">
                Contact Us
            </div>
        </div>
        <button class="btn font-mont" id="btn-support" data-bs-toggle="modal" data-bs-target="#contact-us-modal">
            <i class="fa-regular fa-message icon-support"></i>
            <p>Contact Us</p>
        </button>
    </div>

    <!-- MODAL SECTION -->
    <!-- contact us modal -->
    <div class="modal fade" id="contact-us-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5 font-este" id="staticBackdropLabel">Contact Us</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body font-este p-4">
                    <form action="" method="post">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="inputMessageFullName" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="inputMessageEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-lg-12">
                                <textarea class="form-control" style="height: 100px;" placeholder="Message" id="inputMessage"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-agree font-este" data-bs-dismiss="modal">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- data privacy modal -->
    <div class="modal fade" id="data-privacy-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5 font-este" id="staticBackdropLabel">Data Privacy</h1>
                </div>
                <div class="modal-body font-este p-4">
                    <p>Welcome to Mindanao State University - Maigo School of Arts and Trades! We are to assist you with your registration and other academic needs. In order to ensure that we can provide you with the best service possible, we need to collect some personal information from you. This includes your name, contact details, and other relevant details that pertain to your academic record.</p>
                    <p>We understand that privacy is important to you, and we want to assure you that we take the protection of your personal information seriously. We comply with all applicable data privacy laws and regulations, and we implement strict measures to safeguard your data against unauthorized access, use, or disclosure.</p>
                    <p>By agreeing to this statement, you acknowledge that you have read and understood our data privacy policy, and that you consent to the collection, use, and processing of your personal information for the purpose of scheduling an appointment and requesting documents from the Registrar's office.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-agree font-este" data-bs-dismiss="modal">I Agree</button>
                </div>
            </div>
        </div>
    </div>



    @endsection