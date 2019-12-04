<?php
if(isset($_POST['btnSimpan'])){
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];

    $insert = mysqli_query($koneksi, "INSERT INTO kategori (namakategori,deskripsikategori) VALUES ('$nama_kategori','$deskripsi')");
    if($insert){
        echo "<script>window.location.href='?pages=kategori_produk&add_stat=true'</script>";
    }else{
        echo "<script>window.location.href='?pages=kategori_produk&add_stat=false'</script>";
    }
}
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Input Kategori Produk</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" style="width: 100%; height: 80px;" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-2">
                        <input type="submit" class="btn btn-primary btn-sm" name="btnSimpan" value="Simpan">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>