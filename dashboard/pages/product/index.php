<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Sweet Alert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <!-- Style -->
  <link rel="stylesheet" href="../../assets/css/index.css">
  <title>Dashboard ShopShop</title>
</head>

<body class="bg-light">
  <a id="BackToTop"><i class="fas fa-long-arrow-up text-white"></i></a>
  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-dark bg-dark px-2">
    <div class="container-fluid">
      <button class="btn btn-dark d-lg-none me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="fas fa-bars"></i>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- OffCanvas -->
  <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-body p-0">
      <!-- <div class="sidebar-header text-center py-3">
        <img src="../../../assets/image/default.jpg" alt="" class="img-fluid rounded-circle" style="width: 130px;">
        <h5 class="fw-normal mt-3">Kong Nontawat</h5>
      </div>
      <hr> -->
      <nav class="navbar-dark py-3">
        <ul class="navbar-nav">
          <li class="sidebar-item">
            <a href="../home/" class="nav-link sidebar-link ps-4"><i class="fas fa-home me-2"></i></i>Dashboard</a>
          </li>
          <li class="my-2">
            <hr class="dropdown-divider">
          </li>
          <li class="ps-3 mb-2">
            <div class="text-muted">
              จัดการสินค้า
            </div>
          </li>
          <li class="sidebar-item">
            <a href="" class="nav-link sidebar-link ps-4 active"><i class="fas fa-box-open me-2"></i>จัดการสินค้า</a>
          </li>
          <li class="sidebar-item">
            <a href="" class="nav-link sidebar-link ps-4"><i class="fas fa-luggage-cart me-2"></i></i>จัดการประเภทสินค้า</a>
          </li>
          <li class="sidebar-item">
            <a href="" class="nav-link sidebar-link ps-4"><i class="fas fa-tag me-2"></i>จัดการโปรโมชั่น</a>
          </li>
          <li class="my-2">
            <hr class="dropdown-divider">
          </li>
          <li class="ps-3 mb-2">
            <div class="text-muted">
              จัดการหน้าเว็บ
            </div>
          </li>
          <li class="sidebar-item">
            <a href="#!" class="nav-link sidebar-link ps-4" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <span><i class="fas fa-tv me-2"></i></span>
              <span>จัดการหน้าแรก</span>
              <span class="right-icon text-muted"><i class="fas fa-chevron-down"></i></span>
            </a>
            <div class="collapse bg-dark" id="collapseExample">
              <nav class="navbar">
                <ul class="navbar-nav">
                  <li>
                    <a href="#!" class="nav-link sidebar-link ps-5">
                      <i class="far fa-image me-2"></i>
                      แบนเนอร์
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </li>
          <li class="my-2">
            <hr class="dropdown-divider">
          </li>
        </ul>
      </nav>
    </div>
  </div>



  <!-- Bootstrap 5 Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- Jquery 3.6.0 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- My Script -->
  <script src="../../assets/js/global_function.js"></script>
  <script src="../../assets/js/index.js"></script>
</body>

</html>