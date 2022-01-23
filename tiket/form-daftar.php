
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pemesanan Tiket</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
        
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="wrapper">
            <div class="inner">
                <div class="image-holder">
                    <img src="images/registration-form-6.jpg" alt="">
                </div>
                <form action="proses-pendaftaran.php" method="POST">
                    <h3>Pesan TIket</h3>
                    <div class="form-row">
                        <div class="form-holder">
                        <input for="NAMA" name="NAMA" type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-holder">
                        <input for="EMAIL" name="EMAIL" type="email" class="form-control" placeholder="E-Mail" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <select for="TUJUAN" name="TUJUAN" required class="form-control">
                                <option value="" disabled selected>Tujuan Perjalanan</option>
                                <option value="RAHA">RAHA</option>
                                <option value="BAU-BAU">BAU-BAU</option>
                                <option value="WANCI">WANCI</option>
                                <option value="WANCI">KENDARI</option>
                            </select>
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>

                        <div class="form-holder">
                            <select for="ASAL" name="ASAL" required class="form-control" >
                                <option value="" disabled selected>Asal Keberangkatan</option>
                                <option value="RAHA">RAHA</option>
                                <option value="BAU-BAU">BAU-BAU</option>
                                <option value="WANCI">WANCI</option>
                                <option value="WANCI">KENDARI</option>
                            </select>
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>
                    </div>
                    
                        <div class="form-row" for="MASKAPAI">
                            <select  name="MASKAPAI"  class="form-kapal" required>
                                <option value="PILIH KAPAL" disabled selected>Pilih Kapal</option>
                                <option value="feri">KAPAL FERI</option>
                                <option value="malam">KAPAL MALAM</option>
                                <option value="cepat">KAPAL CEPAT</option>          
                            </select>
                        </div>

                    <button type="submit"  name="daftar">Pesan                      
                    </button>


                    <button><a href="index.php"><font color=white>Kembali</font></a></button>
                </form>


                
            </div>
        </div>
 
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>



<!--
<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan Tiket Kapal</title>
</head>

<body>
    <header>
        <h1>Form Pemesanan Tiket Kapal</h1>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="NAMA">Nama: </label>
            <input type="text" name="NAMA" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="EMAIL">E-Mail: </label>
             <input type="text" name="EMAIL" placeholder="email lengkap" />
        </p>
        <p>
            <label for="TUJUAN">Tujuan: </label>
            <input type="text" name="TUJUAN" placeholder="Tujuan Perjalanan" />
        </p>
        <p>
           <label for="ASAL">Asal: </label>
            <input type="text" name="ASAL" placeholder="Asal Keberangkatan" />
        </p>
        <p>
             <label for="MASKAPAI">Jenis Kapal: </label>
            <select name="MASKAPAI">
                <option>Kapal Feri</option>
                <option>Kapal Malam</option>
                <option>Kapal Cepat</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html> -->