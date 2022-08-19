  <body>
    <div class="container-fluid  bg-navbar">
        <nav class="navbar navbar-light">
            <div class="container ">
                <div class="text-light">
                    <h4>Peminjaman</h4>
                </div>
                <a class="btn btn-outline-light justify-content-end" href="<?php echo site_url('C_petugas') ?>"><i class="bi bi-box-arrow-left"></i></a>
            </div>
          </nav>
      </div>

      <div class="container px-5 text-light">
        <div class="row py-5  justify-content-center">
            <div class="col-sm-8 p-5 bg-navbar rounded">
                <form method="post" action="<?php echo site_url('C_petugas/aksi_peminjaman') ?>">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label class="form-label">Nama Petugas</label>
                            <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $this->session->userdata('nama_user') ?>" readonly="">
							<input type="hidden" class="form-control" name="id_petugas" id="id_petugas" value="<?php echo $this->session->userdata('id_user') ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Nama Peminjam</label>
                            <select class="form-select" id="id_anggota" name="id_anggota">
							<?php
								foreach ($user as $a) {?>
								<option value="<?php echo $a->id_user; ?>"> <?php echo $a->nama_user;?> </option>
								<?php
								}
							?>
							</select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Judul Buku</label>
                            <select class="form-select" id="id_buku" name="id_buku">
								<?php
								foreach ($buku as $a) {?>
								<option value="<?php echo $a->id_buku; ?>"> <?php echo $a->judul_buku;?> </option>
								<?php
								}
								?>
							</select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Tanggal Pinjam</label>
                            <input value="<?php echo date("Y-m-d"); ?>" type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Tanggal Tempo</label>
                            <input type="date" class="form-control" id="tanggal_tempo" name="tanggal_tempo">
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-flex justify-content-center">
                        <button type="submit" class="btn col-md-10 col-xl-3 btn-outline-light">Buat</button>
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
	<div class="border border-secondary p-2 ms-5 me-5">
		<div class="container-xl">
			<form method="post" action="<?php echo site_url('C_petugas/aksi_peminjaman') ?>">
			<div class="row mb-3">
				<label for="nama_user" class="col-sm-2 col-form-label">Nama Petugas</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $this->session->userdata('nama_user') ?>" readonly="">
				<input type="hidden" class="form-control" name="id_petugas" id="id_petugas" value="<?php echo $this->session->userdata('id_user') ?>">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-form-label" for="id_anggota">Nama Peminjam</label>
				<div class="col-sm-10">
					<select class="form-select" id="id_anggota" name="id_anggota">
						<?php
						foreach ($user as $a) {?>
						<option value="<?php echo $a->id_user; ?>"> <?php echo $a->nama_user;?> </option>
						<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-form-label" for="id_buku">Judul Buku</label>
				<div class="col-sm-10">
					<select class="form-select" id="id_buku" name="id_buku">
						<?php
						foreach ($buku as $a) {?>
						<option value="<?php echo $a->id_buku; ?>"> <?php echo $a->judul_buku;?> </option>
						<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label for="tangal_pinjam" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
				<div class="col-sm-10">
				<input value="<?php echo date("Y-m-d"); ?>" type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
				</div>
			</div>
			<div class="row mb-3">
				<label for="tangal_pinjam" class="col-sm-2 col-form-label">Tanggal tempo</label>
				<div class="col-sm-10">
				<input type="date" class="form-control" id="tanggal_tempo" name="tanggal_tempo">
				</div>
			</div>
			<div class="text-center">
				<button id="buttonkategori" type="submit" class="btn text-light">Tambah</button>
			</div>
			</form>
		</div>
	</div> -->