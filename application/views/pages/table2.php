<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">
                        <label>Daftar Poygon</label>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                        <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Polygon</th>
                        <th scope="col">Coordinate</th>
                        <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
				<?php
                
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query(mysqli_connect("localhost","root","","webci3"), "SELECT * FROM polygon ORDER BY nama_polygon DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['nama_polygon'].'</td>
							<td>'.$data['cord'].'</td>
							<td>
                                <a href="index.php?page=hapus&kode_buku='.$data['kode_buku'].'" class="btn btn-secondary btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Hapus</a>
                                
								</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    </section>
</div>
 