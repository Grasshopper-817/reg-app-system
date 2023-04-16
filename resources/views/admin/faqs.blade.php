<!-- TODO forms content -->
<div class="d-flex flex-column">
    <div
        id="faqs-head"
        class="w-100 px-5 d-flex flex-row justify-content-between align-items-center"
    >
        <div class="title font-nun font-bold fs-3">FAQs</div>
        <button
            class="btn btn-custom d-flex flex-row align-items-center"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#addFaqsModal"
        >
            <div class="logo">
                <img src="/images/add.png" alt="" />
            </div>
            <small class="m-0 ms-2 p-0 font-nun">Add</small>
        </button>
    </div>
    <div id="faqs-body" class="this-box mt-2">
        <div class="accordion" id="faqs-list">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button d-flex flex-row"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#1"
                        aria-expanded="false"
                        aria-controls="1"
                    >
                        <div class="d-flex flex-column align-items-start">
                            <div>How to make an Appointment?</div>
                            <small class="m-0 p-0"
                                >Posted on: February 13, 2023</small
                            >
                        </div>
                    </button>
                </h2>
                <div
                    id="1"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqs-list"
                >
                    <div class="accordion-body d-flex flex-column">
                        <div class="body-content">
                            <pre>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illum quibusdam aut tempore laboriosam rerum iusto, quod beatae perspiciatis temporibus nesciunt repellendus similique debitis, qui alias! Quibusdam ipsum vel voluptatem!
                            
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit aperiam non doloremque ipsum officia minus, quidem deleniti nihil, unde, cum doloribus. Debitis consequuntur, a molestias provident enim voluptate voluptates.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint neque iusto minus ab at incidunt magni error facilis consectetur? Totam expedita reprehenderit aliquid tempora at facilis nihil cum minima deleniti?
                            </pre>
                        </div>
                        <div
                            class="body-buttons d-flex flex-row justify-content-end mt-2"
                        >
                            <button
                                class="btn btn-custom d-flex flex-row align-items-center"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#editFaqsModal"
                            >
                                <img src="/images/edit.png" alt="" />
                                <small class="m-0 ms-2 p-0 font-nun"
                                    >Edit</small
                                >
                            </button>
                            <button
                                class="btn btn-custom d-flex flex-row align-items-center"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteFaqsModal"
                            >
                                <img src="/images/delete.png" alt="" />
                                <small class="m-0 ms-2 p-0 font-nun"
                                    >Delete</small
                                >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- todo modalizationssssssxxzzz -->
<div
    class="modal fade"
    id="addFaqsModal"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="addModalTitle"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h1
                    class="modal-title fs-5 font-nun font-white"
                    id="addModalTitle"
                >
                    Post FAQs
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="addQuestion" class="form-label">Question</label>
                    <input
                        type="text"
                        class="form-control"
                        name="addQuestion"
                        id="addQuestion"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="addAnswer" class="form-label">Answer</label>
                    <textarea
                        class="form-control"
                        name="addAnswer"
                        id="addAnswer"
                        rows="5"
                    ></textarea>
                </div>
                <!-- <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="toggle-switch">
                    <label class="form-check-label" for="toggle-switch">Featured</label>
                </div> -->
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-custom"
                    data-bs-dismiss="modal"
                >
                    Dissmis
                </button>
                <button type="submit" class="btn btn-custom ms-3">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- fix update -->
<div
    class="modal fade"
    id="editFaqsModal"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="editFaqsModal"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h1
                    class="modal-title fs-5 font-white font-nun"
                    id="editFaqsModal"
                >
                    Edit Post
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-3">
                    <label for="editQuestion" class="form-label"
                        >Question</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        name="editQuestion"
                        id="editQuestion"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="editAnswer" class="form-label">Answer</label>
                    <textarea
                        class="form-control"
                        name="editAnswer"
                        id="editAnswer"
                        rows="3"
                    ></textarea>
                </div>
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
                    Update
                </button>
            </div>
        </div>
    </div>
</div>

<!-- fix delete -->
<div
    class="modal fade"
    id="deleteFaqsModal"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="deleteFaqsModal"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h1
                    class="modal-title fs-5 font-white font-nun"
                    id="deleteFaqsModal"
                >
                    Delete Post
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body font-nun px-5 text-center">
                <p class="m-0 p-0">Are you sure to delete this post?</p>
                <b>"How to make an Appointment?"</b>
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
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
