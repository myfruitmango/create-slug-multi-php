<div class="modal fade" id="modal-delete<?= $data['uuid'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Data <i class="fas fa-rocket"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('delete-slug?uuid=' . $data['uuid']) ?>" method="POST">
        <div class="modal-body">
          <p>Apakah Kau Yakin Hapus Data?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">GAJADI!</button>
          <button type="submit" name="request" class="btn btn-dark btn-block">YA!  <i class="fas fa-trash"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>