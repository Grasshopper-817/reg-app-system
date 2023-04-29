<div
    class="modal fade"
    id="appointment_slot_modal"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-white font-nun">
                    Date: <span class="ms-2" id="slot_date"></span>
                </h1>
                    
                <a class="btn btn-reverse d-flex justify-content-end font-nun" href="/dashboard-admin/request">
                    View Appointments
                </a>
            </div>
            <div class="modal-body font-nun px-5 text-center">
                <div class="w-auto d-flex flex-row justify-content-start mb-3">
                </div>
                <div id="set_slot_div">
                    <form action="" method="post">
                        <div class="w-auto d-flex flex-row justify-content-end mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="" disabled>
                            <label class="form-check-label" for="">Not Disabled</label>
                            <input class="form-check-input ms-2" type="checkbox" value="" id="" checked disabled>
                            <label class="form-check-label" for="">Disabled</label>
                        </div>
                        <div class="w-auto d-flex flex-row justify-content-end">
                            <input type="checkbox" class="btn-check" id="disable" name="disable" autocomplete="off">
                            <label class="btn btn-disable" for="disable">Disable</label>
                        </div>
                        <div class="row">
                            <label
                                class="p-0 font-karma text-center"
                                for="input_slot">
                                Enter the number of slots available
                            </label>
                            <input
                                class="form-control"
                                type="number"
                                id="input_slot"
                                placeholder=""
                                aria-label="default input example"
                            />
                        </div>
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