<div class="modal fade" id="deleteFormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteFormModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-white font-nun" id="deleteFormModal">Delete Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body font-nun px-5 text-center">
                <p class="m-0 p-0">You are about to delete the</p>
                <b>Issuance of Transcript of Records (TOR)</b>
                <p class="m-0 p-0"> Are you sure to delete this form?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                {{-- <form id="delete-form" action="{{ route('forms.destroy', $form->id) }}" method="POST">
                    @csrf
                    @method('DELETE') --}}
                    <input type="hidden" name="form_id" id="form_id">
                    <button type="submit" class="btn btn-custom">Delete</button>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#delete-form').submit(function() {
            $(this).find(':submit').attr('disabled', 'disabled');
        });
    });
</script>
