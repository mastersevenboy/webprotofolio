<?php $this->load->view('layout/header'); ?>

<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>Beranda">User</a>
            </li>
            <li class="breadcrumb-item active">Pengguna</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="10%">No</th>
                      <th width="20%">Nama</th>
                      <th width="15%">Email</th>
                      <th width="25%">No_Hp</th>
                      <th width="15%">Level</th>
                      <th width="15%">Status</th>
                      <th width="15%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody">
                    <?php $no=1; foreach($terverifikasi as $row): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->email; ?></td>
                      <td><?php echo $row->no_tlp; ?></td>
                      <td><?php echo $row->level; ?></td>
                      <td><?php if (($row->status)==0) {
                          echo '<span class="badge badge-warning">Tidak Aktih</span>';
                        }else{
                          echo '<span class="badge badge-success">Aktif</span>';
                        } ?>
                        
                      </td>
                      
                      <td>
                        <div class="modal-footer info-md">
                          <button data-toggle="modal" data-target="#hapus<?php echo $row->id_user;?>" class="btn btn-danger">Hapus</button>
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
    <?php foreach($terverifikasi as $row) { ?>
        <div class="modal fade" id="hapus<?php echo $row->id_user;?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url();?>User/hapus/<?php echo $row->id_user;?>" method="POST">
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
    <?php } ?>

<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_script'); ?>
