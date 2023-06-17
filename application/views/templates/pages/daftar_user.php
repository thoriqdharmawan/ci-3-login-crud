<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2">
          <h1>Daftar Pengguna</h1>
          <a href="index.php/dashboard/add">
            <button class="btn btn-primary">Tambah Pengguna</button>
          </a>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($users as $user) { ?>
                    <tr>
                      <td><?php echo $user->id_user; ?></td>
                      <td><?php echo $user->full_name; ?></td>
                      <td><?php echo $user->email; ?></td>
                      <td><?php echo $user->password; ?></td>
                      <td><?php echo $user->level; ?></td>
                      <td>
                        <a href="<?= base_url('index.php/dashboard/edit/'. $user->id_user) ?>">
                          <button class="btn btn-primary">
                            Edit
                          </button>
                        </a>
                        <a href="<?= base_url('index.php/dashboard/delete/'. $user->id_user) ?>">
                          <button class="btn btn-danger">hapus</button>
                        </a>
                        
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>