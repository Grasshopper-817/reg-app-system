<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin | MSU-MSAT Registrar's Online Appointment System</title>

        <!-- bootstrap -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
            crossorigin="anonymous"
        />
        <link rel="icon" type="image/png" href="images/msat-logo.png">
        <link rel="stylesheet" href="{{ asset('css/admin/navbar.css') }}"  />
        <link rel="stylesheet" href="{{ asset('css/admin/fonts.css') }}"  />
        <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/display.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/message.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/forms.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/announcement.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/modal.css') }}" />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css"
            rel="stylesheet"
        />
    </head>
    <body>
        <!-- //TODO: NAVBAR -->
        <nav
            class="navbar navbar-expand navbar-dark d-flex flex-column align-item-start"
            id="sidebar"
        >
            <div class="navbar-brand d-flex flex-row m-0 align-items-center">
                <div class="logo">
                    <img
                        class="image-fluid"
                        src="{{ asset('images/msat-logo.png') }}"
                        alt=""
                    />
                </div>
                <p class="text-wrap fs-6 font-corm font-white ps-3 m-0">
                    MSU-MSAT Registrar
                </p>
            </div>
            <ul class="navbar-nav d-flex flex-column mt-3 w-100">
                <li class="nav-item w-100">
                    <a href="#" class="nav-link" onclick="viewRequests()"
                        >Appointment Requests<span class="badge badge-custom"
                            >11</span
                        ></a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="message" class="nav-link" onclick="viewMessage()"
                        >Message<span class="badge badge-custom">4</span></a
                    >
                </li>
                <hr />
                <li class="nav-item w-100">
                    <a
                        href="dashboard"
                        class="nav-link active"
                        onclick="viewDashboard()"
                        >Dashboard</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="forms" class="nav-link" onclick="viewForms()"
                        >Forms Configuration</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link" onclick="viewAnnouncement()"
                        >Announcement</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link" onclick="viewFaqs()">FAQs</a>
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link" onclick="viewSettings()"
                        >Settings</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- //TODO: CONTAINER -->
        <div class="content-container p-5">
            <div class="d-flex flex-row align-items-center mb-3">
                <a class="btn d-flex flex-row align-items-center" id="menu-btn">
                    <img src="/images/back-arrow.png" alt="" />
                    <p class="m-0 p-0 font-nun fs-6 ms-2" id="page-title">
                        Dashboard
                    </p>
                </a>
            </div>
            <div class="content-main">
                <!-- TODO: this is the  DASHBOARD MENU -->
                <div id="dashboard-content">
                    <div class="row d-flex flex-row">
                        <div class="col-md-4">
                            <div id="track-boxes" class="track-boxes p-4">
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Transcript of Records (TOR)
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >2000</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Certification Authentication
                                            Verification (CAV)
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >1</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            School ID
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >47</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Diploma
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >3</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Issuance of Honorable Dismissal or
                                            Transfer Credentials
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >6</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                                    >
                                        <p
                                            class="p-0 m-0 doc-title flex-1 col-9"
                                        >
                                            Issuance of Certification
                                        </p>
                                        <span
                                            class="col-3 badge badge-dash-custom d-flex flex-row justify-content-center"
                                            >0</span
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="cal-box" class="cal-box p-4">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="space my-4"></div>
                    <div class="row d-flex flex-row m-2">
                        <div class="appointment-records p-4">
                            <div class="w-100 fs-2 font-bold font-nun mb-2">
                                Appointment Records
                            </div>
                            <div class="table-rounded">
                                <table
                                    class="table table-bordered table-sm font-nun table-striped"
                                >
                                    <thead class="table-head text-center">
                                        <tr>
                                            <th>Appointment Number</th>
                                            <th>School ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Document Requested</th>
                                            <th>Date Requested</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr class="text-center">
                                            <td>123456</td>
                                            <td>ABCD1234</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>Transcript of Records (TOR)</td>
                                            <td>2022-03-15</td>
                                            <td class="td-view">
                                                <a
                                                    type="button"
                                                    class="btn view-request p-0"
                                                    id="view-request"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#view-request-modal"
                                                    >View</a
                                                >
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>654321</td>
                                            <td>EFGH5678</td>
                                            <td>Jane</td>
                                            <td>Smith</td>
                                            <td>Diploma</td>
                                            <td>2022-03-16</td>
                                            <td class="td-view">
                                                <a
                                                    type="button"
                                                    class="btn view-request p-0"
                                                    id="view-request"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#view-request-modal"
                                                    >View</a
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="requests-content"></div>
                <div id="message-content"></div>
                <div id="forms-content"></div>
                <div id="announcement-content"></div>
                <div id="faqs-content"></div>
                <div id="settings-content"></div>
            </div>
        </div>

        <!-- //TODO: this is modalization -->
        <div
            class="modal fade"
            id="appointment_slot_modal"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="deleteCourseModal"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <h1
                            class="modal-title fs-5 font-white font-nun"
                            id="appointment_slot_modal"
                        >
                            Set Appointment Slot
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body font-nun px-5 text-center">
                        <form action="" method="post">
                            <div class="row">
                                <label
                                    class="p-0 font-karma text-center"
                                    for="input_slot"
                                    >Set a number of slots available<br />for
                                    <span id="slot_date"></span
                                ></label>
                                <input
                                    class="form-control"
                                    type="number"
                                    id="input_slot"
                                    placeholder=""
                                    aria-label="default input example"
                                />
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-custom"
                            data-bs-dismiss="modal"
                        >
                            Dissmis
                        </button>
                        <button type="submit" class="btn btn-custom ms-3">
                            Set
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- fix this is the mdoal VIEW INFORMATiON -->
        <div
            class="modal fade"
            id="view-request-modal"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-fullscreen modal-dialog-scrollable modal-dialog-centered"
            >
                <div class="modal-content">
                    <div class="modal-body view-request-modal">
                        <div class="d-flex flex-row align-items-center">
                            <div class="profile-pic">
                                <img src="/images/user.png" alt="" />
                            </div>
                            <div
                                class="d-flex flex-column w-100 font-13 px-3 font-nun"
                            >
                                <p class="p-0 m-0 fs-5 font-bold">
                                    Gonoy, Meriflor Nonong
                                </p>
                                <p class="p-0 m-0 font-small">
                                    mgonoy13@gmail.com
                                </p>
                                <p class="p-0 m-0 font-small">09559381788</p>
                            </div>
                        </div>

                        <div
                            class="p-info d-flex flex-column m-0 px-5 py-4 mt-5"
                        >
                            <div
                                class="p-info-head d-flex flex-row align-items-end"
                            >
                                <div class="logo">
                                    <img
                                        src="/images/person.png"
                                        alt="user info"
                                    />
                                </div>
                                <p
                                    class="p-0 m-0 ms-2 font-nun fs-6 font-bold font-13"
                                >
                                    Personal Information
                                </p>
                            </div>
                            <div class="row w-100 p-0 m-0 mt-3 font-nun">
                                <div class="col-md-6">
                                    <div
                                        class="row w-100 p-0 my-2 d-flex flex-row align-items-center"
                                    >
                                        <div class="col-md-6">
                                            <p class="info-title">SCHOOL ID</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">1009974</p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                STUDENT STATUS
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                Undergraduate
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">COURSE</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                Bachelor of Science in Computer
                                                Science
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                ACADEMIC YEAR
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                2020-2021
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                GRADUATED YEAR
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">2000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md 6">
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">GENDER</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">Female</p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                CIVIL STATUS
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">Single</p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">BIRTHDATE</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                November 21, 2000
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">ADDRESS</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                P3 Libertad Kolambugan Lanao del
                                                Norte
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-info d-flex flex-column m-0 px-5 py-4 mt-5"
                        >
                            <div
                                class="p-info-head d-flex flex-row align-items-end"
                            >
                                <div class="logo">
                                    <img
                                        src="/images/appointment.png"
                                        alt="user info"
                                    />
                                </div>
                                <p
                                    class="p-0 m-0 ms-2 font-nun fs-6 font-bold font-13"
                                >
                                    Appointment Information
                                </p>
                            </div>
                            <div class="row w-100 p-0 m-0 mt-3 font-nun">
                                <div class="col-md-6">
                                    <div
                                        class="row w-100 p-0 my-2 d-flex flex-row align-items-center"
                                    >
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                APPOINTMENT ID
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">B00001</p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                APPOINTMENT DATE
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                April 22, 2023
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                DATE REQUESTED
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                April 10, 2023
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md 6">
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                DOCUMENT REQUESTED
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                Transcript of Records (TOR)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                ACADEMIC YEAR
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                2022-2023
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">PURPOSE</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                It will be used for job hunting
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-info-pay d-flex flex-column m-0 px-5 py-4 mt-5"
                        >
                            <div
                                class="p-info-head d-flex flex-row align-items-end"
                            >
                                <div class="logo">
                                    <img
                                        src="/images/payment.png"
                                        alt="user info"
                                    />
                                </div>
                                <p
                                    class="p-0 m-0 ms-2 font-nun fs-6 font-bold font-13"
                                >
                                    Payment Method
                                </p>
                            </div>
                            <div class="row w-100 p-0 m-0 mt-3 font-nun">
                                <div class="col-md-8">
                                    <div
                                        class="row w-100 p-0 my-2 d-flex flex-row align-items-center"
                                    >
                                        <div class="col-md-6">
                                            <p class="info-title">
                                                DOCUMENT FEE
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">
                                                PHP 50.00
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <div class="col-md-6">
                                            <p class="info-title">METHOD</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="info-content">Gcash</p>
                                        </div>
                                    </div>
                                    <div class="row w-100 p-0 my-2">
                                        <!-- ichange sab ang image pareha sa payment proof of payment para anytime madownload nila if gamay ra kaau para maview -->
                                        <a
                                            href="/images/g-cash-temp.png"
                                            class="btn btn-slot"
                                            download
                                            >Download image</a
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row w-100 p-0 my-2">
                                        <div class="payment-method">
                                            <img
                                                src="/images/g-cash-temp.png"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="d-flex flex-row justify-content-end m-0 mt-5"
                        >
                            <button
                                class="btn btn-dark"
                                type="button"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button id="back-to-top-btn" class="btn btn-custom">Back to top</button>

        <!-- FIX footer -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"
        ></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('js/admin/navbar.js') }}"></script>
        <script src="{{ asset('js/admin/divheight.js') }}"></script>
        <script src="{{ asset('js/admin/admin.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#calendar").fullCalendar({
                    header: {
                        defaultView: "month",
                    },
                    viewRender: function (view, element) {
                        var cal_box_height = $("#calendar").height();
                        var track_box = $("#track-boxes");
                        track_box.height(cal_box_height);
                    },
                    aspectRatio: 1.5,
                    selectable: true,
                    selectHelper: true,
                    editable: true,
                    eventLimit: true,
                    businessHours: {
                        //0 and 6 mao ang sat ug sun
                        daysOfWeek: [1, 2, 3, 4, 5], // mon-fri
                        startTime: "8:00",
                        endTime: "17:00",
                    },
                    minDate: moment().add(1, "day"),
                    dayClick: function (date, jsEvent, view) {
                        var today = moment().format("YYYY-MM-DD");
                        var clickedDate = moment(date).format("YYYY-MM-DD");
                        var formattedDate =
                            moment(date).format("MMMM, DD YYYY");

                        if (
                            clickedDate > today &&
                            date.day() !== 0 &&
                            date.day() !== 6
                        ) {
                            // Check if the date is already occupied by an event
                            var isOccupied =
                                $("#calendar").fullCalendar(
                                    "clientEvents",
                                    function (event) {
                                        return (
                                            moment(event.start).format(
                                                "YYYY-MM-DD"
                                            ) === clickedDate
                                        );
                                    }
                                ).length > 0;
                            // pass the formatted date value to the modal
                            $("#appointment_slot_modal")
                                .find("#slot_date")
                                .text(formattedDate);
                            $("#appointment_slot_modal").modal("show");

                            // Add event listener to remove clicked class and message when modal is dismissed
                            $("#appointment_slot_modal").on(
                                "hidden.bs.modal",
                                function () {
                                    $(".fc-day.clicked")
                                        .removeClass("clicked")
                                        .find(".click-message")
                                        .remove();
                                }
                            );
                            if (!isOccupied) {
                                $("#calendar").fullCalendar("renderEvent", {
                                    title: "Clicked",
                                    start: date,
                                    allDay: true,
                                });

                                $(".fc-day.clicked")
                                    .removeClass("clicked")
                                    .find(".click-message")
                                    .remove();

                                $('.fc-day[data-date="' + clickedDate + '"]')
                                    .addClass("clicked")
                                    .find(".fc-day-number")
                                    .append(
                                        '<span class="click-message">Clicked</span>'
                                    );
                            } else {
                                // The date is already occupied, show an error message or do nothing
                                alert("This date is already occupied.");
                            }
                        }
                    },
                });

                $("#submit_slot").on("click", function (event) {
                    var slot_date = $("#slot_date").text();
                    var input_slot = $("#input_slot").val();
                    console.log(slot_date);
                    console.log(input_slot);
                    $("#appointment_slot_modal").modal("hide");

                    //then AJAX inserted
                });
            });
        </script>

        <script>
            var menu_btn = document.querySelector("#menu-btn");
            var sidebar = document.querySelector("#sidebar");
            var container = document.querySelector(".content-container");
            menu_btn.addEventListener("click", () => {
                sidebar.classList.toggle("active-nav");
                container.classList.toggle("active-cont");
            });

            const backToTopBtn = document.querySelector("#back-to-top-btn");

            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 100) {
                    backToTopBtn.classList.add("show");
                    backToTopBtn.classList.remove("hide");
                } else {
                    backToTopBtn.classList.add("hide");
                    backToTopBtn.classList.remove("show");
                }
            });

            backToTopBtn.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        </script>
    </body>
</html>
