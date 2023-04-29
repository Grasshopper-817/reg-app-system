@extends('admin-dashboard.admin')

@section('content')
    <!-- header -->
    <div class="d-flex flex-row align-items-center mb-3">
        <a class="btn d-flex flex-row align-items-center" id="menu-btn">
            <img src="/images/back-arrow.png" alt="" />
            <p class="m-0 p-0 font-nun fs-6 ms-2" id="page-title">
                Dashboard
            </p>
        </a>
    </div>

    <!-- small navigation -->
    <nav class="navigation this-box mb-3">
        <ul class="font-nun small-nav">
            <li><a href="/dashboard-admin/request">Appointment Requests</a></li>
            <li><a href="#appRec">Appointment History</a></li>
            <li><a href="#">Print Records</a></li>
        </ul>
    </nav>


    <div id="dashboard-content">
        <div class="row d-flex flex-row">
            <div class="col-md-4">
                <div id="track-boxes" class="track-boxes p-4 mb-3">

                    <ul class="list-group list-group-flush">
                        <li
                        class="list-group-item py-3 px-4 font-nun row d-flex flex-row align-items-center justify-content-between"
                    >
                        <p
                            class="p-0 m-0 doc-title flex-1 col-9"
                        >
                      <h4>  List of pending as of today </h4>
                        </p>
                    </li>
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
                                >20</span
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
                <div id="cal-box" class="cal-box p-4 mb-3">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <div class="space my-4"></div>
        <div class="row d-flex flex-row m-2" id="appRec">
            <div class="appointment-records p-4">
                <div class="w-100 fs-2 font-bold font-nun mb-2">
                    Appointment History
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
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="cal-box" class="cal-box p-4">
                        <h4>Scheduling Calendar</h4>
                        <small>Set a day for appointment slot</small>
                        <div id="calendar">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header font-karma">Appointment Slots</div>
                        <div class="card-body">
                            <form id="create_slot_form" method="POST" action="{{ route('appointment_slots.store') }}">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="slot_date" class="font-karma">Slot Date:</label>
                                    <input type="date" class="form-control" id="slot_date" name="slot_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="available_slots" class="font-karma">Available Slots:</label>
                                    <input type="number" class="form-control" id="available_slots" name="available_slots" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label font-karma" for="">
                                            Disable
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-custom">Create Slot</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection