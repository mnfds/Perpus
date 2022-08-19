  <body>
    <div class="container mb-5">
        <nav class="navbar navbar-expand-lg bg-navbar fixed-top">
            <div class="container-fluid">
                <img class="me-2 mb-2" src="vendor/logo-smkn2.jpg" alt="" width="50px">
                <a class="h4 text-light text-decoration-none" href="https://smkn2-bjm.sch.id/">SMKN 2 Banjarmasin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" onclick="return confirm('Apakah anda yakin ingin logout?')" href="<?php echo site_url('C_login/logout');?>"><i class="bi bi-person-fill"></i>Logout</a>
                        </li>
                    </ul>
                    <form class="d-flex" method="get" action="<?php echo base_url('C_anggota/cari');?>">
                    <input class="form-control me-2" autofocus type="text" name="keyword" placeholder="cari judul buku" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container pt-5">
      <?= $this->session->flashdata('login'); ?>
    </div>

    <div class="container pt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-11 mx-3 bg-perpus rounded fw-bolder">
                <table class="table table-borderless table-responsive text-light">
                    <tbody>
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $this->session->userdata('nama_user') ?></td>
                      </tr>
                      <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><?php echo $this->session->userdata('NIS') ?></td>
                      </tr>
                      <tr>
                        <td>alamat</td>
                        <td>:</td>
                        <td><?php echo $this->session->userdata('alamat_user') ?></td>
                      </tr>
                      <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td><?php echo $this->session->userdata('telp_user') ?></td>
                      </tr>
                      <tr>
                        <td>status</td>
                        <td>:</td>
                        <td>
                          <?php
                            if ($this->session->userdata('status_user') == "aktif") {
                              echo "Aktif";
                            }elseif ($this->session->userdata('status_user') == "tidak") {
                              echo "Tidak Aktif";
                            }
                          ?>
                        </td>
                      </tr>
                      <tr>
                        <td>level</td>
                        <td>:</td>
                        <td>
                        <?php
                          if ($this->session->userdata('level_user') == "petugas") {
                            echo "Petugas";
                          }elseif ($this->session->userdata('level_user') == "anggota") {
                            echo "Anggota";
                          }
                        ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

        <div class="row g-4 mt-4">
          <?php
          foreach ($kategori as $k) {?> 
            <div class="col-12 col-lg-6">
                <div class="bg-perpus  rounded text-white shadow">
                    <div class="row m-0 p-0">
                          <div class="col-12 col-md-7 p-4">
                              <h1 class="fw-bolder sub-title-section mt-1"><?php echo $k->kategori ?></h1>
                              <p class="fw-normal f16">Berisikan buku buku yang berkaitan dengan <?php echo $k->kategori ?></p>
                              <a href="<?php echo site_url('C_anggota/data_kategori_buku/'.$k->id_kategori) ?>" class="btn btn-outline-light align-bottom">Cek daftar buku</a>
                          </div>
                          <div class="col-12 col-md-5 p-0 m-0 d-none d-md-block">
                              <img src="<?php echo $k->foto?>" class="float-end"
                                  style="max-height:200px;" alt="">
                          </div>
                    </div>
                </div>
            </div>
          <?php
          }
          ?>   
          
        </div>
    </div>


    <!--Footer-->
    <div class="">
        <div class="bg-navbar text-light py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm text-center">
                    <div>
                        <a class="h5 text-decoration-none text-light">SMKN 2 Banjarmasin</a>
                    </div>
                    <a class="text-light mx-1" href="#"><i class="bi bi-instagram"></i></a>
                    <a class="text-light mx-1" href="#"><i class="bi bi-facebook"></i></a>
                    <a class="text-light mx-1" href="#"><i class="bi bi-twitter"></i></a>
                    <a class="text-light mx-1" href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-light mt-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm text-center text-muted">
                    &copy;smk negeri 2 banjarmasin
                    <p class="text-muted">2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>




<!-- <body>
<div>
  <div>
    <h1 id="salam" class="text-dark">SELAMAT DATANG
      <img id="logo" src="vendor/logo-smkn2.jpg" alt="">
    </h1>
  </div>
</div>
<?= $this->session->flashdata('login'); ?>
<hr class="text-dark mt-1 pt-1">
<table class="table table-borderless text-dark fw-bold">
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $this->session->userdata('nama_user') ?></td>
    <td rowspan="4"><a id="buttonkategori" onclick="return confirm('Apakah anda yakin ingin logout?')" href="<?php echo site_url('C_login/logout');?>" style="position: relative; left:290px" class="btn text-light ms-5">Log Out</a></td>
  </tr>
  <tr>
    <td>NIS</td>
    <td>:</td>
    <td><?php echo $this->session->userdata('NIS') ?></td>
  </tr>
  <tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
      <?php
        if ($this->session->userdata('jk_user') == "L") {
          echo "Laki-laki";
        }elseif ($this->session->userdata('jk_user') == "P") {
          echo "Perempuan";
        }
      ?>          
    </td>
    <td></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $this->session->userdata('alamat_user') ?></td>
    <td></td>
  </tr>
  <tr>
    <td>Telpon</td>
    <td>:</td>
    <td><?php echo $this->session->userdata('telp_user') ?></td>
    <td></td>
  </tr>
  <tr>
    <td>Status</td>
    <td>:</td>
    <td>
       <?php
        if ($this->session->userdata('status_user') == "aktif") {
          echo "Aktif";
        }elseif ($this->session->userdata('status_user') == "tidak") {
          echo "Tidak Aktif";
        }
      ?>
    </td>
    <td></td>
  </tr>
  <tr>
    <td>Level</td>
    <td>:</td>
    <td>
     <?php
        if ($this->session->userdata('level_user') == "petugas") {
          echo "Petugas";
        }elseif ($this->session->userdata('level_user') == "anggota") {
          echo "Anggota";
        }
      ?>
      </td>
    <td></td>
  </tr>
</table>
<hr class="text-dark mt-1 pt-1">
<div class="">
		<div class="col-6">
			<form method="get" action="<?php echo base_url('C_anggota/cari');?>">
				<div class="input-group m-2 start-50">
					<input type="text" class="form-control text-center" placeholder="masukkan judul buku" name="keyword" autofocus>
					<div class="input-group-append">
						<button id="buttonkategori" class="btn text-light " type="submit" name="submit">cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <?php
  foreach ($kategori as $k) {?> 
    <div class="col">
      <div class="container">
        <div id="bk" class="card">
          <img id="fk" src="<?php echo $k->foto?>" class="card-img-top" alt="">
          <div class="card-body">
              <h5 class="card-title"><?php echo $k->kategori ?></h5>
              <a id="buttonkategori" href="<?php echo site_url('C_anggota/data_kategori_buku/'.$k->id_kategori) ?>" class="btn text-light">Cek Buku</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>   
  </div> 
</div>
<hr class="text-dark mt-1 pt-1">
<div class="footer">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/dist/js/bootstrap.bundle.min.js"></script>
    <iframe id="maps" class="mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.219771909066!2d114.5878392142863!3d-3.295680842046893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4211bbc1be42d%3A0xd93490f4e3d79a8e!2sSMK%20Negeri%202%20Banjarmasin!5e0!3m2!1sid!2sid!4v1637425003727!5m2!1sid!2sid"></iframe>
    <div id="credit" class="">
        <div class="card-body text-light">
            instagram: @smkn2banjarmasin<br>
            youtube : smkn2banjarmasin<br>
            email: @smkn2bjm.sch.id<br>
            twitter: @smkn2banjarmasin
        </div>
    </div>
</div>
 -->
