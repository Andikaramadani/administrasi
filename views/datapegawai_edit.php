<?php
$id=$_GET['idpegawai'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM datapegawai WHERE idpegawai ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                    <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" value="<?=$data['nip']?>" class="form-control" id="inputEmail3" placeholder="Inputkan NIP" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>" class="form-control" id="inputEmail3" placeholder="Inputkan NIK" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">NAMA</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" value="<?=$data['jk']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
				
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" value="<?=$data['jabatan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Jabatan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="text" name="usia" value="<?=$data['usia']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Usia" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" value="<?=$data['status']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Status" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Data Pegawai</button>
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
    $sql="UPDATE datapegawai SET nip='$Nip',nik='$Nik',nama='$Nama',jk='$Jk',alamat='$Alamat',
	jabatan='$Jabatan',usia='$Usia',status='$Status' WHERE idpegawai ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datapegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



