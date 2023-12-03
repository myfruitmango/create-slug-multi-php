<!--  -->
<?php
$title = "4284 🥭";
include 'models/data.php';
include 'modal/add-slug.php'
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?= $title ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="container-fluid">
    <div class="callout callout-danger">
      <h5><i class="fas fa-radiation"></i> Attention:</h5>
      Halo, boleh minta waktunya seumur hidup ga??
    </div>
    <div class="card">
      <div class="card-header bg-black color-palette">
        <h3 class="card-title">Data ⚠</h3>
      </div>
      <div class="card-body">
        <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-add">
          <i class="fas fa-cat"></i><span style="color: #f7f7f7;">Add</span>
        </a>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Slug</th>
              <th>#</th>
            </tr>
          </thead>
          <?php
          $say = getData();
          foreach ($say as $data) :
          ?>
            <tbody>
              <tr>
                <td><?= $data['name'] ?></td>
                <td><?= $data['slug'] ?></td>
                <td>Ini Aksi</td>
              </tr>
            </tbody>
          <?php
          endforeach;
          ?>
          <tfoot>
            <tr>
              <th>Judul</th>
              <th>Slug</th>
              <th>#</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</section>