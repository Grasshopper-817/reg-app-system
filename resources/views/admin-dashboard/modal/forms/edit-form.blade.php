<div class="modal fade" id="editFormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editFormModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-white font-nun" id="editFormModal">Edit Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="editFormName" class="form-label">Form Name</label>
                    <input type="text" class="form-control" name="editFormName" id="editFormName" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="editAvailability" class="form-label">Availability of the Service</label>
                    <textarea class="form-control" name="editAvailability" id="editAvailability" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="editAvailService" class="form-label">Who may Avail the Service</label>
                    <textarea class="form-control" name="editAvailService" id="editAvailService" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="editReq" class="form-label">What are the Requirements</label>
                    <textarea class="form-control" name="editReq" id="editReq" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="editProcessingTime" class="form-label">Complete Processing Time</label>
                    <textarea class="form-control" name="editProcessingTime" id="editProcessingTime" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="editDocFee" class="form-label">Document Fee</label>
                    <textarea class="form-control" name="editDocFee" id="editDocFee" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="editMaxTimeClaim" class="form-label">Maximum Time to Claim</label>
                    <textarea class="form-control" name="editMaxTimeClaim" id="editMaxTimeClaim" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Update</button>
            </div>
        </div>
    </div>
</div>


{{-- 
<!-- edit-form.blade.php -->
<div class="modal fade" id="editFormModal{{ $form->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-white font-nun" id="editFormModalLabel">Edit Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body px-5">
                    <div class="modal-body">
                        <form>
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="form_id" id="form_id" value="">
                            <div class="mb-3">
                                <label for="editFormName" class="form-label">Form Name</label>
                                <input type="text" class="form-control" name="editFormName" id="editFormName" placeholder="" value="{{ old('editFormName') }}">
                                @error('editFormName')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="editAvailability" class="form-label">Availability</label>
                                <input type="text" class="form-control" name="editAvailability" id="editAvailability" placeholder="" value="{{ old('editAvailability') }}">
                                @error('editAvailability')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="editAvailService" class="form-label">Who can avail this service?</label>
                                <input type="text" class="form-control" name="editAvailService" id="editAvailService" placeholder="" value="{{ old('editAvailService') }}">
                                @error('editAvailService')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="editReq" class="form-label">Requirements</label>
                                <textarea class="form-control" name="editReq" id="editReq" rows="3">{{ old('editReq') }}</textarea>
                                @error('editReq')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="editProcessingTime" class="form-label">Processing Time</label>
                                <input type="text" class="form-control" name="editProcessingTime" id="editProcessingTime" placeholder="" value="{{ old('editProcessingTime') }}">
                                @error('editProcessingTime')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="editDocFee" class="form-label">Document Fee</label>
                                <input type="text" class="form-control" name="editDocFee" id="editDocFee" placeholder="" value="{{ old('editDocFee') }}">
                                @error('editDocFee')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="editMaxTimeClaim" class="form-label">Max Time to Claim</label>
                                <input type="text" class="form-control" name="editMaxTimeClaim" id="editMaxTimeClaim" placeholder="" value="{{ old('editMaxTimeClaim') }}">
                                @error('editMaxTimeClaim')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </form>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" class="btn btn-custom ms-3" id="updateFormBtn">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#editFormModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var form = button.data('form');
        $('#form_id').val(form.id);
        var form = button.data('form');
        $('#form_id').val(form.id);
        $('#editFormName').val(form.form_name);
        $('#editAvailability').val(form.availability);
        $('#editAvailService').val(form.who_can_avail);
        $('#editReq').val(form.requirements);
        $('#editProcessingTime').val(form.processing_time);
        $('#editDocFee').val(form.document_fee);
        $('#editMaxTimeClaim').val(form.max_time_claim);
    });
</script>

<script>
    $('#updateFormBtn').click(function(e){
        e.preventDefault();
        var form_id = $('#form_id').val();
        var form_data = {
            form_name: $('#editFormName').val(),
            availability: $('#editAvailability').val(),
            who_can_avail: $('#editAvailService').val(),
            requirements: $('#editReq').val(),
            processing_time: $('#editProcessingTime').val(),
            document_fee: $('#editDocFee').val(),
            max_time_claim: $('#editMaxTimeClaim').val(),
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            url: '/forms/'+form_id,
            method: 'PUT',
            data: form_data,
            success: function(result){
                $('#editFormModal').modal('hide');
                location.reload();
            }
        });
    });
</script>
 --}}
