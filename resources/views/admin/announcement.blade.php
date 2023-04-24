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
            @foreach ( $announcements as $announcement )
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button d-flex flex-row" type="button" data-bs-target="#{{ $announcement->id }}"  data-bs-toggle="collapse" data-bs-target="#1" aria-expanded="false" aria-controls="1">
                        <div class="d-flex flex-column align-items-start">
                            <div>{{ $announcement->announcement_title }} {{ $announcement->created_at->format('F d, Y') }}</div>
                            <small class="m-0 p-0">Posted on: {{ $announcement->created_at->format('F d, Y') }}</small>
                        </div>
                    </button>
                </h2>
                <div id="{{ $announcement->id }}" class="accordion-collapse collapse" data-bs-parent="#announcement-list">
                    <div class="accordion-body d-flex flex-column">
                        <div class="body-content">
                            <pre>
                                {{ $announcement->announcement_text }}
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
            @endforeach
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
                <p class="m-0 p-0"> Are you sure to delete this announcement?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Delete</button>
            </div>
        </div>
    </div>
</div>