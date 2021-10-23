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
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/css/cart.css">
  <title>Cart ShopShop</title>
  <link rel="icon" href="../../assets/image/title_icon.svg" type="image/x-icon">
</head>

<body class="bg-light">
  <a id="BackToTop"><i class="fas fa-long-arrow-up text-white"></i></a>

  <?php include '../components/navbar.php'; ?>

  <section class="cart py-5">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../home/">หน้าหลัก</a></li>
          <li class="breadcrumb-item active" aria-current="page">สินค้าในตระกร้า</li>
        </ol>
      </nav>
      <h1 class="fw-normal display-4 text-center text-secondary"><i class="far fa-shopping-cart me-2"></i>My Cart</h1>
      <div class="row pt-5">
        <div class="col-12">
          <div class="card bg-white py-0 py-md-4">
            <div class="table-responsive">
              <table class="table table-hover align-middle">
                <thead>
                  <tr>
                    <th style="width: 5%; text-align:center;">#</th>
                    <th style="width: 10%;"></th>
                    <th style="width: 25%;">ชื่อสินค้า</th>
                    <th style="width: 15%;">จำนวน</th>
                    <th style="width: 15%;">ราคา</th>
                    <th style="width: 10%;">ลบ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-center">1</th>
                    <td><img src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td><input type="number" name="" id="" min="1" class="form-control"></td>
                    <td>5000 บาท</td>
                    <td><a href="#!" class="text-danger"><i class="far fa-times-circle fs-4"></i></a></td>
                  </tr>
                  <tr>
                    <th class="text-center">2</th>
                    <td><img src="https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, quas?</td>
                    <td><input type="number" name="" id="" min="1" class="form-control"></td>
                    <td>25000 บาท</td>
                    <td><a href="#!" class="text-danger"><i class="far fa-times-circle fs-4"></td>
                  </tr>
                  <tr>
                    <th class="text-center">2</th>
                    <td><img src="https://images.pexels.com/photos/2528118/pexels-photo-2528118.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, quas?</td>
                    <td><input type="number" name="" id="" min="1" class="form-control"></td>
                    <td>25000 บาท</td>
                    <td><a href="#!" class="text-danger"><i class="far fa-times-circle fs-4"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4 justify-content-end">
        <div class="col-md-6 col-lg-5 col-xl-4 bg-white p-4">
          <table class="table table-borderless align-middle fs-5">
            <thead>
            <tbody>
              <tr>
                <td class="text-start">ราคาทั้งหมด</td>
                <td class="text-end">25248 บาท</td>
              </tr>
              <tr>
                <td class="text-start">ค่าส่งทั้งหมด</td>
                <td class="text-end">ส่งฟรี</td>
              </tr>
              <tr>
                <td class="text-start">ส่วนลด</td>
                <td class="text-end">0 บาท</td>
              </tr>
              <tr>
                <td class="text-start">ราคาที่ต้องจ่าย</td>
                <td class="text-end">25248 บาท</td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-primary col-12 my-2 py-2">สั่งซื้อ</button>
          <button type="button" class="btn btn-dark col-12 py-2">เลือกซื้อสินค้าเพิ่ม</button>
        </div>
      </div>
    </div>
  </section>

  <?php //include '../components/footer.php'; 
  ?>

  <?php include '../auth/modal_login.php'; ?>

  <!-- Bootstrap 5 Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- Jquery 3.6.0 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- My Script -->
  <script src="../../assets/js/auth.js"></script>
  <script src="../../assets/js/global_function.js"></script>
  <script src="../../assets/js/index.js"></script>
</body>

</html>