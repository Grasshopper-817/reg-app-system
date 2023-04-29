<!-- fix update -->
<div class="modal fade" id="editAnnouncementModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAnnouncementModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-white font-nun" id="editAnnouncementModal">Edit Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="editATitle" class="form-label">Title</label>
                    <input type="text" class="form-control" name="editATitle" id="editATitle" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="editAPost" class="form-label">Announcement</label>
                    <textarea class="form-control" name="editAPost" id="editAPost" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Update</button>
            </div>
        </div>
    </div>
</div>