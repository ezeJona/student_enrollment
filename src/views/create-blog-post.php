<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Create Post | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
   <!-- dropzone -->
  <link href="@@webRoot/node_modules/dropzone/dist/dropzone.css" rel="stylesheet" >
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {
    "page": "createBlogPost",
    "page_group": "blog"
    })



    <!-- page content -->
    <div id="app-content">

      <div class="app-content-area">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="d-flex justify-content-between align-items-center mb-5">
              <h3 class="mb-0 ">Create a Post</h3>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>



        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-12">
              <!-- Card -->
              <div class="card border-0 mb-4">
                <!-- Card header -->
                <div class="card-header">
                  <h4 class="mb-0">Create Post</h4>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <button type="button" class="btn btn-outline-white mb-1 mb-md-0">
                    <i class="fe fe-image me-1"></i>
                    Photo
                  </button>
                  <button type="button" class="btn btn-outline-white mb-1 mb-md-0">
                    <i class="fe fe-video me-1"></i>
                    Video
                  </button>
                  <button type="button" class="btn btn-outline-white">
                    Quote
                  </button>
                  <button type="button" class="btn btn-outline-white">
                    <i class="fe fe-link me-1"></i>
                    Link
                  </button>
                  <form action="#" class="dropzone mt-4 border-dashed rounded-2 min-h-0">
                    <div class="fallback">
                      <input name="file" type="file" multiple >
                    </div>
                  </form>
                  <div class="mt-4">
                    <form>
                      <!-- Form -->
                      <div class="row">
                        <!-- Date -->
                        <div class="mb-3 col-md-4">
                          <label for="selectDate" class="form-label">Date</label>
                          <input type="text" id="selectDate" class="form-control  flatpickr"
                            placeholder="Select Date" >
                        </div>
                        <div class="mb-3 col-md-9">
                          <!-- Title -->
                          <label for="postTitle" class="form-label">Title</label>
                          <input type="text" id="postTitle" class="form-control " placeholder="Post Title" >
                          <small>Keep your post titles under 60 characters. Write
                            heading that describe the topic content.
                            Contextualize for Your Audience.</small>
                        </div>
                        <!-- Slug -->
                        <div class="mb-3 col-md-9">
                          <label for="basic-url" class="form-label">Slug</label>
                          <div class="input-group">
                            <span class="input-group-text" id="slug">https://example.com/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="slug" placeholder="post-title">
                          </div>

                          <small class="form-text">Field must contain an unique value</small>
                        </div>
                        <!-- Excerpt -->
                        <div class="mb-3 col-md-9">
                          <label for="Excerpt" class="form-label">Excerpt</label>
                          <textarea rows="3" id="Excerpt" class="form-control "
                            placeholder="Excerpt"></textarea>
                          <small>A short extract from writing.</small>
                        </div>
                        <!-- Category -->
                        <div class="mb-3 col-md-9">
                          <label class="form-label">Category</label>
                          <select class="form-select" >
                            <option value="">Course</option>
                            <option value="Post Category">
                              Post Category
                            </option>
                            <option value="Workshop">Workshop</option>
                            <option value="Marketing">Marketing</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Editor -->
                  <div class="mt-2 mb-4">
                    <div id="editor">
                      <br >
                      <h4>One Ring to Rule Them All</h4>
                      <br >
                      <p>
                        Three Rings for the
                        <i> Elven-kingsunder</i> the sky, <br >
                        Seven for the <u>Dwarf-lords</u> in halls of stone,
                        Nine for Mortal Men, <br >
                        doomed to die, One for the Dark Lord on his dark
                        throne. <br >
                        In the Land of Mordor where the Shadows lie.
                        <br >
                        <br >
                      </p>
                      <p>
                        One Ring to
                        <b>rule</b> them all, <br >
                        One Ring to find them, <br >
                        One Ring to bring them all and in the darkness bind
                        them. <br >
                        In the Land of Mordor where the Shadows lie.
                      </p>
                      <p>
                        <br >
                      </p>
                    </div>
                  </div>
                  <!-- button -->
                  <a href="#!" class="btn btn-primary"> Publish </a>
                  <a href="#!" class="btn btn-outline-white">
                    Save to Draft
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-12 col-12">
              <!-- Card -->
              <div class="card mt-4 mt-lg-0 mb-4">
                <!-- Card Header -->
                <div class="card-header d-lg-flex">
                  <h4 class="mb-0">Post Info</h4>
                </div>
                <!-- List Group -->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <span >Post ID</span>
                    <h5>8693637308</h5>
                  </li>
                  <li class="list-group-item">
                    <span >Status</span>
                    <h5>
                      <span class="badge-dot bg-success d-inline-block me-1"></span>Published (unsaved changes)
                    </h5>
                  </li>
                  <li class="list-group-item">
                    <span >Created by</span>
                    <div class="d-flex mt-2">
                      <img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar-sm rounded-circle" >
                      <div class="ms-2">
                        <h5 class="mb-n1">Dashui Post</h5>
                        <small>Admin</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <span >Created at</span>
                    <h5>Jul 30, 2:21 PM</h5>
                  </li>
                  <li class="list-group-item">
                    <span >First published at</span>
                    <h5>Jul 30, 2:21 PM</h5>
                  </li>
                  <li class="list-group-item">
                    <span >Last update</span>
                    <h5>Aug 31, 12:21 PM</h5>
                  </li>
                  <li class="list-group-item">
                    <span >Last Published</span>
                    <h5>Aug 31, 12:21 PM</h5>
                  </li>
                </ul>
                <!-- Card -->
              </div>
              <div class="card mb-4">
                <!-- Card Header -->
                <div class="card-header d-lg-flex">
                  <h4 class="mb-0">Actions</h4>
                </div>
                <!-- List group -->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span >Unpublish</span>
                    <a href="#!" class="text-inherit"><i  data-feather="x-circle" class="icon-xs"></i></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span >Duplicate</span>
                    <a href="#!" class="text-inherit"><i  data-feather="copy" class="icon-xs"></i></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span >Delete</span>
                    <a href="#!"><i class="text-danger icon-xs" data-feather="trash" ></i></a>
                  </li>
                </ul>
              </div>
              <!-- Card  -->
              <div class="card">
                <!-- Card header -->
                <div class="card-header d-lg-flex">
                  <h4 class="mb-0">Revision History</h4>
                </div>
                <!-- List group -->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                      <h5 class="mb-0">Aug 31, 12:21 PM</h5>
                      <span >Dashui Post</span>
                    </div>
                    <div>
                      <span class="badge badge-success-soft badge-pill">Published</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
        </div>
        </div>
      </main>

        <!-- Scripts -->

       <!-- dropzone -->
  <script src="@@webRoot/node_modules/dropzone/dist/min/dropzone.min.js"></script>
         <!-- flatpickr -->
         <script src="@@webRoot/node_modules/flatpickr/dist/flatpickr.min.js"></script>

        <!-- quill js -->
  <script src="@@webRoot/node_modules/quill/dist/quill.min.js"></script>
         @@include("../partials/scripts.html")



</body>

</html>