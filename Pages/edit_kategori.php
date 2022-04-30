<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Kategori</h6>
                </div>
                <div class="card-body">
                  <?php
                  include"koneksi.php";
                  $id=$_GET['id'];
                  $query="SELECT * FROM tbl_kategori WHERE id_kategori='$id'";
                  $sql=mysqli_query($connect, $query);
                  $data=mysqli_fetch_array($sql);?>
                  <form method="post" action="proses_edit_kategori.php?id=<?php echo $id;?>">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Kategori</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" value="<?php echo $data['id_kategori'];?>" name="idk" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Kategori</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" value="<?php echo $data['nama_kategori'];?>" name="nama" required="required">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Perubahan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->