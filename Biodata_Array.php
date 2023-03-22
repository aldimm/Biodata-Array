<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="STYLE.css">
</head>
<body>
    <?php 
    $tanggal_lahir = "2003-03-19";
    $AGE = $usia = date_diff(date_create($tanggal_lahir), date_create('today'))->y;
    $data = array(
                'Nama'=>'Muhammad Aldi Maulana',
                'Umur'=> $AGE,
                'JK'=> 'Pria',
                'Agama'=>'Islam',
                'Address'=>'Perum Citra Gading B2/37 Jumputrejo-Sukodono-Sidoarjo',
                'email'=>'aldimaulana1978@gmail.com',
                'call'=>'08113199299',
                'P1'=>'2009-2015 : SDN WAGE 2',
                'P2'=>'2015-2018 : SMPN 2 GEDANGAN',
                'P3'=>'2018-2021 : SMKN 3 SURABAYA',
                'H1'=>'Berenang',
                'H2'=>'Memancing',
                'H3'=>'Futsal',
                'O1'=>'Kepanitiaan Kuliah Tamu (PRODI)',
                'O2'=>'Kepanitiaan Loka Karya (FAKULTAS)',
                'O3'=>'Kepanitiaan Friendship Camp (UKM)',
                'td'=>': ',
    );
    ?>
    <div style="margin-top: 20px;"></div>
        <div class="boxx"><br>
            <div class="elips">
                <h2>BIODATA DIRI</h2>    
            </div><br>
            <img class="lingkaran" src="Foto.png"> <br>
            <table><br>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $data['td'], $data['Nama'] ?></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><?php echo $data['td'], $data['Umur']. " Tahun" ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin </td>
                    <td><?php echo  $data['td'], $data['JK'] ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><?php echo  $data['td'], $data['Agama'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo  $data['td'], $data['Address'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo  $data['td'], $data['email'] ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td><?php echo  $data['td'], $data['call'] ?></td>
                </tr>
            </table>
            <br>

            <h3 style="color: #412700; margin-left: 20px ;" >Riwayat Pendidikan</h3>
            <div class="kotak1">
                <ul>
                    <li><?php echo $data['P1'] ?></li>
                    <li><?php echo $data['P2'] ?></li>
                    <li><?php echo $data['P3'] ?></li>
                </ul>
            </div>
            <h3 style="color: #412700; margin-left: 250px ;" >Hobi</h3>
            <div class="kotak2">
                <ul>
                    <li><?php echo $data['H1'] ?></li>
                    <li><?php echo $data['H2'] ?></li>
                    <li><?php echo $data['H3'] ?></li>
                </ul>
            </div>
            <h3 style="color: #412700; margin-left: 400px ;" >Pengalaman Organisasi</h3>
            <div class="kotak3">
                <ul>
                    <li><?php echo $data['O1'] ?></li>
                    <li><?php echo $data['O2'] ?></li>
                    <li><?php echo $data['O3'] ?></li>
                </ul>
            </div>
        </div>      
</body>
</html>