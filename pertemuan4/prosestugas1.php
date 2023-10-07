<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <h2>Hasil Input Biodata</h2>
    <?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $bln = $_POST['bln'];
    $thn = $_POST['thn'];
    $alamat = $_POST['alamat'];
    ?>
    <table border = "1" cellpadding = "5" cellspacing = "0">
        <tr>
            <td>NIM</td>
            <td>
                <?php
                echo $nim;
                ?>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <?php
                echo $nama;
                ?>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <?php
                echo $jurusan;
                ?>
            </td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>
                <?php
                echo "$tempat, $tgl $bln $thn";
                ?>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <?php
                echo $alamat;
                ?>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <?php
                if (isset($_POST['hobby1'])){
                    echo "- " . $_POST['hobby1'] . "<br>";
                }
                if (isset($_POST['hobby2'])){
                    echo "- " . $_POST['hobby2'] . "<br>";
                }
                if (isset($_POST['hobby3'])){
                    echo "- " . $_POST['hobby3'] . "<br>";
                }
                if (isset($_POST['hobby4'])){
                    echo "- " . $_POST['hobby4'] . "<br>";
                }
                if (isset($_POST['hobby5'])){
                    echo "- " . $_POST['hobby5'] . "<br>";
                }
                if (isset($_POST['hobby6'])){
                    echo "- " . $_POST['hobby6'] . "<br>";
                }
                if (isset($_POST['hobby7'])){
                    echo "- " . $_POST['hobby7'] . "<br>";
                }
                ?>
            </td>
        </tr>
        </table>
</body>
</html>