<div class="modal fade" id="modal-update<?= $data['uuid'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Data <i class="fas fa-rocket"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('update-slug?uuid=' . $data['uuid']) ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="nameCategory">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Tamu Undangan" name="name" value="<?= $data['name'] ?>" />
          </div>
          <div class="form-group">
            <label for="nameCategory">Nama</label>
            <input type="text" class="form-control" style="color: #0073ef;" id="slug" placeholder="Slug" name="slug" value="www.eka-nindi.mymango.id/<?= $data['slug'] ?>" disabled />
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
          <button type="submit" name="request" class="btn btn-dark btn-block">Save.. <i class="fa fa-save"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>