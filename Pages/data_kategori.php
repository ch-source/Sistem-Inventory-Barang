<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Kategori Barang</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Data Kategori Barang</li>
            </ol>
          </div>
          <div class="row mb-12">
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kategori Barang</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_simpan_kategori.php" role="form" method="post">
                    <?php
                      include "koneksi.php";
                      $query = "SELECT max(id_kategori) as maxId FROM tbl_kategori";
                      $hasil = mysqli_query($connect,$query);
                      $data = mysqli_fetch_array($hasil);
                      $iduser = $data['maxId'];
                      $noUrut = (int) substr($iduser, 3, 3);
                      $noUrut++;
                      $char = "KTG";
                      $iduser= $char . sprintf("%03s", $noUrut);
                    ?>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Kategori</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="idkt" readonly="readonly" value="<?php echo $iduser;?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Kategori</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="nama" required="required">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                      </div>
                    </div>
                  </form>
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                        <th style="text-align: center;">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       include "koneksi.php";
                       $no=1;
                       $query_user="SELECT * FROM tbl_kategori";
                       $sql_user=mysqli_query($connect, $query_user);
                       while ($data_user=mysqli_fetch_array($sql_user)) {
                      ?>
                      <tr>
                         <td><?php echo $no;?></td>
                         <td><?php echo $data_user['id_kategori'];?></td>
                         <td><?php echo $data_user['nama_kategori'];?></td>
                         <td style="text-align: center;"><a href="dashboard.php?p=edit_kategori&id=<?php echo $data_user['id_kategori'];?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
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