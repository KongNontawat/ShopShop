<!-- Modal -->
<div class="modal fade mt-4 p-0" id="modal_save_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">จัดการประเภทสินค้า</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form enctype="multipart/form-data" class="" id="form-add-category">
        <div class="modal-body px-0 pb-0">
          <div class="row gy-3 justify-content-center m-0">
            <div class="col-12 input-value-category">
              <label for="input-title" class="form-label">ประเภทสินค้า</label>
              <input type="hidden" name="id_category" id="input-id_category">
              <input type="text" class="form-control" name="title" id="input-title" placeholder="ชื่อประเภทสินค้า" autofocus>
            </div>
            <div class="col-12 input-value-category">
              <label for="input-detail" class="form-label">คำอธิบาย</label>
              <textarea name="detail" id="input-detail" cols="30" rows="2" class="form-control" placeholder="ใส่คำอธิบายสินค้า"></textarea>
            </div>
          </div>
          <div class="modal-footer mt-3">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            <button type="submit" class="btn btn-primary" id="btn-submit-form">บันทึกข้อมูล</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>