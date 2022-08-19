  <body>
    <div class="container-fluid  bg-navbar">
        <nav class="navbar navbar-light">
            <div class="container ">
                <div class="text-light">
                    <h4>Arsip</h4>
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
                <th>NO</th>
                <th>Kode Tranksaksi</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal tempo</th>
                <th>Tanggal Kembali</th>
                <th>Judul Buku</th>
                <th>Nama Peminjam</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            <?php
              $no = 1;
                foreach ($transaksi as $p) {?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->kode_transaksi ?></td>
                    <td><?php echo $p->tanggal_pinjam ?></td>
                    <td><?php echo $p->tanggal_tempo ?></td>
                    <td><?php echo $p->tanggal_kembali ?></td>
                    <td><?php echo $p->judul_buku ?></td>
                    <td><?php echo $p->nama_user ?></td>
                    <td>
                    <p><i class="bi bi-check-lg"></i> <?php echo $p->status ?></p>
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
  <table class="table text-dark">
		<thead>
			<tr>
        <th>No</th>
        <th>Kode Transaksi</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal tempo</th>
        <th>Tanggal Kembali</th>
        <th>Judul Buku</th>
        <th>Nama Peminjam</th>
        <th>Status</th>
      </tr>
  	</thead>
  	<tbody>
      <?php
      $no = 1;
        foreach ($transaksi as $p) {?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p->kode_transaksi ?></td>
            <td><?php echo $p->tanggal_pinjam ?></td>
            <td><?php echo $p->tanggal_tempo ?></td>
            <td><?php echo $p->tanggal_kembali ?></td>
            <td><?php echo $p->judul_buku ?></td>
            <td><?php echo $p->nama_user ?></td>
            <td><?php echo $p->status ?></td>
          </tr>
      <?php                        
        }
      ?>
    </tbody>
	</table> -->