<?php $this->load->view('layout/header'); ?>

<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>Beranda">Dashbord</a>
            </li>
            <li class="breadcrumb-item active">Galeri Barang</li>
          </ol>
          <?php echo $this->session->flashdata('message'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <a href="#form" data-toggle="modal" data-target="#tambahmodal" class="btn btn-primary">Tambah Galeri</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align:center;width:20px;">No</th>
                      <th>Foto</th>
                      <th>Kategori</th>
                      <th width="15%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody">
                    <?php $no=1; foreach($gb as $row): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td align="center"><img height="100px" width="=100px" alt="<?= $row->foto; ?>" src="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>"></td>
                      <td><?php echo $row->kategori;?></td>
                      <td align="center">
                        <!-- <div class="modal-footer info-md"> -->
                          <!-- <button type="button" id="btn-edit" data-toggle="modal" data-target="#edit<?php echo $row->id;?>" class="btn btn-primary">Edit</button> | -->
                          <button data-toggle="modal" data-target="#hapus<?php echo $row->id;?>" class="btn btn-danger">Hapus</button>
                        <!-- </div> -->
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <!-- Sticky Footer -->
        <!-- <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2019 Aplikasi </span>
            </div>
          </div>
        </footer> -->
      </div>
      <!-- /.content-wrapper -->
    </div>


<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" class="modal modal-edu-general fullwidth-popup-InformationproModal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-2">
                <h4 class="modal-title" id="judul"></h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal"><i class="fa fa-close"></i>x</a>
                </div>
            </div>
            <form action="<?php echo base_url(); ?>Galeri/b_simpan" method="POST" id="form_validation" enctype="multipart/form-data">
            <!-- <input type="hidden" name="id_guru" value=""> -->
            <div class="modal-body">
              
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class="form-control-label">Foto</label></div>
                <div class="col-12 col-md-9"><input data-toggle="tooltip" data-placement="top" title="" data-original-title="Pilih Foto maks. 1024 Kb" type="file" class="form-control date" placeholder="Pilih Foto maks. 1024 Kb" name="input_gambar" id="file-input">
                </div>
              </div>

              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Kategori</label></div>
                  <div class="col-12 col-md-9">
                    <select name="kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" data-width="80%" placeholder="Pilih Kategori" required>
                    <option>Pilih Kategori</option>
                      <?php foreach ($kat as $a) {?>
                        <option value="<?php echo $a->id_kategori;?>"><?php echo $a->kategori;?></option>
                      <?php }?>
                    </select>
                  </div>
              </div>

            </div>
            <div class="modal-footer info-md">
                <button type="submit" id="btn-tambah" class="btn btn-primary">Tambah Data</button>
                <button  data-dismiss="modal" class="btn btn-primary">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>


<?php foreach($gb as $row) { ?>
        <div class="modal fade" id="hapus<?php echo $row->id;?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url();?>Galeri/b_hapus/<?php echo $row->id;?>" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Konfirmasi hapus</h4>
                        </div>
                        <div class="modal-body">
                            <font color="red" size="3">Apakah Data akan dihapus ?</font>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">Hapus</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


<div class="modal fade" id="edit<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" class="modal modal-edu-general fullwidth-popup-InformationproModal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-2">
                <h4 class="modal-title" id="judul"></h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal"><i class="fa fa-close"></i>x</a>
                </div>
            </div>
            <form action="<?php echo base_url(); ?>Galeri/k_update/<?php echo $row->id;?>" method="POST" id="form_validation">
            <!-- <input type="hidden" name="id_guru" value=""> -->
            <div class="modal-body">
              
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class="form-control-label">Foto</label></div>
                <div class="col-12 col-md-9"><input data-toggle="tooltip" data-placement="top" title="" data-original-title="Pilih Foto maks. 1024 Kb" type="file" class="form-control date" placeholder="Pilih Foto maks. 1024 Kb" name="input_gambar" id="file-input">
                </div>
              </div>

              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Kategori</label></div>
                  <div class="col-12 col-md-9">
                    <select name="kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" data-width="80%" placeholder="Pilih Kategori" required>
                      <?php foreach ($kat as $a) {
                      if($a->id_kategori)
                          echo "<option value='$a->id_kategori'>$a->kategori</option>";
                        else
                          echo "<option value='$a->id_kategori' selected>$a->kategori</option>";
                          }
                      ?>
                    </select>
                  </div>
              </div>

            </div>
            <div class="modal-footer info-md">
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <button  data-dismiss="modal" class="btn btn-primary">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>

<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_script'); ?>
