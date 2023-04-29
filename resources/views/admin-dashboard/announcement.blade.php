@extends('admin-dashboard.admin')

@section('content')
    <!-- header -->
    <div class="d-flex flex-row align-items-center mb-3">
        <a class="btn d-flex flex-row align-items-center" id="menu-btn">
            <img src="/images/back-arrow.png" alt="" />
            <p class="m-0 p-0 font-nun fs-6 ms-2" id="page-title">
                Announcement
            </p>
        </a>
    </div>

    <!-- TODO forms content -->
    <div class="d-flex flex-column">
        <div id="announcement-head" class="w-100 px-5 d-flex flex-row justify-content-between align-items-center">
            <div class="title font-nun font-bold fs-3">Post Announcement</div>
            <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
                <div class="logo">
                    <img src="/images/add.png" alt="">
                </div>
                <small class="m-0 ms-2 p-0 font-nun">Add</small>
            </button>
        </div>
        <div id="announcement-body" class="this-box mt-2">
            <div class="accordion" id="announcement-list">
                @foreach ($announcements as $announcement)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button d-flex flex-row" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $announcement->id }}" aria-expanded="false" aria-controls="1">
                            <div class="d-flex flex-column align-items-start">
                                <div>{{ $announcement->announcement_title }}</div>
                                <small class="m-0 p-0">Posted on: {{ $announcement->created_at }}</small>
                            </div>
                        </button>
                    </h2>
                    <div id="{{ $announcement->id }}" class="accordion-collapse collapse" data-bs-parent="#announcement-list">
                        <div class="accordion-body d-flex flex-column">
                            <div class="body-content">
                                <pre>{{ $announcement->announcement_text }}</pre>
                            </div>
                            <div class="body-buttons d-flex flex-row justify-content-end mt-2">
                                <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" data-announcement-id="{{ $announcement->id }}">
                                        <img src="/images/edit.png" alt="">
                                    <small class="m-0 ms-2 p-0 font-nun">Edit</small>
                                </button>
                                <button class="btn btn-custom d-flex flex-row align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#deleteAnnouncementModal" data-announcement-id="{{ $announcement->id }}">
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
@endsection