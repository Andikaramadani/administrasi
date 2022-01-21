<?php
$sql = "SELECT * FROM datapegawai";
$query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
?>

<?php
$sql = "SELECT * FROM datapegawai";
$query1 = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Laporan Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                    <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">NAMA PEGAWAI</label>
                            <div class="col-sm-9">
                                <select name="nama" class="form-control" id="inputEmail3">
                                    <?php
                                    while ($data = mysqli_fetch_array($query1)) { ?>
                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <select name="nik" class="form-control" id="inputEmail3">
                                    <?php
                                    while ($data = mysqli_fetch_array($query)) { ?>
                                    <option value="<?= $data['nik'] ?>"><?= $data['nik'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
						 
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">LAPORAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="laporan" class="form-control" id="inputEmail3" placeholder="Inputkan Laporan" required>
                            </div>
                        </div>
						 

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Simpan Laporan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=laporankegiatan&actions=tampil" class="btn btn-warning btn-sm">
                        Kembali Ke Laporan Kegiatan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama=$_POST['nama'];
    $nik=$_POST['nik'];
	$laporan=$_POST['laporan'];
	
    //buat sql
    $sql="INSERT INTO laporan VALUES ('','$nama','$nik','$laporan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=laporankegiatan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
