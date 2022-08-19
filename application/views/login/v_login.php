  <body>

    <div class="container mt-1">
      <div class="row pt-4">
        <div class="text-center">
          <h1 class="fw-bolder text-light" style="text-shadow: -11px 8px 8px rgba(0,0,0,0.63);">Perpustakaan SMKN 2 Banjarmasin</h1>
          <div>
            <img class="img-fluid" width="100px" src="vendor/logo-smkn2.jpg" alt="">
          </div>
        </div>
        <div>
          
        </div>
      </div>
        <div class="row">
            <div class="col-sm-6">
                <form class="login" method="post" action="<?php echo site_url('C_login/aksi_login');?>">
                  <h4 class="text-center mb-2">Login</h4>
                    <hr>
                    <?= $this->session->flashdata('message'); ?>
                    <?= $this->session->flashdata('salah'); ?>
                    <div class="mb-4">
                      <!--input-->
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <!--akhir input-->
                    <div class="d-grid gap-2 justify-content-md-end">
                        <button type="submit" class="btn btn-outline-light">login</button>
                    </div>
                    <div id="emailHelp" class="form-text">Belum punya akun? <a href="<?php echo site_url('C_register') ?>" class="text-decoration-none">daftar sekarang</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
    
<!-- <body>
    <div class="text-center">
       <h3 class="mt-5 fw-bolder text-light">SELAMAT DATANG</h3>
       <h3 class="fw-bolder text-light">DI PERPUSTAKAAN SMKN 2 BANJARMASIN</h3>
       <img src="vendor/logo-smkn2.jpg" alt="" style="width:120px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="" method="post" action="<?php echo site_url('C_login/aksi_login');?>">
                    <div class="login text-center text-light">
                        <div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->flashdata('salah'); ?>
                        <?= $this->session->flashdata('logout'); ?>
                        </div>
                        <div class="mb-2">
                            <label>username</label>
                            <input type="text" name="username">
                        </div>
                        <div>
                            <label>password </label>
                            <input type="password" name="password">
                        </div>
                        <div class="">
                            <button id="button1" type="submit">login</button>
                        </div>
                        <div>
                            <a href="<?php echo site_url('C_register') ?>" >register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->