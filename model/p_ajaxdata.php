<?php
include "../conf/koneksi.php";

$id_province = $_POST['id_province'];

if(isset($_POST["id_province"])){

  $sql = "SELECT * FROM city WHERE id_province = '$id_province' ORDER BY city ASC";
  $hasil = $koneksi->query($sql);
  $q = $hasil->num_rows;
  echo '<option value="5">-Select city-</option>';
  if ($q) {
    while ($cetak = $hasil->fetch_assoc()) {
      extract($cetak);
      if ($baris['id_city'] == "$id_city") echo "<option value='$id_city' selected>$city</option>";
      else echo "<option value='$id_city'>$city</option>";
    }
  }else{
    echo '<option value="">City not available</option>';
  }
}
?>
