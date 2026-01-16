<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Koneksi Ke Database-->
     <?php
     $koneksi = mysqli_connect("localhost", "root", "", "dbsiswa");

     // cek koneksi
     if ($_koneksi) {
        die("Koneksi Gagal: "  . mysqli_connect_error());
     }
     ?>

    <!-- form inputan-->
    <from action="" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label>
        <input type="text" name="kelas" required><br><br>

        <label>Umur:</label>
        <input type="text" name="umur" required><br><br>
        <input type="submit" value="kirim">
    </from>

    <!--get data dari form-->
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")  {
        $nama = $_POST['nama'];
   

       // insert data ke database
       $sql = "INSERT INTO tbsiswa (nama, kelas, umur) VALUE ('$nama', '$kelas', '$Umur')";

         if (mysqli_query($koneksi, $sql)) {
        echo "Data Berhasil Ditambahkan";
        } else  {
            echo "Error: " . $sql . "<br>" . mysql_error($koneksi);
        }  
    }
    ?>
    
</body>
</html>