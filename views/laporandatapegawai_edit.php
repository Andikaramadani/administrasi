<?php
$id=$_GET['id_laporanpegawai'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM laporanpegawai WHERE id_laporanpegawai ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Laporan Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                    <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">NAMA PEGAWAI</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">KEHADIRAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="kehadiran" value="<?=$data['kehadiran']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Kehadiran" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">LAMA BEKERJA</label>
                            <div class="col-sm-9">
                                <input type="text" name="lamabekerja" value="<?=$data['lamabekerja']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Lama Bekerja" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">KEDISIPLINAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="kedisplinan" value="<?=$data['kedisplinan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Kedisiplinan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Laporan Data Pegawai</button>
                            </div>
                        </div>
						
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datapegawai&actions=report" class="btn btn-warning btn-sm">
                        Kembali Ke Laporan Data Pegawai
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
	$kehadiran=$_POST['kehadiran'];
    $lamabekerja=$_POST['lamabekerja'];
    $kedisplinan=$_POST['kedisplinan'];
    //buat sql
    $sql="UPDATE laporanpegawai SET nama='$nama',kehadiran='$kehadiran',lamabekerja='$lamabekerja',
	kedisplinan='$kedisplinan' WHERE id_laporanpegawai ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=laporandatapegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



