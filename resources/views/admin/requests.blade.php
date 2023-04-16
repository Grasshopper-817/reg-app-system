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
                    <tr class="text-center">
                        <td>123456</td>
                        <td>ABCD1234</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>Transcript of Records (TOR)</td>
                        <td>2022-03-15</td>
                        <td class="td-view">
                            <a type="button" class="btn view-request p-0" id="view-request" data-bs-toggle="modal" data-bs-target="#view-request-modal">View</a>
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
                            <a type="button" class="btn view-request p-0" id="view-request" data-bs-toggle="modal" data-bs-target="#view-request-modal">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>