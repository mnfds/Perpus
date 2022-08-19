  <body>
    <div class="container-fluid  bg-navbar">
        <nav class="navbar navbar-light">
            <div class="container ">
                <div class="text-light">
                    <h4>Daftar Buku</h4>
                </div>
                <a class="btn btn-outline-light justify-content-end" href="<?php echo site_url('C_anggota') ?>"><i class="bi bi-box-arrow-left"></i></a>
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
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Stok</th>
              </tr>
            </thead>
            <tbody>
				<?php
				$no=1;
				foreach ($buku as $b) {?>
					<tr>
						<td><?php echo $no++ ?></td>		
						<td><?php echo $b->judul_buku ?></td>		
						<td><?php echo $b->penulis_buku ?></td>		
						<td><?php echo $b->penerbit_buku ?></td>		
						<td><?php echo $b->jumlah_buku ?></td>		
					</tr>
				<?php
				}
				?>
            </tbody>
          </table>
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
	<a id="buttonkategori" href="<?php echo site_url('C_anggota') ?>" class="btn text-light ms-2 mt-2">Kembali</a>
	<table class="table text-dark">
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Stok</th>
		</tr>
		<?php
		$no=1;
		foreach ($buku as $b) {?>
			<tr>
				<td><?php echo $no++ ?></td>		
				<td><?php echo $b->judul_buku ?></td>		
				<td><?php echo $b->penulis_buku ?></td>		
				<td><?php echo $b->penerbit_buku ?></td>		
				<td><?php echo $b->jumlah_buku ?></td>		
			</tr>
		<?php
		}
		?>
	</table> -->