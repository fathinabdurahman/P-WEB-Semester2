<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_diskon = $_POST['diskon'];
   $_iuran = $_POST['iuran'];
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_diskon;// 3
   $ar_data[]=$_iuran;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO kartu (kode,nama,diskon,iuran) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET kode=?,nama=?,diskon=?,diskon_jual=?,
    iuran=?,min_iuran=?,jenis_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
       $st = $dbh->prepare($sql);
       $is_succes = $st->execute($ar_data);
   

   if($is_succes){
    header('location:index.php');}
    }

?>