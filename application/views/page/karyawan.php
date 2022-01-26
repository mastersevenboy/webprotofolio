<?php $this->load->view('layout/header'); ?>

<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>Beranda">Dashbord</a>
            </li>
            <li class="breadcrumb-item active">Karyawan</li>
          </ol>
           <?php echo $this->session->flashdata('message'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <a href="#form" data-toggle="modal" data-target="#tambahmodal" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align:center;width:30px;">No</th>
                      <th width="30%">Foto</th>
                      <th width="30%">Nama</th>
                      <th width="40%">Alamat</th>
                      <th width="15%">Jabatan</th>
                      <th width="30%">No_Hp</th>
                      <th width="15%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody">
                    <?php $no=1; foreach($ax as $row): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td align="center"><img height="150px" width="100px" alt="<?= $row->foto; ?>" src="<?= base_url(); ?>./assets/adds/images/karyawan/<?= $row->foto; ?>"></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->alamat; ?></td>
                      <td><?php echo $row->jabatan; ?></td>
                      <td><?php echo $row->no_hp; ?></td>
                      <td>
                        <div class="modal-footer info-md">
                          <button type="button" id="btn-edit" data-toggle="modal" data-target="#edit<?php echo $row->id_karyawan;?>" class="btn btn-primary">Edit</button> |
                          <button data-toggle="modal" data-target="#hapus<?php echo $row->id_karyawan;?>" class="btn btn-danger">Hapus</button>
                        </div>
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
            <form action="<?php echo base_url(); ?>Karyawan/simpan2" method="POST" id="form_validation" enctype="multipart/form-data">
            <!-- <input type="hidden" name="id_guru" value=""> -->
            <div class="modal-body">
             
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class="form-control-label">Foto</label></div>
                <div class="col-12 col-md-9"><input data-toggle="tooltip" data-placement="top" title="" data-original-title="Pilih Foto maks. 1024 Kb" type="file" class="form-control date" placeholder="Pilih Foto maks. 1024 Kb" name="input_gambar" id="file-input">
                </div>
              </div>

              <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Nama</label></div>
                  <div class="col-12 col-md-9"><input name="nama"  type="text"  class="form-control" required="" placeholder="Inputkan Nama karyawan...." value="" id="nama" maxlength="40">
                  </div>
              </div>
                          
                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Alamat</label></div>
                  <div class="col-12 col-md-9">
                    <textarea name="alamat" id="alamat" rows="9" placeholder="Inputkan alamat...." class="form-control" value=""></textarea>
                  </div>
                </div>          

                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Telepon</label></div>
                  <div class="col-12 col-md-9"><input placeholder="Input Telepon" name="no_hp" value="" type="number"  class="form-control" required="" id="no_hp" maxlength="14">
                  </div>
                </div>

                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Jabatan</label></div>
                  <div class="col-12 col-md-9"><input name="jabatan"  type="text"  class="form-control" required="" placeholder="Inputkan jabatan...." value="" id="jabatans" maxlength="40">
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



<?php foreach($ax as $row) { ?>
        <div class="modal fade" id="hapus<?php echo $row->id_karyawan;?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url();?>Karyawan/h_karya/<?php echo $row->id_karyawan;?>" method="POST">
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

<div class="modal fade" id="edit<?php echo $row->id_karyawan;?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" class="modal modal-edu-general fullwidth-popup-InformationproModal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-2">
                <h4 class="modal-title" id="judul"></h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal"><i class="fa fa-close"></i>x</a>
                </div>
            </div>
            <form action="<?php echo base_url(); ?>Karyawan/update/<?php echo $row->id_karyawan;?>" method="POST" id="form_validation" enctype="multipart/form-data">
            <!-- <input type="hidden" name="id_guru" value=""> -->
            <div class="modal-body">
              
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"></div>
                <div class="col-12 col-md-9"><img  height="200px" width="200px" alt="<?= $row->foto; ?>" src="<?= base_url() ?>./assets/adds/images/karyawan/<?= $row->foto; ?>" class="rounded-circle">

                  <input data-toggle="tooltip" data-placement="top" title="" data-original-title="" name="filelama" value="<?=$row->foto ?>" type="hidden" class="form-control date">
                </div>
              </div>

              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class="form-control-label">Foto</label></div>
                <div class="col-12 col-md-9"><input data-toggle="tooltip" data-placement="top" title="" data-original-title="Pilih Foto maks. 1024 Kb" type="file" class="form-control date" placeholder="Pilih Foto maks. 1024 Kb" name="input_gambar" id="file-input">
                </div>
              </div>

              <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Nama</label></div>
                  <div class="col-12 col-md-9"><input name="nama"  type="text"  class="form-control" required="" placeholder="Inputkan Nama" value="<?php echo $row->nama ?>" id="nama" maxlength="40">
                  </div>
              </div>
                          
                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Alamat</label></div>
                  <div class="col-12 col-md-9">
                    <textarea name="alamat" id="alamat" rows="9" placeholder="Inputkan alamat...." class="form-control" value=""><?php echo $row->alamat ?></textarea>
                  </div>
                </div>          

                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Jabatan</label></div>
                  <div class="col-12 col-md-9"><input name="jabatan"  type="text"  class="form-control" required="" placeholder="Inputkan jabatan..." value="<?php echo $row->jabatan ?>" id="jabatan" maxlength="40">
                  </div>
              </div>

                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Telepon</label></div>
                  <div class="col-12 col-md-9"><input placeholder="Input Telepon" name="no_hp" value="<?php echo $row->no_hp ?>" type="number"  class="form-control" required="" id="no_hp" maxlength="14">
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
