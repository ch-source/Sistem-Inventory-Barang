<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Supplier</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Supplier</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Supplier</h6>
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
                        <th>Status Validasi Data</th>
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
                        <td><?php 
                        if (  $data['status_validasi']=='') {
                        echo"<a href='proses_validasi_supplier.php?id=".$data['id_supplier']."' class='btn btn-success btn-sm'>Validasi</a>";
                        }else{
                          echo"Valid";
                        }
                      
                        ?>
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