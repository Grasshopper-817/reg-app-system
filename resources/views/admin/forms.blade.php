<!-- TODO forms content -->
<div class="d-flex flex-column">
    <nav class="navigation this-box">
        <ul class="font-nun">
          <li><a href="#forms">Forms</a></li>
          <li><a href="#courses">Courses</a></li>
        </ul>
    </nav>

    <!-- fix sectionf forms -->
        <section id="forms" class="mt-4 mb-2">
        <div id="forms-head" class="w-100 px-5 d-flex flex-row justify-content-between align-items-center">
            <div class="title font-nun font-bold fs-3">Forms</div>
            <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#addFormModal">
                <div class="logo">
                    <img src="/images/add.png" alt="">
                </div>
                <small class="m-0 ms-2 p-0 font-nun">Add</small>
            </button>
        </div>
        <div id="forms-body" class="this-box mt-2">
            <div class="accordion" id="forms-list">
            @foreach ($forms as $form)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $form->id }}" aria-expanded="false" aria-controls="1">
                        <!-- Issuance of Transcript of Records (TOR) -->   {{ $form->name }}
                        </button>
                    </h2>
                    <div id="{{ $form->id }}" class="accordion-collapse collapse" data-bs-parent="#forms-list">
                        <div class="accordion-body d-flex flex-column">
                            <div class="body-content">
                                <div class="row w-100 p-0 my-2">
                                    <div class="col-md-6">
                                        <p class="info-title">Availability of the Service</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="info-content"> {{ $form->form_avail }}</p>
                                    </div>
                                </div>
                                <hr class="font-88">
                                <div class="row w-100 p-0 my-2">
                                    <div class="col-md-6">
                                        <p class="info-title">Who May Avail the Service</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="info-content"> {{ $form->form_who_avail }}</p>
                                    </div>
                                </div>
                                <hr class="font-88">
                                <div class="row w-100 p-0 my-2">
                                    <div class="col-md-6">
                                        <p class="info-title">What Are the Requirements</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="info-content">{{ $form->form_requirements }}</p>
                                    </div>
                                </div>
                                <hr class="font-88">
                                <div class="row w-100 p-0 my-2">
                                    <div class="col-md-6">
                                        <p class="info-title">Complete Processing Time: </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="info-content">{{ $form->form_process }}</p>
                                    </div>
                                </div>
                                <hr class="font-88">
                                <div class="row w-100 p-0 my-2">
                                    <div class="col-md-6">
                                        <p class="info-title">Document Fee: </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="info-content">{{ $form->fee }}</p>
                                    </div>
                                </div>
                                <hr class="font-88">
                                <div class="row w-100 p-0 my-2">
                                    <div class="col-md-6">
                                        <p class="info-title">Maximum Time to Claim</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="info-content"> {{ $form->form_max_time }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body-buttons d-flex flex-row justify-content-end mt-2">
                                <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#editFormModal">
                                        <img src="/images/edit.png" alt="">
                                    <small class="m-0 ms-2 p-0 font-nun">Edit</small>
                                </button>
                                <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#deleteFormModal">
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
    </section>
    
    
    <!-- fix section courses -->
    <section id="courses" class="mt-2 mb-2">
        <div id="forms-head" class="w-100 px-5 d-flex flex-row justify-content-between align-items-center">
            <div class="title font-nun font-bold fs-3">Courses</div>
            <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#addCourseModal">
                <div class="logo">
                    <img src="/images/add.png" alt="">
                </div>
                <small class="m-0 ms-2 p-0 font-nun">Add</small>
            </button>
        </div>
        <div id="forms-body" class="this-box mt-2">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0 p-0">Bachelor of Science in Computer Science</p>
                    <div class="body-buttons d-flex flex-row justify-content-end align-items-center">
                        <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#editCourseModal">
                            <img src="/images/edit.png" alt="">
                            <small class="m-0 ms-2 p-0 font-nun d-none d-md-flex">Edit</small>
                        </button>
                        <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#deleteCourseModal">
                            <img src="/images/delete.png" alt="">
                            <small class="d-none d-md-flex m-0 ms-2 p-0 font-nun">Delete</small>
                        </button>
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0 p-0">Bachelor of Science in Information Technology</p>
                    <div class="body-buttons d-flex flex-row justify-content-end align-items-center">
                        <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#editCourseModal">
                            <img src="/images/edit.png" alt="">
                            <small class="m-0 ms-2 p-0 font-nun d-none d-md-flex">Edit</small>
                        </button>
                        <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#deleteCourseModal">
                            <img src="/images/delete.png" alt="">
                            <small class="d-none d-md-flex m-0 ms-2 p-0 font-nun">Delete</small>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</div>


<!-- TODO modals -->
<!-- fix add form modal --> 
{{-- Create og new form --}}
{{-- <form action="{{ url('admin/dashboard/update/'.$forms->id) }}" method="POST">
    @csrf
    @if (Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
      @if (Session::has('fail'))
      <div class="alert alert-danger">{{ Session::get('fail') }}</div>
      @endif 
    @method('PUT') --}}
<div class="modal fade" id="addFormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-nun font-white" id="addModalTitle">Add Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="addFormName" class="form-label">Form Name</label>
                    <input type="text" class="form-control" name="name"  id="addFormName" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="addAvailability" class="form-label">Availability of the Service</label>
                    <textarea class="form-control" name="form_avail" id="addAvailability" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="addAvailService" class="form-label">Who may Avail the Service</label>
                    <textarea class="form-control" name="form_who_avail" id="addAvailService" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="addReq" class="form-label">What are the Requirements</label>
                    <textarea class="form-control" name="form_requirements" id="addReq" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="addProcessingTime" class="form-label">Complete Processing Time</label>
                    <textarea class="form-control" name="form_process" id="addProcessingTime" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="addDocFee" class="form-label">Document Fee</label>
                    <textarea class="form-control" name="fee" id="addDocFee" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="addMaxTimeClaim" class="form-label">Maximum Time to Claim</label>
                    <textarea class="form-control" name="form_max_time" id="addMaxTimeClaim" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Add</button>
            </div>
        </div>
    </div>
</div>
{{-- </form> --}}

<!-- fix update modal -->
{{-- <form action="{{ route('create-form') }}" method="POST">
    @csrf --}}
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
{{-- </form> --}}

<!-- fix delete confirmation modal -->
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
                <button type="submit" class="btn btn-custom ms-3">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- TODO courses modals -->
<!-- fix add courses modal -->
<div class="modal fade" id="addCourseModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCourseModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-nun font-white" id="addCourseModalTitle">Add Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="addCourseName" class="form-label">Course Name</label>
                    <input type="text" class="form-control" name="addCourseName" id="addCourseName" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- fix update course modal -->
<div class="modal fade" id="editCourseModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCourseModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-nun font-white" id="editCourseModalTitle">Edit Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="editCourseName" class="form-label">Course Name</label>
                    <input type="text" class="form-control" name="editCourseName" id="editCourseName" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- fix delete confirmation modal -->
<div class="modal fade" id="deleteCourseModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteCourseModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-white font-nun" id="deleteCourseModal">Delete Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body font-nun px-5 text-center">
                <p class="m-0 p-0">You are about to delete the</p>
                <b>Bachelor of Science in Computer Science</b>
                <p class="m-0 p-0"> Are you sure to delete this course?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Dissmis</button>
                <button type="submit" class="btn btn-custom ms-3">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- TODO scripts -->
<script>
    var links = document.querySelectorAll('.navigation a');

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var target = this.getAttribute('href');
            var offset = document.querySelector(target).offsetTop - 100;

            window.scrollTo({
            top: offset,
            behavior: 'smooth'
            });
        });
    });
</script>