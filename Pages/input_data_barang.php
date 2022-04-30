<!-- Container Fluid-->           
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Input Barang</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_simpan_barang.php" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kategori Barang</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="kategori" autofocus="autofocus" required="required">
                        <option value="" selected="selected">Pilih Kategori</option>
                         <?php 
                           $query="SELECT * FROM tbl_kategori";
                           $sql=mysqli_query($connect, $query);
                           while($data=mysqli_fetch_array($sql)){
                           echo"<option value='".$data['id_kategori']."'>".$data['id_kategori']."-".$data['nama_kategori']."</option>";
                            }
                         ?>
                      </select>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Type Barang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="type" required="required">
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Periode</label>
                        <div class="col-sm-8">
                            <select name="bulan" class="form-control" required="required">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tahun</label>
                        <div class="col-sm-8">
                            <select name="tahun" class="form-control" required="required">
                                <?php
                                $mulai= date('Y') - 50;
                                for($i = $mulai; $i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected="selected"' : '';
                                echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tgl. Barang Masuk</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Harga Barang / Pcs</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="hrg" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Stok</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="stok" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->