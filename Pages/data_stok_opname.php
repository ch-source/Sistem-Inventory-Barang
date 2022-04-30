<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Stok Opname</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Data Stok Opname</li>
            </ol>
          </div>
          
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Stok Opname</h6>
                </div>
                <div class="card-body">
                  <a href="dashboard.php?p=input_stok_opname" class="btn btn-primary" style="margin-bottom: 3px; "><i class="fa fa-edit"></i> INPUT DATA STOK OPNAME</a>
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>ID Barang(Nama Barang)</th>
                        <th>Data Stok Opname</th>
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
                         <td><?php echo $data_user['id_barang'];?>-(<?php echo $data_user['nama_barang'];?>)</td>
                      <td>
                  <table class="table table-bordered" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>ID Opname</th>
                    <th>Nama Supplier</th>
                    <th>Nama Kategori</th>
                    <th>Nama Merek</th>
                    <th>Tgl. Barang Masuk</th>
                    <th>Stok</th>
                    <th>Tgl. Stok Opname</th>
                    <th>P/T</th>
                    <th>Stok Gudang</th>
                    <th>Selisih</th>
                    <th>Keterangan</th>
                    <th style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "koneksi.php";
                  $query="SELECT * FROM tbl_stok_opname WHERE id_barang='".$data_user['id_barang']."'";
                  $sql=mysqli_query($connect, $query);
                  while ($data=mysqli_fetch_array($sql)) {
                  ?>
                <tr>
                  <td><?php echo $data['id_opname'];?></td>
                  <td><?php echo $data['nama_supplier'];?></td>
                  <td><?php echo $data['nama_kategori'];?></td>
                  <td><?php echo $data['nama_merek'];?></td>
                  <td><?php echo $data['tgl_barang_masuk'];?></td>
                  <td><?php echo $data['stok'].'/Pcs';?></td>
                  <td><?php echo $data['tgl_stok_opname'];?></td>
                  <td><?php echo $data['periode'];?>-<?php echo $data['tahun'];?></td>
                  <td><?php echo $data['stok_opname'];?></td>
                  <td><?php echo $data['selisih'];?></td>
                  <td><?php echo $data['keterangan'];?></td>
                  <td><a href="dashboard.php?p=edit_stok_opname&id=<?php echo $data['id_opname'];?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
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