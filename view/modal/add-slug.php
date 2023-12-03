<div class="modal fade" id="modal-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Data <i class="fas fa-rocket"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('add-slug') ?>" method="POST">
        <div class="modal-body">
          <div class="form-group" id="form-name">
            <label for="nameCategory">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Tamu Undangan" name="name[]">
          </div>
          <button type="button" class="btn btn-outline-secondary btn-sm mb-2" id="addRow" style="width: 100%">Tambah Lebih Banyak ++</button>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger btn-block btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" name="request" class="btn btn-dark btn-block btn-sm">Save.. <i class="fa fa-save"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>