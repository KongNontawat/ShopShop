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
  <link rel="stylesheet" href="../../assets/css/profile.css">
  <title>Profile ShopShop</title>
</head>

<body class="bg-light">
  <a id="BackToTop"><i class="fas fa-long-arrow-up text-white"></i></a>

  <?php include '../components/navbar.php'; ?>

  <section class="change_password py-5">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../home/">หน้าหลัก</a></li>
          <li class="breadcrumb-item"><a href="../profile/">โปรไฟล์ของฉัน</a></li>
          <li class="breadcrumb-item active" aria-current="page">เปลี่ยนรหัสผ่าน</li>
        </ol>
      </nav>
      <div class="row justify-content-center">
        <h1 class="fw-normal display-5 text-center text-secondary"><i class="far fa-key me-2"></i></i>เปลี่ยนรหัสผ่าน</h1>
        <div class="col-lg-10 col-xl-9">
          <section class="profile_form card mt-4 p-3 p-md-5">

            <form action="" class="row g-3 justify-content-center">             
              <div class="col-12 mb-2">
                <label for="inputOldPassword" class="form-label">รหัสผ่านเก่า : </label>
                <input type="password" class="form-control" id="inputOldPassword">
              </div>
              <div class="col-12 mb-2">
                <label for="inputPassword" class="form-label">รหัสผ่านใหม่ : </label>
                <input type="password" class="form-control" id="inputPassword">
              </div>
              <div class="col-12 mb-2">
                <label for="inputConfirmPassword" class="form-label">ยืนยันรหัสผ่านใหม่ : </label>
                <input type="password" class="form-control" id="inputConfirmPassword">
              </div>
              <div class="footer">
                <button type="button" class="btn btn-primary mt-2 px-3">บันทึกข้อมูล</button>
                <button type="button" class="btn btn-outline-secondary mt-2 me-2 px-1" onclick="goBack()">ย้อนกลับ</button>
              </div>
            </form>

          </section>
        </div>
      </div>
    </div>
  </section>

  <?php //include '../components/footer.php'; 
  ?>
  <?php include '../auth/modal_login.php';?>

  <!-- Bootstrap 5 Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- Jquery 3.6.0 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- My Script -->
  <script src="../../assets/js/auth.js"></script>
  <script src="../../assets/js/global_function.js"></script>
  <script src="../../assets/js/change_password.js"></script>
</body>

</html>