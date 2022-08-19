  <body>
    <div class="container-fluid  bg-navbar">
        <nav class="navbar navbar-light">
            <div class="container ">
                <div class="text-light">
                    <h4>Daftar Data User</h4>
                </div>
                <div>
                  <form class="d-flex justify-content-center" method="get" action="<?php echo base_url('C_petugas/cari_user');?>">
                      <input class="form-control me-2" type="search" placeholder="Cari Data Anggota" aria-label="Search" name="keyword" autofocus>
                      <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
                <a class="btn btn-outline-light justify-content-end" href="<?php echo site_url('C_petugas') ?>"><i class="bi bi-box-arrow-left"></i></a>
            </div>
          </nav>
    </div>

    <!--Tabel-->
   <div class="container-fluid my-5 ">
       <div class="table-responsive bg-perpus rounded px-1">
        <table class="table text-light text-center">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col">Status</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
			<?php
			$no = 1;
			foreach ($user as $u) {?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->nama_user ?></td>
					<td><?php echo $u->jk_user ?></td>
					<td><?php echo $u->alamat_user ?></td>
					<td><?php echo $u->telp_user ?></td>
					<td><?php echo $u->status_user ?></td>
					<td><?php echo $u->level_user ?></td>
					<td>
                    <a href="<?php echo site_url('C_petugas/edit_user/'.$u->id_user) ?>" class="badge rounded-pill text-decoration-none bg-light text-dark"><i class="bi bi-pencil-fill"></i></a>
                    <a onclick="return confirm('Apakah anda yakin ingin Menghapus Data?')" href="<?php echo site_url('C_petugas/hapus_user/'.$u->id_user) ?>" class="badge rounded-pill text-decoration-none bg-light text-dark"><i class="bi bi-trash-fill"></i></a>
                	</td>
				</tr>
			<?php
			}
			?>
            </tbody>
          </table>
       </div>
   </div>

   <!--Footer-->
<div class="fixed-bottom">
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
	<a id="buttonkategori" href="<?php echo site_url('C_petugas') ?>" class="btn text-light ms-2 mt-2">Kembali</a>
	<div class="">
		<div class="col-6">
			<form method="get" action="<?php echo base_url('C_petugas/cari_user');?>">
				<div class="input-group m-2 start-50">
					<input type="text" class="form-control text-center" placeholder="masukkan nama" name="keyword" autofocus>
					<div class="input-group-append">
						<button id="buttonkategori" class="btn text-light" type="submit" name="submit">cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<table class="table text-dark dark">
		<thead>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Jenis Kelamin</td>
				<td>Alamat</td>
				<td>Telpon</td>
				<td>Status</td>
				<td>Level</td>
				<td>Aksi</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($user as $u) {?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->nama_user ?></td>
					<td><?php echo $u->jk_user ?></td>
					<td><?php echo $u->alamat_user ?></td>
					<td><?php echo $u->telp_user ?></td>
					<td><?php echo $u->status_user ?></td>
					<td><?php echo $u->level_user ?></td>
					<td><a href="<?php echo site_url('C_petugas/edit_user/'.$u->id_user) ?>">Edit</a></td>
					<td><a onclick="return confirm('Apakah anda yakin ingin Menghapus Data?')" href="<?php echo site_url('C_petugas/hapus_user/'.$u->id_user) ?>">Delete</a></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table> -->