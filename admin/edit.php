<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_karyawan WHERE id='$id'";
$edit = $connect->query($sql);
?>
<form action="" method="post">


<?php
while ($row=$edit->fetch_assoc()) {
?>    

    <input type="text" name="id" value="<?php echo $row['id'];?>"><br>
    <input type="text" name="name" value="<?php echo $row['name'];?>"><br>
    <input type="text" name="date" value="<?php echo $row['date'];?>"><br>
    <input type="text" name="input" value="<?php echo $row['input'];?>"><br>
    <input type="text" name="output" value="<?php echo $row['output'];?>"><br>
    <input type="text" name="Information" value="<?php echo $row['Information'];?>"><br>
    <input type="text" name="total" value="<?php echo $row['total'];?>"><br>
    <input type="submit" name="edit">

<?php

}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $input = $_POST['input'];
    $output = $_POST['output'];
    $Information = $_POST['Keterangan'];
    $total = $_POST['total'];

    $update =  $conn->query("UPDATE tb_kas SET id='$id', name='$name', date='$date',
    input='$output', Information='$Information', total='$total'WHERE id='$id'");
    if ($update) {
        header('location:index.php');
    }
}
?>
</form>