<body>
    <div class="container-fluid  bg-navbar">
        <nav class="navbar navbar-light">
            <div class="container ">
                <div class="text-light">
                    <h4>Tambah Data User</h4>
                </div>
                <a class="btn btn-outline-light justify-content-end" href="<?php echo site_url('C_petugas') ?>"><i class="bi bi-box-arrow-left"></i></a>
            </div>
          </nav>
    </div>

    <div class="container px-5 text-light">
        <div class="row py-5  justify-content-center">
            <div class="col-sm-8 p-5 bg-navbar rounded">
                <form method="post" action="<?php echo site_url('C_petugas/aksi_tambah_user') ?>">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_user" name="nama_user">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">NIS</label>
                            <input type="number" class="form-control" id="NIS" name="NIS">
                        </div>
                        <div class="col-md-7">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat_user" name="alamat_user">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label">Telepon</label>
                            <input type="number" class="form-control" id="telp_user" name="telp_user">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <fieldset class="row mb-3 justify-content-center">
                        <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-9">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="jk_user" id="jk_user" value="L" checked>
                            <label class="form-check-label" for="jk_user">
                            Laki-laki
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="jk_user" id="jk_user" value="P">
                            <label class="form-check-label" for="jk_user">
                            Perempuan
                            </label>
                        </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                        <div class="col-sm-10">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="status_user" id="status_user" value="aktif" checked>
                            <label class="form-check-label me-3" for="status_user">
                            Aktif
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="status_user" id="status_user" value="tidak">
                            <label class="form-check-label" for="status_user">
                            Tidak Aktif
                            </label>
                        </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Level</legend>
                        <div class="col-sm-10">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="level_user" id="level_user" value="petugas" checked>
                            <label class="form-check-label" for="level_user">
                            Petugas
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="level_user" id="level_user" value="anggota">
                            <label class="form-check-label" for="level_user">
                            Anggota
                            </label>
                        </div>
                        </div>
                    </fieldset>
                    <div class="d-grid gap-2 d-flex justify-content-center">
                        <button type="submit" class="btn col-md-10 col-xl-3 btn-outline-light">Tambah</button>
                    </div>
                  </form>
            </div>
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
	<a id="buttonkategori" href="<?php echo site_url('C_petugas') ?>" class="btn text-light mt-3 ms-5 mb-3">Kembali</a>
	<div class="border border-secondary  p-2 ms-5 me-5">
		<div class="container-xl">
			<form method="post" action="<?php echo site_url('C_petugas/aksi_tambah_user') ?>">
			<div class="row mb-3">
				<label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nama_user" name="nama_user">
				</div>
				<div class="input-group mb-3 col-md-5">
                	<span class="input-group-text">NIS</span>
                	<input type="text" name="NIS" class="form-control">
                </div>
			</div>
			<div class="row mb-3">
				<label for="alamat_user" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
				<textarea class="form-control" id="alamat_user" name="alamat_user"></textarea>
				</div>
			</div>
			<div class="row mb-3">
				<label for="telp_user" class="col-sm-2 col-form-label">Telpon</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="telp_user" name="telp_user">
				</div>
			</div>
			<fieldset class="row mb-3">
				<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
				<div class="col-sm-10">
				<div class="form-check-inline">
					<input class="form-check-input" type="radio" name="jk_user" id="jk_user" value="L" checked>
					<label class="form-check-label" for="jk_user">
					Laki-laki
					</label>
				</div>
				<div class="form-check-inline">
					<input class="form-check-input" type="radio" name="jk_user" id="jk_user" value="P">
					<label class="form-check-label" for="jk_user">
					Perempuan
					</label>
				</div>
				</div>
			</fieldset>
			<div class="row mb-3">
				<label for="username" class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="username" name="username">
				</div>
			</div>
			<div class="row mb-3">
				<label for="password" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
				<input type="password" class="form-control" id="password" name="password">
				</div>
			</div>
			<fieldset class="row mb-3">
				<legend class="col-form-label col-sm-2 pt-0">Status</legend>
				<div class="col-sm-10">
				<div class="form-check-inline">
					<input class="form-check-input" type="radio" name="status_user" id="status_user" value="aktif" checked>
					<label class="form-check-label me-3" for="status_user">
					Aktif
					</label>
				</div>
				<div class="form-check-inline">
					<input class="form-check-input" type="radio" name="status_user" id="status_user" value="tidak">
					<label class="form-check-label" for="status_user">
					Tidak Aktif
					</label>
				</div>
				</div>
			</fieldset>
			<fieldset class="row mb-3">
				<legend class="col-form-label col-sm-2 pt-0">Level</legend>
				<div class="col-sm-10">
				<div class="form-check-inline">
					<input class="form-check-input" type="radio" name="level_user" id="level_user" value="petugas" checked>
					<label class="form-check-label" for="level_user">
					Petugas
					</label>
				</div>
				<div class="form-check-inline">
					<input class="form-check-input" type="radio" name="level_user" id="level_user" value="anggota">
					<label class="form-check-label" for="level_user">
					Anggota
					</label>
				</div>
				</div>
			</fieldset>
			<div class="text-center">
				<button id="buttonkategori" type="submit" class="btn text-light">Tambah</button>
			</div>
			</form>
		</div>
	</div> -->