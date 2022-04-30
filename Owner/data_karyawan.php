<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Karyawan</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Karyawan</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Karyawan</h6>
                </div>
                <div class="card-body">
                  <a href="dashboard_owner.php?p=input_karyawan" class="btn btn-primary" style="margin-bottom: 3px;"><i class="fa fa-edit"></i> INPUT KARYAWAN</a>
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_karyawan";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_karyawan'];?></td>
                        <td><?php echo $data['nama_karyawan'];?></td>
                        <td><?php echo $data['jk'];?></td>
                        <td><?php echo $data['alamat'];?></td>
                        <td><?php echo $data['no_tlpn'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['status'];?></td>
                        <td><a href="dashboard_owner.php?p=edit_karyawan&id=<?php echo $data['id_karyawan'];?>" class="btn btn-info btn-sm" style="margin-bottom: 2px;" ><i class="fa fa-edit"></i></a>
                         </td>
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