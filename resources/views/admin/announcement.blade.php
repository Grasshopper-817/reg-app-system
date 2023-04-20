<!-- TODO forms content -->
<div class="d-flex flex-column">
    <div id="announcement-head" class="w-100 px-5 d-flex flex-row justify-content-between align-items-center">
        <div class="title font-nun font-bold fs-3">Announcement</div>
        <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
            <div class="logo">
                <img src="/images/add.png" alt="">
            </div>
            <small class="m-0 ms-2 p-0 font-nun">Add</small>
        </button>
    </div>
    <div id="announcement-body" class="this-box mt-2">
        <div class="accordion" id="announcement-list">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button d-flex flex-row" type="button" data-bs-toggle="collapse" data-bs-target="#1" aria-expanded="false" aria-controls="1">
                        <div class="d-flex flex-column align-items-start">
                            <div>Closing Transaction for February 16, 2023</div>
                            <small class="m-0 p-0">Posted on: February 13, 2023</small>
                        </div>
                    </button>
                </h2>
                <div id="1" class="accordion-collapse collapse" data-bs-parent="#announcement-list">
                    <div class="accordion-body d-flex flex-column">
                        <div class="body-content">
                            <pre>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illum quibusdam aut tempore laboriosam rerum iusto, quod beatae perspiciatis temporibus nesciunt repellendus similique debitis, qui alias! Quibusdam ipsum vel voluptatem!
                            
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit aperiam non doloremque ipsum officia minus, quidem deleniti nihil, unde, cum doloribus. Debitis consequuntur, a molestias provident enim voluptate voluptates.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint neque iusto minus ab at incidunt magni error facilis consectetur? Totam expedita reprehenderit aliquid tempora at facilis nihil cum minima deleniti?
                            </pre>
                        </div>
                        <div class="body-buttons d-flex flex-row justify-content-end mt-2">
                            <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal">
                                    <img src="/images/edit.png" alt="">
                                <small class="m-0 ms-2 p-0 font-nun">Edit</small>
                            </button>
                            <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#deleteAnnouncementModal">
                                    <img src="/images/delete.png" alt="">
                                <small class="m-0 ms-2 p-0 font-nun">Delete</small>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- todo modalizationssssssxxzzz -->
<!-- fix update modal -->
<form action="{{ route('announcement-store') }}" method="POST">
    @csrf

<div class="modal fade" id="addAnnouncementModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAnnouncementModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-white font-nun" id="addAnnouncementModal">Post Announcement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="addATitle" class="form-label">Title</label>
                    <input type="text" class="form-control" name="announcement_title" id="addATitle" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="addAPost" class="form-label">Announcement</label>
                    <textarea class="form-control" name="announcement_text" id="addAPost" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Post</button>
            </div>
        </div>
    </div>
</div>
</form>
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

<!-- fix delete -->
<div class="modal fade" id="deleteAnnouncementModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteAnnouncementModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-white font-nun" id="deleteAnnouncementModal">Delete Announcement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body font-nun px-5 text-center">
                <p class="m-0 p-0"> Are you sure to delete this post?</p>
                <b>Close Transaction as of April 9, 2023</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Delete</button>
            </div>
        </div>
    </div>
</div>