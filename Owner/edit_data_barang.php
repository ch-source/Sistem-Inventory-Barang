<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Barang</h6>
                </div>
                <div class="card-body">
                  <?php
                  include"koneksi.php";
                  $id=$_GET['id'];
                  $query_a="SELECT * FROM tbl_barang WHERE id_barang='$id'";
                  $sql_a=mysqli_query($connect, $query_a);
                  $data_a=mysqli_fetch_array($sql_a);?>
                   <form method="post" action="proses_edit_data_barang.php?id=<?php echo $id;?>" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Supplier</label>
                      <div class="col-sm-4">
                       <select id="nim" name="nim" class="form-control"  autofocus="autofocus" onchange="changeValueNIM(this.value)">
                             <option value="" selected="selected">Pilih Supplier</option>
                             <?php 
                               $sql=mysqli_query($connect, "SELECT * FROM tbl_supplier");
                               $jsArray = "var prdName = new Array();\n";
                               while ($data=mysqli_fetch_array($sql)) {
                              
                                echo '<option value="'.$data['id_supplier'].'">'.$data['id_supplier'].'-'.$data['nama_supplier'].'</option> ';
                                $jsArray .= "prdName['" . $data['id_supplier'] . "'] = {nama_supplier:'" . addslashes($data['nama_supplier']) . "' ,nama_perusahaan:'" . addslashes($data['nama_perusahaan']) . "'};\n";
                              
                               }
                              ?>
                          </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Supplier</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" id="nama_supplier" readonly="readonly" value="<?php echo $data_a['nama_supplier'];?>" name="ns" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Perusahaan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama_perusahaan" name="np" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">ID Kategori</label>
                      <div class="col-sm-4">
                        <select id="nk" name="kategori" class="form-control" onchange="changeValueBRG(this.value)">
                             <option value="" selected="selected">Pilih Kategori</option>
                             <?php 
                               $sql_b=mysqli_query($connect, "SELECT * FROM tbl_kategori");
                               $jsArray_b= "var nameBRG = new Array();\n";
                               while ($data_b=mysqli_fetch_array($sql_b)) {
                              
                                echo '<option value="'.$data_b['id_kategori'].'">'.$data_b['id_kategori'].'-'.$data_b['nama_kategori'].'</option> ';
                                $jsArray_b .= "nameBRG['" . $data_b['id_kategori'] . "'] = {nama_kategori:'" . addslashes($data_b['nama_kategori']) . "'};\n";
                              
                               }
                              ?>
                              
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Kategori</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" id="nama_kategori" readonly="readonly" value="<?php echo $data_a['nama_kategori'];?>"  name="naka" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">ID Merek</label>
                      <div class="col-sm-4">
                        <select id="merek" name="merek" class="form-control" onchange="changeValueMRK(this.value)">
                             <option value="" selected="selected">Pilih Merek</option>
                             <?php 
                               $sql_c=mysqli_query($connect, "SELECT * FROM tbl_merek");
                               $jsArray_c= "var nameMRK = new Array();\n";
                               while ($data_c=mysqli_fetch_array($sql_c)) {
                              
                                echo '<option value="'.$data_c['id_merek'].'">'.$data_c['id_merek'].'-'.$data_c['nama_merek'].'</option> ';
                                $jsArray_c .= "nameMRK['" . $data_c['id_merek'] . "'] = {nama_merek:'" . addslashes($data_c['nama_merek']) . "'};\n";
                              
                               }
                              ?>
                              
                          </select>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Merek</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" id="nama_merek" readonly="readonly" value="<?php echo $data_a['nama_merek'];?>" name="nm" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data_a['nama_barang'];?>" required="required">
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
                      <label class="col-sm-2 col-form-label">Harga Beli (Rp)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data_a['harga_beli'];?>" name="hb" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Tgl. Barang Masuk</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control" name="tgl" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Harga Jual (Rp)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data_a['harga_jual'];?>" name="hrg" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Stok</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data_a['stok'];?>" name="stok" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Satuan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data_a['satuan'];?>" name="satuan" required="required">
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
        <script type="text/javascript" src="./query_java.js"></script>
        <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValueNIM(x){ 
    document.getElementById('nama_supplier').value = prdName[x].nama_supplier;    
    document.getElementById('nama_perusahaan').value = prdName[x].nama_perusahaan;     
    };  
    <?php echo $jsArray_b; ?>  
    function changeValueBRG(y){  
    document.getElementById('nama_kategori').value = nameBRG[y].nama_kategori;
    };  
    <?php echo $jsArray_c; ?>  
    function changeValueMRK(d){  
    document.getElementById('nama_merek').value = nameMRK[d].nama_merek;
    };  
    </script> 
        <!---Container Fluid-->