<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Laporan Supplier</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Laporan Supplier</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-md-12" style="margin-bottom: 5px;">
              <div class="card">
                <div class="card-header">
                  <b class="card-title">Laporan Supplier</b>
                </div>
                <div class="card-body">
                   <form method="post" action="laporan/laporan_supplier.php" target="_blank">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tanggal Awal</label>
                      <div class="col-sm-3">
                        <input type="date" class="form-control" name="ta" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Tanggal Akhir</label>
                      <div class="col-sm-3">
                      <input type="date" class="form-control" name="ak" required="required">
                      </div>
                      <div class="col-sm-2">
                        <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Laporan Barang</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Nama Perusahaan</th>
                        <th>Tgl. Masuk</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_supplier";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_supplier'];?></td>
                        <td><?php echo $data['nama_supplier'];?></td>
                        <td><?php echo $data['nama_perusahaan'];?></td>
                        <td><?php echo $data['tgl_masuk'];?></td>
                        <td><?php echo $data['jk'];?></td>
                        <td><?php echo $data['alamat'];?></td>
                        <td><?php echo $data['no_tlpn'];?></td>
                        <td><?php echo $data['email'];?></td>
                        </td>
                      </tr>
                      <?php $no++;}
                      ?>
                    </tbody>
                   
                  </table>
                 </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->