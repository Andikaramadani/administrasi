<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" class="form-control" id="inputEmail3" placeholder="Inputkan NIP" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="Inputkan NIK" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">NAMA</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
				
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" class="form-control" id="inputPassword3" placeholder="Inputkan Jabatan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="text" name="usia" class="form-control" id="inputPassword3" placeholder="Inputkan Usia" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" class="form-control" id="inputPassword3" placeholder="Inputkan Status" required>
                            </div>
                        </div>
						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Simpan Data Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datapegawai&actions=tampil" class="btn btn-warning btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $Nip=$_POST['nip'];
    $Nik=$_POST['nik'];
	$Nama=$_POST['nama'];
	$Jk=$_POST['jk'];
	$Alamat=$_POST['alamat'];
    $Jabatan=$_POST['jabatan'];
	$Usia=$_POST['usia'];
    $Status=$_POST['status'];
    //buat sql
    $sql="INSERT INTO datapegawai VALUES ('','$Nip','$Nik','$Nama','$Jk','$Alamat','$Jabatan','$Usia','$Status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=datapegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
