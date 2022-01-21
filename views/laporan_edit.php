<?php
$id=$_GET['idlaporan'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM laporan WHERE idlaporan ='$id'") or die ("SQL Edit error");
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
                            <label for="no_laci" class="col-sm-3 control-label">NAMA PEGAWAI</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">LAPORAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="laporan" value="<?=$data['laporan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Laporan" required>
                            </div>
                        </div>
				
                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Data Laporan</button>
                            </div>
                        </div>
						
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=laporankegiatan&actions=tampil" class="btn btn-warning btn-sm">
                        Kembali Ke Data Laporan
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
	$laporan=$_POST['laporan'];
	
    //buat sql
    $sql="UPDATE laporan SET nama='$nama',laporan='$laporan' WHERE idlaporan ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=laporankegiatan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



