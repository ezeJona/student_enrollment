<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
      <link href="@@webRoot/node_modules/dropzone/dist/dropzone.css" rel="stylesheet" >
  <link href="@@webRoot/node_modules/@yaireo/tagify/dist/tagify.css" rel="stylesheet">


    <title>Add Product | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
      @@include("../partials/header.html")

        <!-- navbar vertical -->
        @@include('../partials/navbar-vertical.html', {
        "page": "e-addProduct",
        "page_group": "ecommerce"
        })


        <!-- Page Content -->
        <div id="app-content">

            <!-- Container fluid -->
            <div class="app-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <!-- Page header -->
                            <div class="mb-5">
                                <h3 class="mb-0 ">Add Product</h3>

                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- row -->

                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <!-- card -->
                              <div class="card mb-4">
                                  <!-- card body -->
                                <div class="card-body">
                                  <div>
                                      <!-- input -->
                                    <div class="mb-3">
                                      <label class="form-label">Product Title</label>
                                      <input type="text" class="form-control" placeholder="Enter Product Title" required>
                                    </div>
                                      <!-- input -->
                                    <div>
                                      <label class="form-label">Product Description</label>
                                      <div class="pb-8" id="editor"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <!-- card -->
                              <div class="card mb-4">
                                  <!-- card body -->
                                <div class="card-body">
                                  <div>
                                    <div class="mb-4">
                                        <!-- heading -->
                                      <h4 class="mb-4">Product Gallery</h4>
                                      <h5 class="mb-1">Product Image</h5>
                                      <p>Add Product main Image.</p>
                                        <!-- input -->
                                      <input type="file" class="form-control" >
                                    </div>
                                    <div>
                                        <!-- heading -->
                                      <h5 class="mb-1">Product Gallery</h5>
                                      <p>Add Product Gallery Images.</p>
                                      <!-- input -->
                                      <form action="#" class="d-block dropzone border-dashed rounded-2">
                                        <div class="fallback">
                                          <input name="file" type="file" multiple />
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- card -->
                              <div class="card mb-4">
                                  <!-- card body -->
                                <div class="card-body">
                                    <!-- input -->
                                  <div class="form-check form-switch mb-4">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchStock" checked>
                                    <label class="form-check-label" for="flexSwitchStock">In Stock</label>
                                  </div>
                                    <!-- input -->
                                  <div>
                                    <div class="mb-3">
                                      <label class="form-label">Product Code</label>
                                      <input type="text" class="form-control" placeholder="Enter Product Title">
                                    </div>
                                      <!-- input -->
                                    <div class="mb-3">
                                      <label class="form-label">Product SKU</label>
                                      <input type="text"  class="form-control" placeholder="Enter Product Title">
                                    </div>
                                      <!-- input -->
                                    <div class="mb-3">
                                      <label class="form-label" id="productSKU">Gender</label><br>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                          value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                      </div>
                                        <!-- input -->
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                          value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                      </div>
                                        <!-- input -->
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                          value="option2">
                                        <label class="form-check-label" for="inlineRadio3">Kids</label>
                                      </div>
                                    </div>
                                      <!-- input -->
                                    <div class="mb-3">
                                      <div class="d-flex justify-content-between">
                                        <label class="form-label">Category</label>
                                        <a href="#!" class="btn-link fw-semi-bold">Add New</a>
                                      </div>
                                        <!-- select menu -->
                                      <select class="form-select" aria-label="Default select example">
                                        <option selected>Shoe</option>
                                        <option value="1">Sunglasses</option>
                                        <option value="2">Handbag</option>
                                        <option value="3">Slingbag</option>
                                      </select>
                                    </div>
                                      <!-- tag -->
                                    <div class="mb-3">
                                      <label class="form-label">Tags
                                      </label>
                                      <input name='tags' value='' class="form-control w-100">
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <!-- card -->
                              <div class="card mb-4">
                                  <!-- card body -->
                                <div class="card-body">
                                    <!-- select -->
                                  <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Published</option>
                                      <option value="1">Unpublished</option>
                                      <option value="2">Draft</option>
                                    </select>
                                  </div>
                                    <!-- date -->
                                  <div class="mb-3">
                                    <label class="form-label">Schedule</label>
                                    <div class="input-group me-3 flatpickr rounded">
                                        <input class="form-control " type="text" placeholder="Select Date"
                                          aria-describedby="basic-addon2">

                                        <span class="input-group-text text-muted" id="basic-addon2"><i data-feather="calendar"
                                            class="icon-xs"></i></span>

                                      </div>
                                  </div>
                                </div>
                              </div>
                                <!-- card -->
                              <div class="card mb-4">
                                  <!-- card body -->
                                <div class="card-body">
                                    <!-- input -->
                                  <div class="mb-3">
                                    <label class="form-label">Regular Price</label>
                                    <input type="text" class="form-control" placeholder="$ 49.00">
                                  </div>
                                    <!-- input -->
                                  <div class="mb-3">
                                    <label class="form-label">Sale Price</label>
                                    <input type="text" class="form-control" placeholder="$ 49.00">
                                  </div>
                                    <!-- input -->
                                  <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="priceIncluded" checked>
                                    <label class="form-check-label" for="priceIncluded">
                                      Price includes taxes</label>
                                  </div>
                                </div>
                              </div>
                                <!-- button -->
                              <div class="d-grid">
                                <a href="#!" class="btn btn-primary">
                                  Create Product
                                </a>
                              </div>
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
  <script src="@@webRoot/node_modules/@yaireo/tagify/dist/tagify.min.js"></script>
        @@include("../partials/scripts.html")



</body>

</html>