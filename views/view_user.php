
  <script>
     $(document).ready(function() {
    $('#tabel_user').DataTable( {
    } );
    $('#tabel_user tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        alert( data[0] +"'s salary is: "+ data[ 5 ] );
    } );
} );
    </script> 
<div class="container" style="margin-top: 70px;">
  <div class="row">
  
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data User</h3>
          <span><button class="btn btn-success pull-right"  data-toggle="modal" data-target="#tambahuser"><i class="  fa fa-plus-square"></i> Tambah User</button>
      </div>
      <hr>
      <div class="box-body ">
        <div class="table-responsive">
        <table id="tabel_user" class="table table-bordered table-hover  dataTables">
          <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th><center>Aksi</center></th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; 
            foreach ($user as $usr) { ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $usr->nim ?></td>
                <td><?php echo $usr->nama ?></td>
                <td><?php echo $usr->email ?></td>
                <td>
                  <center>
                  <button class="btn btn-info btn-xs"  data-toggle="modal" data-target="#editpass_popup<?php echo $usr->id_user?>"><i class="fa fa-key"></i> Ubah Password</button>
                  <a href="<?php echo base_url('admin/delete_user/').$usr->id_user?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                  </center>
                </td>
            </tr>
            <div class="modal fade" id="editpass_popup<?php echo $usr->id_user?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <span class="modal-title"><b>Ubah Password </b><?php echo $usr->nama ?></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form role="form" id="myForm" action="<?php echo base_url('admin/proses_edit_password/').$usr->id_user ?>" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Password</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <?php }?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
</div>
</div>
</div>
  <div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <span class="modal-title" style="font-size: 24px;"><b>Tambah User</b></span>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form role="form" id="myForm" action="<?php echo base_url('admin/proses_input_user') ?>" method="post">
        
            <div class="modal-body">
              <div class="box-body">
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" class="form-control" name="nim"   placeholder="Masukan NIM"  pattern="\d{9,13}" required>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama"  placeholder="Masukan Nama Lengkap" maxlength="30" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email"  placeholder="Masukan Email" maxlength="30" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                    <input type="Password" class="form-control" name="password"  placeholder="Masuakn Password" required>
                </div>
              </div>  
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

