<!DOCTYPE html>
<html lang="en">

<head>
    @@include("../partials/head.html")
    <title>Chat App | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
        @@include("../partials/header.html")
        <!-- navbar vertical -->
        @@include('../partials/navbar-vertical.html', {
        "page": "chat"
        })
        <!-- page content -->
        <div id="app-content">
            <div class="app-content-area">
                <div class="container-fluid">
                    <!-- row -->
                    <div class="card chat-layout">
                        <div class="row g-0">
                            <div class="col-xxl-3 col-xl-4 col-md-12 col-12 border-end">
                                <div class="h-100">
                                    <!-- chat list -->
                                    <div class="chat-window">
                                        <div class="chat-sticky-header sticky-top">
                                            <div class="px-4 pt-3 pb-4">
                                                <!-- heading -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h1 class="mb-0  h3">Chat</h1>
                                                    </div>
                                                    <!-- new chat dropdown -->
                                                    <div>
                                                        <a href="#!"
                                                            class="btn btn-primary rounded-circle btn-icon texttooltip"
                                                            data-template="newchat" data-bs-toggle="modal"
                                                            data-bs-target="#newchatModal">
                                                            <i data-feather="edit" class="icon-xs"></i>
                                                            <div id="newchat" class="d-none">
                                                                <span>New Chat</span>
                                                            </div>
                                                        </a>
                                                        <span class="dropdown dropstart">
                                                            <a href="#!" class="btn btn-light btn-icon rounded-circle "
                                                                id="settingLink" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i data-feather="settings" class="icon-xxs"></i></a>
                                                            <span class="dropdown-menu" aria-labelledby="settingLink">
                                                                <a class="dropdown-item" href="#!">Setting</a>
                                                                <a class="dropdown-item" href="#!">Help and Feedback</a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- search -->
                                                <div class="mt-4 mb-4">
                                                    <input type="search" class="form-control"
                                                        placeholder="Search people, group and messages">
                                                </div>
                                                <!-- User chat -->

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <!-- media -->
                                                    <a href="#!" class="text-inherit">
                                                        <div class="d-flex">
                                                            <div
                                                                class="avatar avatar-md avatar-indicators avatar-online">
                                                                <img src="../assets/images/avatar/avatar-11.jpg"
                                                                    alt="Image" class="rounded-circle">
                                                            </div>
                                                            <!-- media body -->
                                                            <div class=" ms-2">
                                                                <h5 class="mb-0">Jitu Chauhan</h5>
                                                                <p class="mb-0 text-muted">Online</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!-- dropdown -->
                                                    <div class="dropdown dropstart">
                                                        <a href="#!"
                                                            class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                                            id="userSetting" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><i
                                                                data-feather="more-horizontal" class="icon-xs"></i></a>
                                                        <ul class="dropdown-menu" aria-labelledby="userSetting">
                                                            <li
                                                                class="dropdown-animation dropdown-submenu dropdown-toggle-none">
                                                                <a class="dropdown-item dropdown-toggle" href="#!"
                                                                    aria-haspopup="true" aria-expanded="false"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class=" dropdown-item-icon"
                                                                        data-feather="circle"></i>Status
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-xs">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#!">
                                                                            <span
                                                                                class="badge-dot bg-success me-2"></span>Online
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#!">
                                                                            <span
                                                                                class="badge-dot bg-secondary me-2"></span>Offline
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#!">
                                                                            <span
                                                                                class="badge-dot bg-warning me-2"></span>Away
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#!">
                                                                            <span
                                                                                class="badge-dot bg-danger me-2"></span>Busy
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#!"><i
                                                                        class=" dropdown-item-icon"
                                                                        data-feather="settings"></i>Setting</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#!"><i
                                                                        class=" dropdown-item-icon"
                                                                        data-feather="user"></i>Profile</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#!"><i
                                                                        class=" dropdown-item-icon"
                                                                        data-feather="power"></i>Sign Out</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- nav tabs-->

                                            <ul class="nav nav-line-bottom" id="tab" role="tablist">
                                                <!-- nav item -->
                                                <li class="nav-item">
                                                    <a class="nav-link active py-2" id="recent-tab"
                                                        data-bs-toggle="pill" href="#recent" role="tab"
                                                        aria-controls="recent" aria-selected="true">Recent</a>
                                                </li>
                                                <!-- nav item -->
                                                <li class="nav-item">
                                                    <a class="nav-link py-2" id="contact-tab" data-bs-toggle="pill"
                                                        href="#contact" role="tab" aria-controls="contact"
                                                        aria-selected="true">Contact</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div data-simplebar style="height: 600px; overflow: auto;">
                                            <!-- tab content -->
                                            <div class="tab-content" id="tabContent">
                                                <!-- tab pane -->
                                                <div class="tab-pane fade show active" id="recent" role="tabpanel"
                                                    aria-labelledby="recent-tab">
                                                    <!-- contact list -->
                                                    <ul class="list-unstyled contacts-list">
                                                        <!-- contact item -->
                                                        <li class="py-3 px-4 chat-item contacts-link">
                                                            <!-- contact link -->

                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <!-- media -->
                                                                <a href="#!" class="text-inherit ">
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-2.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0 ">
                                                                                Denise Reece
                                                                            </h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                I m for unread message components...
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <!-- icon -->
                                                                    <small class="text-muted">8:48AM</small>
                                                                    <div class="text-end">
                                                                        <span
                                                                            class="icon-shape icon-xs text-white bg-danger rounded-circle  fs-6">1</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- chat action -->
                                                            <div class="chat-actions">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton2"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-horizontal"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton2">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat item -->
                                                        <li class="bg-light py-3 px-4 chat-item contacts-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <a href="#!" class="text-inherit ">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-4.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Kevin White</h5>
                                                                            <p class="mb-0 text-muted">
                                                                                Currently chat with user components...
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <small class="text-muted">8:48AM</small>
                                                                </div>
                                                            </div>
                                                            <!-- chat actions -->
                                                            <div class="chat-actions">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton3"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal icon-xs">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="19" cy="12" r="1"></circle>
                                                                            <circle cx="5" cy="12" r="1"></circle>
                                                                        </svg>
                                                                    </a>
                                                                    <!-- dropdown menu -->
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton3">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat item -->
                                                        <li class="py-3 px-4 chat-item contacts-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <a href="#!" class="text-inherit ">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-3.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Mary Newton</h5>
                                                                            <img src="../assets/images/png/dot-move.png"
                                                                                alt="Image" class="ms-1">
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <small class="text-muted">8:48AM</small>
                                                                </div>
                                                            </div>
                                                            <!-- chat actions -->
                                                            <div class="chat-actions">
                                                                <!-- dropdown  -->
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton4"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-horizontal"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton4">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat item -->
                                                        <li class="py-3 px-4 chat-item contacts-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <a href="#!" class="text-inherit ">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <div
                                                                            class="avatar avatar-sm avatar-primary position-absolute mt-3 ms-n2">
                                                                            <span
                                                                                class="avatar-initials rounded-circle fs-6">DU</span>
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Figma to HTML5</h5>
                                                                            <p class="mb-0 text-muted">
                                                                                Convert Figma to HTML5 template...
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <small class="text-muted">3/11/2023</small>
                                                                </div>
                                                            </div>
                                                            <!-- chat actions -->
                                                            <div class="chat-actions">
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton5"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-horizontal"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <!-- dropdown menu -->
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton5">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat item -->
                                                        <li class="py-3 px-4 chat-item contacts-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <a href="#!" class="text-inherit ">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-away">
                                                                            <img src="../assets/images/avatar/avatar-5.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Richard Sousa</h5>
                                                                            <p class="mb-0 text-muted">
                                                                                On going description of group...
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <small class="text-muted">2/10/2023</small>
                                                                </div>
                                                            </div>
                                                            <!-- chat actions -->
                                                            <div class="chat-actions">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton6"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-horizontal"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <!-- dropdown menu -->
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton6">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat item -->
                                                        <li class="py-3 px-4 chat-item contacts-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <a href="#!" class="text-inherit ">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-offline">
                                                                            <img src="../assets/images/avatar/avatar-9.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Melissa Westbrook</h5>
                                                                            <p class="mb-0 text-muted">
                                                                                On going description of group...
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <small class="text-muted">2/3/2023</small>
                                                                </div>
                                                            </div>
                                                            <!-- chat actions -->
                                                            <div class="chat-actions">
                                                                <!-- dropdown  -->
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton7"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-horizontal"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton7">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat item -->
                                                        <li class="py-3 px-4 chat-item contacts-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <a href="#!" class="text-inherit ">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-busy">
                                                                            <img src="../assets/images/avatar/avatar-19.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Christy Obrien</h5>
                                                                            <p class="mb-0 text-muted">
                                                                                Start design system for UI.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <small class="text-muted">1/24/2023</small>
                                                                </div>
                                                            </div>
                                                            <!-- chat actions -->
                                                            <div class="chat-actions">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton8"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-horizontal"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton8">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat item -->
                                                        <li class="py-3 px-4 chat-item contacts-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <a href="#!" class="text-inherit ">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-busy">
                                                                            <img src="../assets/images/avatar/avatar-12.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Herbert Strayhorn</h5>
                                                                            <p class="mb-0 text-muted">
                                                                                Start design system for UI...
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <small class="text-muted">3/3/2023</small>
                                                                </div>
                                                            </div>
                                                            <!-- chat actions -->
                                                            <div class="chat-actions">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton9"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-horizontal"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton9">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat item -->
                                                        <li class="py-3 px-4 chat-item contacts-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <a href="#!" class="text-inherit ">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-14.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Joe Lindahl</h5>
                                                                            <p class="mb-0 text-muted">
                                                                                On going description of group..
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div>
                                                                    <small class="text-muted">1/5/2023</small>
                                                                </div>
                                                            </div>
                                                            <!-- chat actions -->
                                                            <div class="chat-actions">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a href="#!"
                                                                        class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
                                                                        id="dropdownMenuButton10"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-horizontal"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton10">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-pin-angle dropdown-item-icon"></i>Pin</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-x dropdown-item-icon"></i>Mute</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-eye-slash dropdown-item-icon"></i>Hide</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="bi-person-plus dropdown-item-icon"></i>Add
                                                                            to Favorite</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- tab pane -->
                                                <div class="tab-pane" id="contact" role="tabpanel"
                                                    aria-labelledby="contact-tab">
                                                    <ul class="list-unstyled">
                                                        <!-- list -->
                                                        <li>
                                                            <div class="bg-light py-1 px-4 border-bottom ">
                                                                F
                                                            </div>
                                                            <a href="#!" class="text-inherit ">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 border-bottom chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex position-relative">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-2.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>

                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Fatima Darbar</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Online
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex position-relative">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-offline">
                                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <div
                                                                            class="avatar avatar-sm avatar-primary position-absolute mt-3 ms-n2">
                                                                            <span
                                                                                class="avatar-initials rounded-circle fs-6">DU</span>
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Figma Design Group</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Offline
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- list -->
                                                        <li>
                                                            <div
                                                                class="bg-light py-1 px-4 border-bottom border-top  text-dark">
                                                                J
                                                            </div>
                                                            <a href="#!" class="text-inherit">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 border-bottom chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-away">
                                                                            <img src="../assets/images/avatar/avatar-19.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Jamarcus Streich</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Away
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-away">
                                                                            <img src="../assets/images/avatar/avatar-21.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Jasmin Poicha</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Away
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- list -->
                                                        <li>
                                                            <div
                                                                class="bg-light py-1 px-4 border-bottom border-top  text-dark">
                                                                O
                                                            </div>
                                                            <a href="#!" class="text-inherit">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 border-bottom chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-2.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Olivia Cooper</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Feeling Happy
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-busy">
                                                                            <img src="../assets/images/avatar/avatar-12.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Oswal Baug</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Busy
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- list -->
                                                        <li>
                                                            <div
                                                                class="bg-light py-1 px-4 border-bottom border-top  text-dark">
                                                                P
                                                            </div>
                                                            <a href="#!" class="text-inherit">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-5.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Pete Martin</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Online
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#!" class="text-inherit">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-11.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Kancha China</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Offline
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- list -->
                                                        <li>
                                                            <div
                                                                class="bg-light py-1 px-4 border-bottom border-top  text-dark">
                                                                S
                                                            </div>
                                                            <a href="#!" class="text-inherit">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-4.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Kevin White</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Busy
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#!" class="text-inherit">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-8.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Sarita Nigam</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Busy
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- list -->
                                                        <li>
                                                            <div
                                                                class="bg-light py-1 px-4 border-bottom border-top  text-dark">
                                                                T
                                                            </div>
                                                            <a href="#!" class="text-inherit">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-3.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Tanya Davias</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Offline
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#!" class="text-inherit">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-3 px-4 chat-item">
                                                                    <!-- media -->
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="avatar avatar-md avatar-indicators avatar-online">
                                                                            <img src="../assets/images/avatar/avatar-5.jpg"
                                                                                alt="Image" class="rounded-circle">
                                                                        </div>
                                                                        <!-- media body -->
                                                                        <div class=" ms-2">
                                                                            <h5 class="mb-0">Tushar Mishra</h5>
                                                                            <p class="mb-0 text-muted text-truncate">
                                                                                Offline
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xxl-9 col-xl-8 col-md-12 col-12">
                                <!-- chat list -->
                                <div class="chat-body w-100 h-100">
                                    <div class="card-header sticky-top  ">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <!-- media -->
                                            <div class="d-flex align-items-center" id="active-chat-user">
                                                <a href="#!" class=" d-xl-none d-block" data-close><i
                                                        data-feather="arrow-left"></i></a>
                                                <div class="avatar avatar-md avatar-indicators avatar-online ms-3">
                                                    <img src="../assets/images/avatar/avatar-4.jpg" alt="Image"
                                                        class="rounded-circle">
                                                </div>
                                                <!-- media body -->
                                                <div class=" ms-2">
                                                    <h4 class="mb-0">Sharad Mishra</h4>
                                                    <p class="mb-0 text-muted">Online</p>
                                                </div>
                                            </div>


                                            <div>
                                                <a href="#!"
                                                    class="btn btn-ghost btn-icon btn-md rounded-circle texttooltip"
                                                    data-template="voiceCall">
                                                    <i data-feather="phone-call" class="icon-xs"></i>
                                                    <div id="voiceCall" class="d-none">
                                                        <span>Voice Call</span>
                                                    </div>
                                                </a>
                                                <a href="#!"
                                                    class="btn btn-ghost btn-icon btn-md rounded-circle texttooltip"
                                                    data-template="video">
                                                    <i data-feather="video" class="icon-xs"></i>
                                                    <div id="video" class="d-none">
                                                        <span>Video Call</span>
                                                    </div>
                                                </a>
                                                <a href="#!"
                                                    class="btn btn-ghost btn-icon btn-md rounded-circle texttooltip"
                                                    data-template="addUser">
                                                    <i data-feather="user-plus" class="icon-xs"></i>
                                                    <div id="addUser" class="d-none">
                                                        <span>Add Users</span>
                                                    </div>
                                                </a>



                                            </div>

                                        </div>

                                        <div class="card-body" id="conversation-list" data-simplebar=""
                                            style="height: 650px; overflow:auto">
                                            <!-- media -->
                                            <div class="d-flex w-lg-40 mb-4">
                                                <img src="../assets/images/avatar/avatar-4.jpg" alt="Image"
                                                    class="rounded-circle avatar-md user-avatar">
                                                <!-- media body -->
                                                <div class=" ms-3">
                                                    <small><span class="username">Sharad Mishra</span> , 09:35</small>
                                                    <div class="d-flex">
                                                        <div class="card mt-2 rounded-top-md-left-0 border">
                                                            <div class="card-body p-3">
                                                                <p class="mb-0 text-dark">
                                                                    Hello, Setup the github repo for bootstrap admin
                                                                    dashboard.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-2 mt-2">
                                                            <!-- dropdown -->
                                                            <div class="dropdown dropend">
                                                                <a class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                                                    href="#!" role="button" id="dropdownMenuLink"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i data-feather="more-vertical" class="icon-xs"></i>
                                                                </a>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuLink">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="copy"></i>Copy</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="corner-up-right"></i>Reply</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class=" dropdown-item-icon"
                                                                            data-feather="corner-up-left"></i>Forward</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="star"></i>Favourite</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="trash"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mb-4">
                                                <!-- media -->
                                                <div class="d-flex w-lg-40">
                                                    <!-- media body -->
                                                    <div class=" me-3 text-end">
                                                        <small> 09:39</small>
                                                        <div class="d-flex">
                                                            <div class="me-2 mt-2">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                                                        href="#!" role="button" id="dropdownMenuLinkTwo"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-vertical"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <!-- dropdown menu -->
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLinkTwo">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="copy"></i>Copy</a>
                                                                        <a class="dropdown-item" href="#!"> <i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="edit"></i>
                                                                            Edit</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="corner-up-right"></i>Reply</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class=" dropdown-item-icon"
                                                                                data-feather="corner-up-left"></i>Forward</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="star"></i>Favourite</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="trash"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- card -->
                                                            <div
                                                                class="card mt-2 rounded-top-md-end-0 bg-primary text-white ">
                                                                <!-- card body -->
                                                                <div class="card-body text-start p-3">
                                                                    <p class="mb-0">
                                                                        Yes, Currently working on the today evening i
                                                                        will
                                                                        up the admin dashboard template.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- img -->
                                                    <img src="../assets/images/avatar/avatar-11.jpg" alt="Image"
                                                        class="rounded-circle avatar-md">
                                                </div>
                                            </div>
                                            <!-- media -->
                                            <div class="d-flex w-lg-40 mb-4">
                                                <img src="../assets/images/avatar/avatar-4.jpg" alt="Image"
                                                    class="rounded-circle avatar-md user-avatar">
                                                <!-- media body -->
                                                <div class=" ms-3">
                                                    <small><span class="username">Sharad Mishra</span> , 09:42</small>
                                                    <div class="d-flex">
                                                        <div class="card mt-2 rounded-top-md-left-0 border">
                                                            <div class="card-body p-3">
                                                                <p class="mb-0 text-dark">Thank you</p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-2 mt-2">
                                                            <!-- dropdown -->
                                                            <div class="dropdown dropend">
                                                                <a class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                                                    href="#!" role="button" id="dropdownMenuLinkThree"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i data-feather="more-vertical" class="icon-xs"></i>
                                                                </a>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuLinkThree">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="copy"></i>Copy</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="corner-up-right"></i>Reply</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class=" dropdown-item-icon"
                                                                            data-feather="corner-up-left"></i>Forward</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="star"></i>Favourite</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="trash"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mb-4">
                                                <!-- media -->
                                                <div class="d-flex">
                                                    <!-- media body -->
                                                    <div class=" me-3 text-end">
                                                        <small> 09:48</small>
                                                        <div class="d-flex justify-content-end">
                                                            <div class="me-2 mt-2">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                                                        href="#!" role="button" id="dropdownMenuLinkOne"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-vertical"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <!-- dropdown menu -->
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLinkOne">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="copy"></i>Copy</a>
                                                                        <a class="dropdown-item" href="#!">
                                                                            <i class="dropdown-item-icon"
                                                                                data-feather="edit"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class=" dropdown-item-icon"
                                                                                data-feather="corner-up-right"></i>Reply</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class=" dropdown-item-icon"
                                                                                data-feather="corner-up-left"></i>Forward</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="star"></i>Favourite</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="trash"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- card -->
                                                            <div
                                                                class="card mt-2 rounded-top-md-end-0 bg-primary text-white">
                                                                <!-- card body -->
                                                                <div class="card-body text-start p-3">
                                                                    <p class="mb-0">You are most welcome.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- img -->
                                                    <img src="../assets/images/avatar/avatar-11.jpg" alt="Image"
                                                        class="rounded-circle avatar-md">
                                                </div>
                                            </div>
                                            <!-- media -->
                                            <div class="d-flex w-lg-40 mb-4">
                                                <!-- img -->
                                                <img src="../assets/images/avatar/avatar-4.jpg" alt="Image"
                                                    class="rounded-circle avatar-md user-avatar">
                                                <!-- media body -->
                                                <div class=" ms-3">
                                                    <small><span class="username">Sharad Mishra</span> , 09:50</small>
                                                    <div class="d-flex">
                                                        <!-- card -->
                                                        <div class="card mt-2 rounded-top-md-left-0 border">
                                                            <div class="card-body p-3">
                                                                <p class="mb-0 text-dark">
                                                                    After complete this we working on React/Next.js
                                                                    based
                                                                    admin dasboard template.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-2 mt-2">
                                                            <!-- dropdown -->
                                                            <div class="dropdown dropend">
                                                                <a class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                                                    href="#!" role="button" id="dropdownMenuLinkFour"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i data-feather="more-vertical" class="icon-xs"></i>
                                                                </a>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuLinkFour">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="copy"></i>Copy</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="corner-up-right"></i>Reply</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class=" dropdown-item-icon"
                                                                            data-feather="corner-up-left"></i>Forward</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="star"></i>Favourite</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="dropdown-item-icon"
                                                                            data-feather="trash"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mb-4">
                                                <!-- media -->
                                                <div class="d-flex">
                                                    <!-- media body -->
                                                    <div class=" me-3 text-end">
                                                        <small>09:52</small>
                                                        <div class="d-flex justify-content-end">
                                                            <div class="me-2 mt-2">
                                                                <!-- dropdown -->
                                                                <div class="dropdown dropstart">
                                                                    <a class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                                                        href="#!" role="button" id="dropdownMenuLinkSix"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i data-feather="more-vertical"
                                                                            class="icon-xs"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLinkSix">
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="copy"></i>Copy</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class=" dropdown-item-icon"
                                                                                data-feather="edit"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="corner-up-right"></i>Reply</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class=" dropdown-item-icon"
                                                                                data-feather="corner-up-left"></i>Forward</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="star"></i>Favourite</a>
                                                                        <a class="dropdown-item" href="#!"><i
                                                                                class="dropdown-item-icon"
                                                                                data-feather="trash"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- card -->
                                                            <div
                                                                class="card mt-2 rounded-top-md-end-0 bg-primary text-white">
                                                                <!-- card body -->
                                                                <div class="card-body text-start p-3">
                                                                    <p class="mb-0">Yes, we work on the react and
                                                                        next.js
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- img -->
                                                    <img src="../assets/images/avatar/avatar-11.jpg" alt="Image"
                                                        class="rounded-circle avatar-md">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- chat footer -->
                                        <div class="card-footer border-top-0 chat-footer mt-auto rounded-bottom">
                                            <div class="mt-1">
                                                <form id="chatinput-form">
                                                    <div class="position-relative">
                                                        <input class="form-control" placeholder="Type a New Message"
                                                            id="chat-input"></input>
                                                    </div>
                                                    <div class="position-absolute end-0 top-0 mt-4 me-4">
                                                        <button type="submit"
                                                            class="fs-3 btn text-primary btn-focus-none">
                                                            <i class="bi bi-send"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="mt-3 d-flex">
                                                <div>
                                                    <a href="#!" class="text-inherit me-2 fs-4"><i
                                                            class="bi-emoji-smile"></i></a>
                                                    <a href="#!" class="text-inherit me-2 fs-4"><i
                                                            class="bi-paperclip"></i></a>
                                                    <a href="#!" class="text-inherit me-3   fs-4"><i
                                                            class="bi-mic"></i></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#!" class="text-inherit fs-4" id="moreAction"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="moreAction">
                                                        <a class="dropdown-item" href="#!">Action</a>
                                                        <a class="dropdown-item" href="#!">Another action</a>
                                                        <a class="dropdown-item" href="#!">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="newchatModal" tabindex="-1" role="dialog" aria-labelledby="newchatModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header align-items-center">
                    <h4 class="mb-0" id="newchatModalLabel">Create New Chat</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body px-0">
                    <!-- contact list -->
                    <ul class="list-unstyled contacts-list mb-0">
                        <!-- chat item -->
                        <li class="py-3 px-4 chat-item contacts-link">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#!" class="text-inherit ">
                                    <!-- media -->
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-away">
                                            <img src="@@webRoot/assets/images/avatar/avatar-5.jpg" alt="Image"
                                                class="rounded-circle">
                                        </div>
                                        <!-- media body -->
                                        <div class=" ms-2">
                                            <h5 class="mb-0">Pete Martin</h5>
                                            <p class="mb-0 text-muted">On going description of group...
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div>
                                    <small class="text-muted">2/10/2023</small>
                                </div>
                            </div>


                        </li>
                        <!-- chat item -->
                        <li class="py-3 px-4 chat-item contacts-link">

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#!" class="text-inherit ">
                                    <!-- media -->
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-offline">
                                            <img src="@@webRoot/assets/images/avatar/avatar-9.jpg" alt="Image"
                                                class="rounded-circle">
                                        </div>
                                        <!-- media body -->
                                        <div class=" ms-2">
                                            <h5 class="mb-0">Olivia Cooper</h5>
                                            <p class="mb-0 text-muted">On going description of group...
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div>
                                    <small class="text-muted">2/3/2023</small>
                                </div>
                            </div>


                        </li>
                        <!-- chat item -->
                        <li class="py-3 px-4 chat-item contacts-link">

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#!" class="text-inherit ">
                                    <!-- media -->
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-busy">
                                            <img src="@@webRoot/assets/images/avatar/avatar-19.jpg" alt="Image"
                                                class="rounded-circle">
                                        </div>
                                        <!-- media body -->
                                        <div class=" ms-2">
                                            <h5 class="mb-0">Jamarcus Streich</h5>
                                            <p class="mb-0 text-muted">Start design system for UI.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div>
                                    <small class="text-muted">1/24/2023</small>
                                </div>
                            </div>


                        </li>
                        <!-- chat item -->
                        <li class="py-3 px-4 chat-item contacts-link">

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#!" class="text-inherit ">
                                    <!-- media -->
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-busy">
                                            <img src="@@webRoot/assets/images/avatar/avatar-12.jpg" alt="Image"
                                                class="rounded-circle">
                                        </div>
                                        <!-- media body -->
                                        <div class=" ms-2">
                                            <h5 class="mb-0">Lauren Wilson</h5>
                                            <p class="mb-0 text-muted">Start design system for UI...
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div>
                                    <small class="text-muted">3/3/2023</small>
                                </div>
                            </div>


                        </li>
                        <!-- chat item -->
                        <li class="py-3 px-4 chat-item contacts-link">

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#!" class="text-inherit ">
                                    <!-- media -->
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img src="@@webRoot/assets/images/avatar/avatar-14.jpg" alt="Image"
                                                class="rounded-circle">
                                        </div>
                                        <!-- media body -->
                                        <div class=" ms-2">
                                            <h5 class="mb-0">User Name</h5>
                                            <p class="mb-0 text-muted">On going description of group..
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div>
                                    <small class="text-muted">1/5/2023</small>
                                </div>
                            </div>


                        </li>
                        <!-- chat item -->
                        <li class="py-3 px-4 chat-item contacts-link">

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#!" class="text-inherit ">
                                    <!-- media -->
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img src="@@webRoot/assets/images/avatar/avatar-15.jpg" alt="Image"
                                                class="rounded-circle">
                                        </div>
                                        <!-- media body -->
                                        <div class=" ms-2">
                                            <h5 class="mb-0">Rosalee Roberts</h5>
                                            <p class="mb-0 text-muted">On going description of group..
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div>
                                    <small class="text-muted">1/14/2023</small>
                                </div>
                            </div>


                        </li>



                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->

    @@include("../partials/scripts.html")

    <!-- popper js -->
    <script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <!-- tippy js -->
    <script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
    <script src="@@webRoot/assets/js/vendors/chat.js"></script>
</body>

</html>