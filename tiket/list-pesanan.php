<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Tiket | Sultra Port</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

<!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />


</head>

<body>
    <div class="container">
    <header>
        <h3>Daftar Yang Pemesan Tiket

    </header>

    <nav>
       

           <div class="text-center text-md-start"> 
            <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="index.php" role="button">HOME</a>
            <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="form-daftar.php" role="button" name="daftar">TAMBAH BARU</a>
            <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="export.php" role="button">EXPORT DATA</a>
            <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="list-pesanan.php" role="button">REFRESH</a>
        </div>

      
    </nav>

    <br>

    <table id="tiket" class="table table-striped table-bordered" style="width:100%">  
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>E-Mail</th>
            <th>Tujuan Penerbangan</th>
            <th>Asal Penerbangan</th>
            <th>Maskapai</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tiket";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['ID']."</td>";
            echo "<td>".$siswa['NAMA']."</td>";
            echo "<td>".$siswa['EMAIL']."</td>";
            echo "<td>".$siswa['TUJUAN']."</td>";
            echo "<td>".$siswa['ASAL']."</td>";
            echo "<td>".$siswa['MASKAPAI']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?ID=".$siswa['ID']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['ID']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    
    <script>
        $(document).ready(function() {
    $('#tiket').DataTable();
} );
    </script>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</div>
    </body>
</html>