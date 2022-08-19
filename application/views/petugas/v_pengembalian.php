  <body>
    <div class="container-fluid  bg-navbar">
        <nav class="navbar navbar-light">
            <div class="container ">
                <div class="text-light">
                    <h4>Daftar Peminjam</h4>
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
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal tempo</th>
                <th>Tenggat</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
              $no = 1;
              foreach ($transaksi as $p) {?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->nama_user ?></td>
                <td><?php echo $p->judul_buku ?></td>
                <td><?php echo $p->tanggal_pinjam ?></td>
                <td><?php echo $p->tanggal_tempo ?></td>
                <td>
                  <?php
                  $date = date_create('Y-m-d');
                  $today = time();
                  $tgl_tempo = strtotime($p->tanggal_tempo);
                  $perbedaan = $today - $tgl_tempo;
                  $hasil = floor($perbedaan / (60 * 60 * 24));
                  if ($hasil > 0) {
                    echo "Lewat ".$hasil. " hari";
                  }else{
                    echo "Belum jatuh tempo";
                  }
                  ?>
                </td>
                <td>
                  <form method="POST" action="<?php echo site_url('C_petugas/aksi_pengembalian/'.$p->kode_transaksi); ?>">
                    <input class="text-center input-invisible" type="date" name="tanggal_kembali" id="tanggal_kembali" value="<?php echo date("Y-m-d"); ?>" disabled style="border:none;outline:none;background:none;color:white;">
                    <!--Input Hidden-->
                    <input value="<?php $p->kode_transaksi  ?>" type="hidden" name="kode_transaksi" id="kode_transaksi">
                    <input value="<?php $p->id_anggota  ?>" type="hidden" name="id_anggota" id="id_anggota">
                    <input value="<?php $p->id_buku   ?>" type="hidden" name="id_buku" id="id_buku">
                    <input value="<?php $p->tanggal_pinjam  ?>" type="hidden" name="tanggal_pinjam" id="tanggal_pinjam">
                    <input value="<?php $p->tanggal_tempo  ?>" type="hidden" name="tanggal_tempo" id="tanggal_tempo" disabled>
                    <input value="selesai" type="hidden" name="status" id="status">

                  </td>
                  <td>
                    <a href="<?php echo site_url('C_petugas/aksi_pengembalian/'.$p->kode_transaksi); ?>" class="badge rounded-pill text-decoration-none bg-light text-dark"><i class="bi bi-check2-circle"></i></a>
                  </td>
                </form>
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
          <th>Nama Peminjam</th>
          <th>Judul Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Tempo</th>
          <th>Tenggat</th>
          <th>Tanggal kembali</th>
          <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
          $no = 1;
          foreach ($transaksi as $p) {?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->nama_user ?></td>
                <td><?php echo $p->judul_buku ?></td>
                <td><?php echo $p->tanggal_pinjam ?></td>
                <td><?php echo $p->tanggal_tempo ?></td>
                <td>
                  <?php
                  $date = date_create('Y-m-d');
                  $today = time();
                  $tgl_tempo = strtotime($p->tanggal_tempo);
                  $perbedaan = $today - $tgl_tempo;
                  $hasil = floor($perbedaan / (60 * 60 * 24));
                  if ($hasil > 0) {
                    echo "Lewat ".$hasil. " hari";
                  }else{
                    echo "Belum jatuh tempo";
                  }
                  ?>
                </td>
                <td>
                  <form method="POST" action="<?php echo site_url('C_petugas/aksi_pengembalian/'.$p->kode_transaksi); ?>">
                    <input class="form-control" type="date" name="tanggal_kembali" id="tanggal_kembali" value="<?php echo date("Y-m-d"); ?>" disabled>
                    <input value="<?php $p->kode_transaksi  ?>" type="hidden" name="kode_transaksi" id="kode_transaksi">
                    <input value="<?php $p->id_anggota  ?>" type="hidden" name="id_anggota" id="id_anggota">
                    <input value="<?php $p->id_buku   ?>" type="hidden" name="id_buku" id="id_buku">
                    <input value="<?php $p->tanggal_pinjam  ?>" type="hidden" name="tanggal_pinjam" id="tanggal_pinjam">
                    <input value="<?php $p->tanggal_tempo  ?>" type="hidden" name="tanggal_tempo" id="tanggal_tempo" disabled>
                    <input value="selesai" type="hidden" name="status" id="status">
                  </td>
                  <td>
                    <a id="buttonkategori" class="btn text-light" href="<?php echo site_url('C_petugas/aksi_pengembalian/'.$p->kode_transaksi); ?>">Selesai
                    </a>
                  </form>
                </td>
              </tr>
        <?php                        
            }
        ?>
			</tbody>
		</table> -->