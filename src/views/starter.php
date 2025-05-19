<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
    <title>Starter Page | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
  </head>

  <body>
    <main id="main-wrapper" class="main-wrapper">
      @@include("../partials/header.html")
      <!-- navbar vertical -->
      @@include('../partials/navbar-vertical.html', { "page": "starter",
      "page_group": "layoutPage" })


      <!-- page content -->
      <div id="app-content">

        <div class="app-content-area">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div
                  class="d-flex justify-content-between align-items-center mb-4"
                >
                  <h3 class="mb-0 ">Starter</h3>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->

    @@include("../partials/scripts.html")


  </body>
</html>
