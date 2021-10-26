
<!-- Navbar -->
<nav class="navbar navbar-expand navbar-dark bg-dark px-2 px-lg-4 fixed-top">
  <div class="container-fluid">
    <button class="btn btn-dark d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_bar" aria-controls="side_bar">
      <i class="fas fa-bars"></i>
    </button>
    <a href="../home/" class="navbar-brand d-none d-sm-block">
      <h4><i class="fas fa-shopping-basket text-primary me-1"></i>Shop <span class="text-primary">Shop</span></h4>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../../../assets/image/default.png" id="nav_photo" style="width: 50px;" class="img-fluid rounded-circle">
            <span class="text-white ms-1" id="nav_username"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../profile/"><i class="fas fa-user-edit me-1"></i>โปรไฟล์</a></li>
            <li><a class="dropdown-item" href="../profile/change_password.php"><i class="fas fa-home me-1"></i>ไปที่หน้าเว็บ</a></li>
            <li><a class="dropdown-item text-danger" id="nav-logout" href="../auth/logout.php"><i class="fas fa-sign-out-alt me-1"></i>ออกจากระบบ</a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>