<?php
include "koneksi.php";
$time=date("d M Y, H:i");
//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);
$update="UPDATE articles SET judul='$title', penulis='$author', leaad='$abstraksi', content='$content', waktu='$time' WHERE articleID ='$ID'";
$hasil = mysqli_query($koneksi, $update);
if ($hasil) {
echo "Artikel berhasil di update<br>";
echo "<a href=\"tampil_articles.php\">List</a>";
} else {
echo "Artikel gagal di update";
}
?>
