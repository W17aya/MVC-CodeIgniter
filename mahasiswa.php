<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Melihat data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $host = "localhost";
    $user = "username  ";
    $pass = "password";
    $db   = "db_mahasiswa";

    $conn= mysql_connect($host, $user, $pass,)
            mysql_select_db($db, $conn ) or die(mysql_error());
            
            $query = "SELECT * FROM MAHASISWA ";
            $result = mysql_query($query);


            echo"<table>
            <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Kelas</th>
            </tr>";

            while($data=mysql_fetch_array
            ($result))
            {
                echo ""
                <tr>
                <td>".$data["NIM"]."</td>
                <td>".$data["NAMA"]."</td>
                <td>".$data["PRODI"]."</td>
                <td>".$data["KELAS"]."</td>
                </tr>";
            }
            echo "  </table>";
            ?>
            
</body>
</html>