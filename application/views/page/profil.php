<?php $this->load->view('layout/header'); ?>

<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>Beranda">Dashbord</a>
            </li>
            <li class="breadcrumb-item active">Profil</li>
          </ol>
          <?php echo $this->session->flashdata('message'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <!-- <div class="card-header">
              <a href="#form" data-toggle="modal" data-target="#tambahmodal" class="btn btn-primary">Tambah Data</a>
            </div>
 -->            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align:center;width:20px;">No</th>
                      <th width="15%">Foto</th>
                      <th width="15%">Email</th>
                      <th width="15%">No_Hp</th>
                      <th width="15%">No_WA</th>
                      <th width="15%">Website</th>
                      <th width="25%">Sejarah</th>
                      <th width="25%">Alamat</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody">
                    <?php $no=1; foreach($profil as $row): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td align="center"><img height="50px" width="50px" alt="<?= $row->foto; ?>" src="<?= base_url(); ?>./assets/adds/images/profil/<?= $row->foto; ?>"></td>
                      <td><?php echo $row->email; ?></td>
                      <?php echo $nol="0"; ?>
                      <td><?php echo $nol,$row->no_tlp; ?></td>
                      <td><?php echo $nol,$row->wa; ?></td>
                      <td><?php echo $row->web; ?></td>
                      <td><?php echo $row->sejarah; ?></td>
                      <td><?php echo $row->alamat;?></td>
                      <td>
                        <div class="modal-footer info-md">
                          <button type="button" id="btn-edit" data-toggle="modal" data-target="#edit<?php echo $row->id;?>" class="btn btn-primary">Edit</button>
                          <button data-toggle="modal" data-target="#hapus<?php echo $row->id;?>" class="btn btn-danger">Hapus</button>
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

<?php foreach($profil as $row) { ?>
        <div class="modal fade" id="hapus<?php echo $row->id;?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url();?>Beranda/h_profil/<?php echo $row->id;?>" method="POST">
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
            <form action="<?php echo base_url(); ?>Beranda/update" method="POST" id="form_validation" enctype="multipart/form-data">
            <!-- <input type="hidden" name="id_guru" value=""> -->
            <div class="modal-body">
            
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"></div>
                <div class="col-12 col-md-9"><img  height="200px" width="200px" alt="<?= $row->foto; ?>" src="<?= base_url() ?>./assets/adds/images/profil/<?= $row->foto; ?>" class="rounded-circle">

                  <input data-toggle="tooltip" data-placement="top" title="" data-original-title="" name="filelama" value="<?=$row->foto ?>" type="hidden" class="form-control date" placeholder="">
                </div>
              </div>

              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class="form-control-label">Foto</label></div>
                <div class="col-12 col-md-9"><input data-toggle="tooltip" data-placement="top" title="" data-original-title="Pilih Foto maks. 1024 Kb" type="file" class="form-control date" placeholder="Pilih Foto maks. 1024 Kb" name="input_gambar" id="file-input">
                </div>
              </div>

              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Email</label></div>
                <div class="col-12 col-md-9"><input name="email" value="<?php echo $row->email ?>" type="email" id="email" class="form-control" required="" placeholder="Inputkan email" maxlength="40">
                </div>
              </div>

              <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">No.Telp</label></div>
                  <div class="col-12 col-md-9"><input name="no_tlp"  type="text"  class="form-control" required="" placeholder="Inputkan no telephon...." value="<?php echo $row->no_tlp ?>" id="no_tlp" maxlength="15">
                  </div>
              </div>
                          
                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">No.WA</label></div>
                  <div class="col-12 col-md-9">
                    <input placeholder="Inputkan no whatsapp...." name="wa" value="<?php echo $row->wa ?>" type="number"  class="form-control" required="" id="wa" maxlength="15">
                  </div>
                </div>          

                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Web</label></div>
                  <div class="col-12 col-md-9"><input placeholder="Inputkan alamat web...." name="web" value="<?php echo $row->web ?>" type="text"  class="form-control" required="" id="web" maxlength="30">
                  </div>
                </div>

                <div class="row form-group">
                  <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Sejarah</label></div>
                  <div class="col-12 col-md-9"><textarea class="ckeditor" id="ckeditor" name="sejarah" rows="9" placeholder="Inputkan sejarah toko...." class="form-control" value=""><?php echo $row->sejarah ?></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                    <div class="col-12 col-md-9"><textarea name="alamat" id="alamat" rows="9" placeholder="Inputkan alamat...." class="form-control" value=""><?php echo $row->alamat ?></textarea>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_script'); ?>
