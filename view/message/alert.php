<?php if (isset($_GET['response'])) { ?>
  <?php if ($_GET['response'] == "200") { ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> Alert!</h5>
      Berhasil Cuy 👌
    </div>
  <?php } else { ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-ban"></i> Alert!</h5>
      <?php
      if ($_GET['response'] == "400") {
        echo "Tidak Ada Response 😱 ";
      }
      if ($_GET['response'] == "404") {
        echo "Data Tidak Ditemukkan 😟 ";
      }
      if ($_GET['response'] == "500") {
        echo "Gagal 🥴 ";
      }
      ?>
    </div>
  <?php } ?>
<?php } ?>