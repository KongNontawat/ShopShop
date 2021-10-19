<!-- Modal Login-->
<div class="modal fade" id="modal_login" aria-hidden="true" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header mx-auto pb-2">
        <a href="../home/" class="navbar-brand text-dark">
          <h3><i class="fas fa-shopping-basket text-primary me-1"></i>Shop <span class="text-primary">Shop</span></h3>
        </a>
      </div>
      <div class="modal-body px-2 px-sm-3 px-md-4 px-lg-5">
        <h2 class="text-center fw-normal mb-3">ลงชื่อเข้าใช้</h2>
        <form id="form_login">
          <div class="mb-3">
            <label for="input-username" class="form-label">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" id="input-username" name="username" placeholder="username">
          </div>
          <div class="mb-4">
            <label for="input-password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" id="input-password" name="password" placeholder="password">
          </div>
          <div class="my-3">
            <button type="submit" class="btn btn-dark col-12" id="btn-login">ลงชื่อเข้าใช้</button>
            <p class="my-3 text-center">หากยังไม่มีบัญชีผู้ใช้ <a href="#!" data-bs-target="#modal_register" data-bs-toggle="modal">สมัครสมาชิก ตอนนี้</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="modal_register" aria-hidden="true" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header mx-auto pb-2">
        <a href="../home/" class="navbar-brand text-dark">
          <h3><i class="fas fa-shopping-basket text-primary me-1"></i>Shop <span class="text-primary">Shop</span></h3>
        </a>
      </div>
      <div class="modal-body px-2 px-sm-3 px-md-4 px-lg-5">
        <h2 class="text-center fw-normal mb-3">สมัครสมาชิก</h2>
        <form id="form_register">
          <div class="mb-3">
            <label for="input-username" class="form-label">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" id="input-username" name="username" placeholder="username">
          </div>
          <div class="mb-3">
            <label for="input-email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" id="input-email" name="email" placeholder="email">
          </div>
          <div class="mb-4">
            <label for="input-password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" id="input-password" name="password" placeholder="password">
          </div>
          <div class="mb-4">
            <label for="input-password2" class="form-label">ยืนยันรหัสผ่าน</label>
            <input type="password" class="form-control" id="input-password2" name="password2" placeholder="confirm password">
          </div>
          <div class="my-3">
            <button type="submit" class="btn btn-dark col-12" id="btn-register">สมัครสมาชิก</button>
            <p class="my-3 text-center">หากมีบัญชีผู้ใช้แล้ว <a href="#!" data-bs-target="#modal_login" data-bs-toggle="modal">ลงชื่อเข้าใช้ ตอนนี้</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>