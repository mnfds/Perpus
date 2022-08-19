<body>
    <div class="container-fluid  bg-navbar">
        <nav class="navbar navbar-light">
            <div class="container ">
                <div class="text-light">
                    <h4>Ubah Data Buku</h4>
                </div>
                <a class="btn btn-outline-light justify-content-end" href="<?php echo site_url('C_petugas/data_buku') ?>"><i class="bi bi-box-arrow-left"></i></a>
            </div>
          </nav>
      </div>

      <div class="container px-5 text-light">
        <div class="row py-5  justify-content-center">
            <div class="col-sm-8 p-5 bg-navbar rounded">
                <form method="post" action="<?php echo site_url('C_petugas/aksi_edit_buku') ?>">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label class="form-label">Judul Buku</label>
                            <input type="hidden" class="form-control" id="id_buku" name="id_buku" value="<?php echo $buku->id_buku ?>">
							<input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $buku->judul_buku ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" id="id_kategori" name="id_kategori">
								<?php
								foreach ($kategori as $k) {?>
									<option value="<?php echo $k->id_kategori ?>" <?php if ($k->id_kategori == $buku->id_kategori): echo "selected"; ?><?php endif ?>><?php echo $k->kategori ?></option>
								<?php
								}
								?>
							</select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" value="<?php echo $buku->penulis_buku ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit_buku" name="penerbit_buku" value="<?php echo $buku->penerbit_buku ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="<?php echo $buku->jumlah_buku ?>">
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-flex justify-content-center">
                        <button type="submit" class="btn col-md-10 col-xl-3 btn-outline-light">Ubah</button>
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
	<a id="buttonkategori" href="<?php echo site_url('C_petugas/data_buku') ?>" class="btn text-light mt-3 ms-5 mb-3">Kembali</a>
	<div class="border border-secondary  p-2 ms-5 me-5">
		<div class="container-xl">
			<form method="post" action="<?php echo site_url('C_petugas/aksi_edit_buku') ?>">
			<div class="row mb-3">
				<label for="judul_buku" class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-10">
				<input type="hidden" class="form-control" id="id_buku" name="id_buku" value="<?php echo $buku->id_buku ?>">
				<input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $buku->judul_buku ?>">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-form-label" for="id_kategori">Kategori</label>
				<div class="col-sm-10">
					<select class="form-select" id="id_kategori" name="id_kategori">
						<?php
						foreach ($kategori as $k) {?>
							<option value="<?php echo $k->id_kategori ?>" <?php if ($k->id_kategori == $buku->id_kategori): echo "selected"; ?><?php endif ?>><?php echo $k->kategori ?></option>
						<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label for="penulis_buku" class="col-sm-2 col-form-label">Penulis</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="penulis_buku" name="penulis_buku" value="<?php echo $buku->penulis_buku ?>">
				</div>
			</div>
			<div class="row mb-3">
				<label for="penerbit_buku" class="col-sm-2 col-form-label">Penerbit</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="penerbit_buku" name="penerbit_buku" value="<?php echo $buku->penerbit_buku ?>">
				</div>
			</div>
			<div class="row mb-3">
				<label for="jumlah_buku" class="col-sm-2 col-form-label">Stok</label>
				<div class="col-sm-10">
				<input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="<?php echo $buku->jumlah_buku ?>">
				</div>
			</div>
			<div class="text-center">
				<button id="buttonkategori" type="submit" onclick="return confirm('Apakah anda yakin ingin Mengubah data?')" class="btn text-light">Ubah</button>
			</div>
			</form>
		</div>
	</div> -->