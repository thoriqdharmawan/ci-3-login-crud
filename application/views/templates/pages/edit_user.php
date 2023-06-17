
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Ubah Pengguna</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="post" action="<?php echo site_url('index.php/dashboard/update/'.$user->id_user); ?>">
        <div  class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Information</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $user->full_name; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $user->username; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $user->email; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $user->password; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
                    <select name="level" id="level" class="form-control custom-select" >
                      <option disabled>Select one</option>
                      <option value="admin" <?php if ($user->level == 'admin') echo 'selected'; ?>>Admin</option>
                      <option value="staff" <?php if ($user->level == 'staff') echo 'selected'; ?>>Staff</option>
                    </select>
                  </div>
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <a href="<?php echo site_url('/'); ?>" class="btn btn-secondary">Batalkan</a>
            <input type="submit" value="Simpan" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
