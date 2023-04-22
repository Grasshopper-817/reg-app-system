<div class="row d-flex flex-row m-2">
    <div class="appointment-records p-4">
        <div class="w-100 fs-2 font-bold font-nun mb-2">Appointment Requests</div>
        <div class="d-flex flex-row justify-content-end mb-2">
            <select name="sort" id="colors" class="btn text-start">
                <!-- FIX  -->
                <option value="">Sort by:</option>
                <option value="booking_id">Appointment ID</option>
                <option value="created_at">Date Filled</option>
                <option value="documents">Documents</option>
                <option value="first_name">First Name</option>
                <option value="last_name">Last Name</option>
            </select>
        </div>
        <div class="table-rounded">
            <table id="table" class="table table-bordered table-sm font-nun table-striped">
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
                    @foreach ($bookings as $booking)
                    <tr class="text-center">
                        <td>{{ $booking->appointment->booking_number }}</td>
                        <td>{{ $booking->user->school_id }}</td>
                        <td>{{ $booking->user->firstName }}</td>
                        <td>{{ $booking->user->lastName }}</td>
                        <td>{{ $booking->appointment->form->name}}</td>
                        <td>{{ $booking->created_at->format('M d, Y h:i A') }}</td>
                        <td class="td-view">
                            <a
                                type="button"
                                class="btn view-request p-0 view-btn"
                                id="{{ $booking->id }}"
                                data-bs-toggle="modal"
                                data-bs-target="#view-request-modal"
                                >View</a
                            >
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    var viewBtns = document.querySelectorAll('.view-btn');
    for (var i = 0; i < viewBtns.length; i++) {
        viewBtns[i].addEventListener('click', function() {
            var bookingId = this.id;

            fetch('/bookings/' + bookingId)
                .then(response => response.json())
                .then(data => {
                    console.log(data.email);
                    document.getElementById("viewFullName").innerHTML = data.fullName;
                    document.getElementById("viewEmail").innerHTML = data.email;
                    document.getElementById("viewCpNo").innerHTML = data.cell_no;
                    document.getElementById("viewSchoolID").innerHTML = data.school_id;
                    document.getElementById("viewStudentStatus").innerHTML = data.status;
                    document.getElementById("viewCourse").innerHTML = data.course;
                    document.getElementById("viewAcadYear").innerHTML = data.acadYear;
                    document.getElementById("viewGradYear").innerHTML = data.gradYear;
                    document.getElementById("viewGender").innerHTML = data.gender;
                    document.getElementById("viewCivilStats").innerHTML = data.civil_status;
                    document.getElementById("viewBirthdate").innerHTML = data.birthdate;
                    document.getElementById("viewAddress").innerHTML = data.address;

                    document.getElementById("viewAppID").innerHTML = data.booking_number;
                    document.getElementById("viewAppDate").innerHTML = data.appointment_date;
                    document.getElementById("viewDocDateReq").innerHTML = data.doc_created;
                    document.getElementById("viewDocReq").innerHTML = data.doc_name;
                    document.getElementById("viewDocReqYear").innerHTML = data.doc_req_year;
                    document.getElementById("viewPurpose").innerHTML = data.app_purpose;

                    document.getElementById("viewDocFee").innerHTML = data.doc_fee;
                    document.getElementById("viewMethod").innerHTML = data.payment_method;
                    // ...
                    });
        });
    }
</script>