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
  <link rel="stylesheet" href="../../assets/css/product.css">
  <title>Dashboard ShopShop</title>
</head>

<body class="bg-light">
  <!-- Loading -->
  <?php include '../components/loading.php'; ?>
  <!-- Navbar -->
  <?php include '../components/navbar.php'; ?>

  <!-- Sidebar OffCanvas -->
  <?php include '../components/sidebar.php'; ?>

  <!-- Main -->
  <main class="mt-5 pt-4">
    <div class="container-fluid px-2 px-sm-3 px-lg-4">

      <section class="content-header py-3">
        <div class="row mx-0 mb-2 justify-content-between">
          <div class="col-sm-6 px-lg-0">
            <h1 class="m-0 fw-normal">จัดการสินค้า</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 px-lg-0">
            <ol class="breadcrumb float-sm-end mt-2">
              <li class="breadcrumb-item"><a href="../home/">หน้าแรก</a></li>
              <li class="breadcrumb-item active">จัดการสินค้า</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section>

      <section class="content">
        <div class="card shadow-sm">
          <div class="card-header py-3 d-flex justify-content-between flex-wrap flex-sm-nowrap bg-white ">
            <h5 class="fw-normal m-0">รายการสินค้าทั้งหมด</h5>
            <div class="right d-flex align-item-center flex-wrap flex-sm-nowrap">
              <button type="button" class="btn btn-primary px-2 py-2 me-2 my-2 my-sm-0" style="width: 135px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> + เพิ่มสินค้า</button>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="ค้นหา..." aria-describedby="basic-addon2">
                <span class="input-group-text bg-white" id="basic-addon2"><i class="fas fa-search"></i></span>
              </div>
            </div>
          </div>
          <div class="card-body px-0">
            <div class="table-responsive">
              <table class="table table-striped table-hover align-middle">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 5%;">#</th>
                    <th style="width: 15%;">รูป</th>
                    <th style="width: 20%;">ชื่อสินค้า</th>
                    <th style="width: 18%;">ประเภท</th>
                    <th style="width: 12%;">ราคา</th>
                    <th style="width: 10%;">สต๊อก</th>
                    <th style="width: 10%;">สถานะ</th>
                    <th style="width: 10%;">จัดการ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-center">1</th>
                    <td><img src="../../../assets/image/default.jpg" alt=""></td>
                    <td>Macbook pro 15</td>
                    <td>Notebook</td>
                    <td>51,000</td>
                    <td>50</td>
                    <td><span class="badge bg-success">เปิดใช้งาน</span></td>
                    <td>
                      <a href="#!" id="btn-edit" class="text-secondary me-2"><i class="fas fa-edit"></i></a>
                      <a href="#!" id="btn-delete" class="text-secondary"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

  </main>

  <!-- Modal Form Add -->
  <?php include 'modal_add_product.php'; ?>

  <!-- Bootstrap 5 Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- Jquery 3.6.0 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- My Script -->
  <script src="../../assets/js/global_function.js"></script>
  <script src="../../assets/js/product.js"></script>

</body>

</html>