<!-- Top Bar -->
  <section class="top_bar bg-white text-secondary py-2 d-none d-md-block">
    <div class="container">
      <div class="wrapper d-flex justify-content-between">
        <div class="left">
          <ul class="d-flex m-0 p-0">
            <li>Thailand</li>
            <div class="vr mx-3"></div>
            <li>BATH (฿)</li>
            <div class="vr mx-3"></div>
            <li>Need Help? 064 593 301</li>
          </ul>
        </div>
        <div class="right">
          <ul class="d-flex m-0 p-0">
            <li>Product of Thailand</li>
            <div class="vr mx-3"></div>
            <li>Contact Dev</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- Navbar -->
  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow-sm border-bottom">
    <div class="container">
      <a href="../home/" class="navbar-brand">
        <h3><i class="fas fa-shopping-basket text-primary me-1"></i>Shop <span class="text-primary">Shop</span></h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbar_menu">
        <ul class="navbar-nav me-auto ms-0 ms-md-1 ms-lg-5">
          <li class="nav-item"><a href="../home/" class="nav-link active">หน้าหลัก</a></li>
          <li class="nav-item"><a href="../product/" class="nav-link">สินค้า</a></li>
          <li class="nav-item"><a href="../product/product_detail.php" class="nav-link">รายละเอียด</a></li>
          <li class="nav-item"><a href="../news/" class="nav-link">ข่าวสาร</a></li>
          <li class="nav-item"><a href="../about/" class="nav-link">เกี่ยวกับเรา</a></li>
          <li class="nav-item"><a href="../../dashboard/pages/" class="btn btn-outline-dark ms-1 me-2">Dashboard</a></li>
          <li class="nav-item"><a href="#!" class="btn btn-outline-dark ms-1 me-2" data-bs-target="#modal_login" data-bs-toggle="modal">Login</a></li>
        </ul>
        <ul class="navbar-nav ms-auto mt-4 mt-md-0">
          <li class="nav-item me-3 me-md-3 my-auto d-flex justify-content-center">
            <a href="../wishlist/"
              class="cart btn btn-outline-dark d-flex align-items-center justify-content-center rounded-circle position-relative border border-secondary me-2 me-lg-3">
              <i class="fas fa-heart fs-5"></i>
              <span class="position-absolute translate-middle rounded-circle badge bg-dark">101</span>
            </a>
            <a href="../cart/"
              class="cart btn btn-outline-dark d-flex align-items-center justify-content-center rounded-circle position-relative border border-secondary">
              <i class="fas fa-shopping-cart fs-5"></i>
              <span class="position-absolute translate-middle rounded-circle badge bg-dark">91</span>
            </a>
          </li>
          <li class="nav-item my-3 my-md-0">
            <div class="dropdown">
              <a class="dropdown-toggle text-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="../../assets/image/default.jpg" alt="" class="img-fluid rounded-circle">
                <span class="text-dark ms-2 d-sm-inline d-md-none d-lg-inline">Kong Nontawat</span>
              </a>

              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="../profile/"><i class="fas fa-user-edit me-1"></i>โปรไฟล์</a></li>
                <li><a class="dropdown-item" href="../profile/change_password.php"><i class="fas fa-key me-1"></i>เปลี่ยนรหัส</a></li>
                <li><a class="dropdown-item" href="../profile/order.php"><i class="fas fa-shopping-cart me-1"></i>การสั่งซื้อ</a></li>
                <li><a class="dropdown-item" href="../profile/order_history.php"><i class="far fa-list-alt me-1"></i></i>ประวัติการสั่งซื้อ</a></li>
                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt me-1"></i>ออกจากระบบ</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>