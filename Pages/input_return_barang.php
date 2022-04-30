<!-- Container Fluid-->           
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Input Return Barang</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_simpan_return_barang.php" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Barang</label>
                      <div class="col-sm-4">
                       <select id="nim" name="nim" class="form-control"  autofocus="autofocus" onchange="changeValueNIM(this.value)">
                             <option value="" selected="selected">Pilih Barang</option>
                             <?php 
                               $sql=mysqli_query($connect, "SELECT * FROM tbl_barang");
                               $jsArray = "var prdName = new Array();\n";
                               while ($data=mysqli_fetch_array($sql)) {
                              
                                echo '<option value="'.$data['id_barang'].'">'.$data['id_barang'].'-'.$data['nama_barang'].'</option> ';
                                $jsArray .= "prdName['" . $data['id_barang'] . "'] = {nama_supplier:'" . addslashes($data['nama_supplier']) . "', nama_perusahaan:'" . addslashes($data['nama_perusahaan']) . "', nama_kategori:'" . addslashes($data['nama_kategori']) . "', nama_merek:'" . addslashes($data['nama_merek']) . "', stok:'" . addslashes($data['stok']) . "'};\n";
                              
                               }
                              ?>
                          </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Supplier</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" id="nama_supplier" readonly="readonly"  name="supplier" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Perusahaan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama_perusahaan" readonly="readonly"  name="np" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Kategori</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama_kategori" name="kategori" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Merek</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama_merek" name="merek" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Tgl. Return Barang</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control" name="tgl" required="required">
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
                      <label class="col-sm-2 col-form-label">Stok</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="stok" name="stk" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Jml. Return Barang</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="jml" name="jml" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Sisa Barang</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="sisa" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Alasan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alasan" required="required">
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
    document.getElementById('nama_kategori').value = prdName[x].nama_kategori;
    document.getElementById('nama_merek').value = prdName[x].nama_merek; 
    document.getElementById('nama_perusahaan').value = prdName[x].nama_perusahaan;
    document.getElementById('stok').value = prdName[x].stok;        
    };  
    </script> 
    <script type="text/javascript" src="./query_java.js"></script>
                  <script type="text/javascript">
                    $(document).ready(function() {
                    $("#stok, #jml").keyup(function() {
                             var stok  = $("#stok").val();
                             var jml = $("#jml").val();

                             var sisa= parseInt(stok) - parseInt(jml);
                             $("#sisa").val(sisa);
                          });
                        });
                    </script>
        <!---Container Fluid-->