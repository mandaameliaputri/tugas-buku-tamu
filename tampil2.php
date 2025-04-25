<?php include('template/header.php') ?>
<?php include('template/sidebar.php') ?>
<?php include ('connection.php')?>
<div class="content-wrapper">
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Tamu</th>
                  <th>Alamat Tamu</th>
                  <th>No Telp</th>
                  <th>Pesan</th>
                  <th>Tanggal</th>
                </tr>
                </thead>
                <?php
$sql="select * from bukutamu order by tanggal_bertamu desc";
$hasil=mysqli_query ($koneksidb, $sql);
$totaldata= mysqli_num_rows ($hasil);

$no=1;

if($totaldata==0){
    echo "Data Masih Kosong";
}else{
    while($row=mysqli_fetch_assoc($hasil)){ ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['nama_tamu']; ?></td>
        <td><?php echo $row['alamat_tamu']; ?></td>
        <td><?php echo $row['notelp_tamu']; ?></td>
        <td><?php echo $row['pesan_tamu']; ?></td>
        <td><?php echo $row['tanggal_bertamu']; ?></td>
    </tr>

   <?php $no++; }
}
?>
</div>