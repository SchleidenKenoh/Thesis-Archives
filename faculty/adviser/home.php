<?php


        session_start();
        /*
            if user is not login then redirect to login page,
            this is to prevent users from accessing pages that requires
            authentication such as the dashboard
        */
        if (!isset($_SESSION['logged-in'])){
            header('location: ../login/login.php');
        }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- start: Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link rel="icon" href="../../img/rlogo.png" type="image/icon type">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <!-- end: CSS -->
    <title>Thesis Repository</title>
  </head>

  <body>
    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
      <div class="d-flex align-items-center p-3">
        <a
          href="#"
          class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4"
          >Thesis Repository</a
        >
        <i
          class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"
        ></i>
      </div>
      <ul class="sidebar-menu p-3 m-0 mb-0">
        <li class="sidebar-menu-item active">
          <a href="dashboard.php">
            <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
            Dashboard
          </a>
        </li>
        <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Thesis</li>
        <li class="sidebar-menu-item">
          <a href="archives.php">
            <i class="ri-archive-drawer-line sidebar-menu-item-icon"></i>
            Archives
          </a>
        </li>
        <li class="sidebar-menu-item has-dropdown">
          <a href="thesis_status.php">
              <i class="ri-bar-chart-box-line sidebar-menu-item-icon"></i>
              Thesis Status
              <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
          </a>
          <ul class="sidebar-dropdown-menu">
              <li class="sidebar-dropdown-menu-item">
                  <a href="#">
                      Accepted Titles
                  </a>
              </li>
              <li class="sidebar-dropdown-menu-item">
                  <a href="#">
                      Rejected Titles
                  </a>
              </li>
          </ul>
      </li>

        <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Manage</li>

        <li class="sidebar-menu-item">
          <a href="manage_students.php">
            <i class="ri-user-line sidebar-menu-item-icon"></i>
            Manage Student
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a href="manage_faculty.php">
            <i class="ri-group-line sidebar-menu-item-icon"></i>
            Manage Faculty
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a href="manage_rubrics.php">
            <i class="ri-table-2 sidebar-menu-item-icon"></i>
            Manage Rubrics
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a href="manage_schedules.php">
            <i class="ri-calendar-2-line sidebar-menu-item-icon"></i>
            Schedules
          </a>
        </li>
      </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->
    <script src="../assets/js/jquery.min.js"></script>
    <script>
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
      integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    </script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/script.js"></script>
    <!-- end: JS -->
  </body>
</html>