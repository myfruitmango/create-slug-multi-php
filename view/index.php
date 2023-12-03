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
    <?php require 'message/alert.php' ?>
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
                <td>
                  <div class="row" style="gap: 2px">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-update<?= $data['uuid'] ?>">
                      <i class="fa fa-cog"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete<?= $data['uuid'] ?>">
                      <i class="fas fa-trash" style="width: 14px;"></i>
                    </button>
                  </div>
                  <?php include "modal/update-slug.php"; ?>
                </td>
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
        <div class="mt-2">
          <div class="callout callout-info">
            <h5><i class="fas fa-exclamation-triangle"></i> Keterangan:</h5>
            <div class="col">
              <div class="row">
                <div class="col-1">
                  <i class="fas fa-cat"></i>
                </div>
                <span class="col">
                  : Menambahkan Data
                </span>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class="fas fas fa-cog"></i>
                </div>
                <span class="col">
                  : Merubah Data
                </span>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class="fas fa-trash"></i>
                </div>
                <span class="col">
                  : Meghapus Data
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>