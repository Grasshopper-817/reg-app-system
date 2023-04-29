<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                    <a
                        href="/dashboard-admin/dashboard"
                        class="nav-link"
                        >Dashboard
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a href="/dashboard-admin/message" class="nav-link" onclick="viewMessage()"
                        >Message<span class="badge badge-custom">4</span></a
                    >
                </li>
                <hr />
                <li class="nav-item w-100">
                    <a href="/dashboard-admin/config" class="nav-link" onclick="viewForms()"
                        >Forms Configuration</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="/dashboard-admin/announcement" class="nav-link" onclick="viewAnnouncement()"
                        >Announcement</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="/dashboard-admin/faqs" class="nav-link" onclick="viewFaqs()">FAQs</a>
                </li>
                <li class="nav-item w-100">
                    <a href="/dashboard-admin/settings" class="nav-link" onclick="viewSettings()"
                        >Settings</a
                    >
                </li>
                <li class="nav-item w-100">
                    <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>

        <div class="content-container px-5 py-3">
            <div class="content-main">
                @yield('content')
            </div>
        </div>

        <button id="back-to-top-btn" class="btn btn-custom show" style="color: #131313;">Back to top</button>

        <!-- FIX footer -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"
        ></script>
        <script src="{{ asset('js/admin/divheight.js') }}"></script>
        <script src="{{ asset('js/admin/appointment/status-button.js') }}"></script>
        <script src="{{ asset('js/admin/appointment/info-display.js') }}"></script>

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

        <script>
            var url = "{{ url('') }}";
        </script>
        
        <!-- todo modals -->
        @include('admin-dashboard.modal.info')
        @include('admin-dashboard.modal.set-slot')
        @include('admin-dashboard.modal.confirm-status')
        @include('admin-dashboard.modal.forms.add-form')
        @include('admin-dashboard.modal.forms.delete-form')
        @include('admin-dashboard.modal.forms.edit-form')
        @include('admin-dashboard.modal.announcement.add-announcement')
        @include('admin-dashboard.modal.announcement.delete-announcement')
        @include('admin-dashboard.modal.announcement.edit-announcement')
    </body>
</html>
