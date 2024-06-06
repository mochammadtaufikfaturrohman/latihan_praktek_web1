<?php
include("koneksi.php");

$query = " SELECT * FROM user_web order by nama ASC";
$data = mysqli_query($conn, $query);
?>
<table border="1">
    <tr>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Alamat</th>
    </tr>
<?php
while ($list = $data->fetch_object() ) {
    ?>
    <tr>
    <tr>
        <td><?=$list->nama;?></td>
        <td><?=$list->jenis_kelamin;?></td>
        <td><?=$list->hobi;?></td>
        <td><?=$list->alamat;?></td>
    </tr>
    </tr>
    
  
    <?php  
}
?>
</table>