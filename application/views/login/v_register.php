  <body>
    <div class="container-fluid bg-navbar">
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="btn btn-outline-light" href="<?php echo site_url('C_login') ?>">Kembali</a>
            </div>
          </nav>
    </div>

    <!--form-->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row bg-navbar rounded">
                <div class="col col-sm-12">
                    <form method="post" action="<?php echo site_url('C_register/aksi_register') ?>" class="text-light">
                        <div class="card-header h4">
                            Register
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 d-md-flex justify-content-md-between">
                                <div class="input-group mb-3 col-md-5 me-1 ">
                                    <span class="input-group-text">Nama</span>
                                    <input type="text" name="nama_user" class="form-control">
                                </div>
                                <div class="input-group mb-3 col-md-5">
                                    <span class="input-group-text">NIS</span>
                                    <input type="text" name="NIS" class="form-control">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Alamat</span>
                                <input type="text-area" name="alamat_user"class="form-control">
                            </div>
                            
                            <div class="col-md-6 d-md-flex">
                                <div class="input-group mb-3 col-md-5 me-1">
                                    <span class="input-group-text">Telepon</span>
                                    <input type="number" name="telp_user" class="form-control">
                                </div>
                                <div class="input-group mb-3 col-md-5 ">
                                    <span class="input-group-text">Jenis kelamin</span>
                                    <select name="jk_user" class="form-select col-md-9">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex">
                                <div class="input-group mb-3 col-md-5 me-1">
                                    <span class="input-group-text">Username</span>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="input-group mb-3 col-md-5">
                                    <span class="input-group-text">Password</span>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div> 
								<button type="submit" class="btn btn-outline-light">login</button>
							</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#345b63" fill-opacity="1" d="M0,128L48,122.7C96,117,192,107,288,128C384,149,480,203,576,218.7C672,235,768,213,864,181.3C960,149,1056,107,1152,106.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>




<!-- <body>
	<a id="buttonkategori" href="<?php echo site_url('C_login') ?>" class="btn text-light mt-3 ms-5 mb-3">Kembali</a>
	<div class="border border-secondary  p-2 ms-5 me-5">
		<div class="container-xl">
			<form method="post" action="<?php echo site_url('C_register/aksi_register') ?>">
			<div class="row mb-3">
				<label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nama_user" name="nama_user">
				</div>
			</div>
			<div class="row mb-3">
				<label for="NIS" class="col-sm-2 col-form-label">Nis</label>
				<div class="col-sm-10">
				<input type="number" class="form-control" id="NIS" name="NIS">
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
			<div class="text-center">
				<button id="buttonkategori" type="submit" class="btn text-light">Tambah</button>
			</div>
			</form>
		</div>
	</div> -->