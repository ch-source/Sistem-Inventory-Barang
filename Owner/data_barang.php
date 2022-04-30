<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Barang</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Data Barang</li>
            </ol>
          </div>
          
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Barang</h6>
                </div>
                <div class="card-body">
                  <a href="dashboard_owner.php?p=input_data_barang" class="btn btn-primary" style="margin-bottom: 3px; "><i class="fa fa-edit"></i> INPUT DATA BARANG</a>
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>ID Barang</th>
                        <th>ID (Nama Supplier)</th>
                        <th>Nama Perusahaan</th>
                        <th>Kategori Barang</th>
                        <th>Merek Barang</th>
                        <th>Nama Barang</th>
                        <th>Periode</th>
                        <th>Tahun</th>
                        <th>Tgl. Barang Masuk</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Satuan</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       include "koneksi.php";
                       $no=1;
                       $query_user="SELECT * FROM tbl_barang";
                       $sql_user=mysqli_query($connect, $query_user);
                       while ($data_user=mysqli_fetch_array($sql_user)) {
                      ?>
                      <tr>
                         <td><?php echo $no;?></td>
                         <td><?php echo $data_user['id_barang'];?></td>
                        <td><?php echo $data_user['nama_supplier'];?></td>
                        <td><?php echo $data_user['nama_perusahaan'];?></td>
                        <td><?php echo $data_user['nama_kategori'];?></td>
                        <td><?php echo $data_user['nama_merek'];?></td>
                         <td><?php echo $data_user['nama_barang'];?></td>
                         <td><?php echo $data_user['periode'];?></td>
                         <td><?php echo $data_user['tahun'];?></td>
                         <td><?php echo $data_user['tgl_barang_masuk'];?></td>
                         <td><?php 
                          $hb= $data_user['harga_beli'];
                          echo "Rp.".number_format($hb, 2, ".", ".");
                          ?> 
                        </td>
                         <td><?php 
                          $hrg= $data_user['harga_jual'];
                          echo "Rp.".number_format($hrg, 2, ".", ".");
                          ?> 
                        </td>
                         <td><?php echo $data_user['stok'].'/Pcs';?></td>
                         <td><?php echo $data_user['satuan'];?></td>
                         <td><a href="dashboard_owner.php?p=edit_data_barang&id=<?php echo $data_user['id_barang'];?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
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