<div style="height:100vh" class="container d-flex flex-column justify-content-center align-items-center">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Thoriq</b>APP</a>
    </div>

    <!-- Login form -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Login</p>

        <div class="alert alert-info" role="alert">
          Email: admin; Password: admin
        </div>
        <div class="alert alert-info" role="alert">
          Email: thoriq; Password: thoriq
        </div>

        <form method="post" action="<?php echo site_url('index.php/auth/do_login'); ?>">
          <div class="input-group mb-3">
            <input type="text" name="username" id="username" placeholder="Username" class="form-control" required>
            <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
            </div>
          </div>
          <?php if (isset($error)) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $error; ?>
            </div>
          <?php } ?>

          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>