<?php 
    $tempat = [
        [
            'id' => 1,
            'nama' => 'Bukit Bintang',
            'harga_tiket' => 10000,
            'diskon1' =>0.05,
            'diskon2' =>0.10,
            'diskon3' =>0.15
        ],
        [
            'id' => 2,
            'nama' => 'Pantai Sadranan',
            'harga_tiket' => 15000,
            'diskon1' =>0.05,
            'diskon2' =>0.10,
            'diskon3' =>0.15
        ],
        [
            'id' => 3,
            'nama' => 'Candi Borobudur',
            'harga_tiket' => 50000,
            'diskon1' =>0.15,
            'diskon2' =>0.20,
            'diskon3' =>0.35
        ],
        [
            'id' => 4,
            'nama' => 'Candi Prambanan',
            'harga_tiket' => 50000,
            'diskon1' =>0.10,
            'diskon2' =>0.15,
            'diskon3' =>0.25
        ],
        [
            'id' => 5,
            'nama' => 'Keraton Yogyakarta',
            'harga_tiket' => 5000,
            'diskon1' =>0.02,
            'diskon2' =>0.05,
            'diskon3' =>0.10
        ],
        [
            'id' => 6,
            'nama' => 'Malioboro',
            'harga_tiket' => 5000,
            'diskon1' =>0.02,
            'diskon2' =>0.05,
            'diskon3' =>0.10
        ],
        [
            'id' => 7,
            'nama' => 'Pendopo Lawas -> Cafe',
            'harga_tiket' => '-',
        ],
        [
            'id' => 8,
            'nama' => 'Goa Pindul',
            'harga_tiket' => 10000,
            'diskon1' =>0.05,
            'diskon2' =>0.10,
            'diskon3' =>0.15
        ]
    ]
?>
<?php 
    
    $pendopo = [
        [
            'id' => 1,
            'nama' => 'Angin Bakar',
            'harga' => 15000,
            'diskon1' => 0.02,
            'diskon2' => 0.05,
            'diskon3' => 0.07
        ],
        [
            'id' => 2,
            'nama' => 'Gudeg Bakar',
            'harga' => 25000,
            'diskon1' => 0.05,
            'diskon2' => 0.10,
            'diskon3' => 0.15
        ],
        [
            'id' => 3,
            'nama' => 'Bakpia',
            'harga' => 25000,
            'diskon1' => 0.05,
            'diskon2' => 0.10,
            'diskon3' => 0.15
        ],
        [
            'id' => 4,
            'nama' => 'Indomie Panggang',
            'harga' => 10000,
            'diskon1' => 0.02,
            'diskon2' => 0.05,
            'diskon3' => 0.10
        ],
        [
            'id' => 5,
            'nama' => 'Nasi Bakar',
            'harga' => 35000,
            'diskon1' => 0.05,
            'diskon2' => 0.07,
            'diskon3' => 0.10
        ],
        [
            'id' => 6,
            'nama' => 'Pecel Ayam',
            'harga' => 20000,
            'diskon1' => 0.03,
            'diskon2' => 0.05,
            'diskon3' => 0.08
        ],
        [
            'id' => 7,
            'nama' => 'Es Teh Manis',
            'harga' => 6000,
            'diskon1' => 0.01,
            'diskon2' => 0.03,
            'diskon3' => 0.05
        ],
        [
            'id' => 8,
            'nama' => 'Juice',
            'harga' => 10000,
            'diskon1' => 0.02,
            'diskon2' => 0.05,
            'diskon3' => 0.07
        ],
    ]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liburan</title>
    <style type="text/css">
        *{
            margin:0;
            font-family: cursive;
        }
        .box{
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            margin-bottom: 50px;
            width: 550px;
            border: 1px solid #aaa;
            border-radius: 10px;
            box-shadow: 0px 0px 3px 3px rgba(0,0,0,0.2);
            padding: 25px;
        }
        .judul{
            text-align: center;
        }
        .line-judul{
            margin: 10px auto;
            width: 250px;
            text-align: center;
            height: 3px;
            border-radius: 50px;
            background: #000;
        }
        .destinasi, .tujuan{
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            margin-bottom: 30px;
            background-color: #000;
            border-radius: 10px;
            color: white;
            padding: 25px;
        }
        .destinasi tr td{
            padding: 5px;
        }
        .tujuan tr td{
            padding: 5px;
        }
        .pendopo{
            margin-left: auto;
            margin-right: auto;
            background-color: #444;
            border-radius: 10px;
            color: white;
            padding: 25px;
        }
        .pendopo tr td{
            padding: 8px;
        }

        .invoice, .bayar{
            margin-left: auto;
            margin-right: auto;
            padding: 23px;
        }
        .bayar{
            border: 1px inset #000;
            border-radius: 15px;
        }
        .invoice tr th, .invoice tr td{
            padding: 6px;
            border: 1px dashed #000;
        }
        .bayar tr td{
            padding: 5px;
        }
        #reset{
            margin: 20px;
            text-align: center;
        }
        .mulai-ulang{
            color: #000;
            text-decoration: none;
        }
        .mulai-ulang:hover{
            color: #fff;
            background: #000;
            border-radius: 10px;
            padding: 15px;
        }
        small{
            margin-left: 200px;
            font-style:italic;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2 class="judul">Tempat Destinasi Yogyakarta</h2>
        <hr class="line-judul">
        <small>By. Andiny Khoirunnisa</small>
        <table class="destinasi" align="center">
            <thead>
                <th></th>
                <th>Tempat Wisata</th>
                <th>Harga Tiket</th>
            </thead>
            <tbody>
            <?php 
                $no = 1;
                foreach($tempat as $t){
                    echo "<tr>";
                    echo "<td>".$no.".</td>";
                    echo "<td>".$t['nama']."</td>";
                    if ($t['id']==7) {
                        echo "<td>-</td>";
                    }else{
                        echo "<td> Rp. ".number_format($t['harga_tiket'])."</td>";
                    }
                    echo "</tr>";
                    $no++;
                }
            ?>
            <tr>
                <form action="" method="POST">
                <td></td>
                <td>
                    <select name="destinasi" id="">
                        <option value="0">-- Pilih Destinasi --</option>
                        <option value="1">Bukit Bintang</option>
                        <option value="2">Pantai Sadranan</option>
                        <option value="3">Candi Borobudur</option>
                        <option value="4">Candi Prambanan</option>
                        <option value="5">Keraton Yogyakarta</option>
                        <option value="6">Malioboro</option>
                        <option value="7">Pendopo Lawas (cafe)</option>
                        <option value="8">Goa Pindul</option>
                    </select>
                </td>
                <td>
                    <button name="ok" type="submit">OK</button>
                </td>
                </form>
            </tr>
            </tbody>
        </table>
    <?php 
        if (isset($_POST['ok'])) {
            $destinasi = $_POST['destinasi'];
            foreach ($tempat as $t) {
                if ($t['id'] == $destinasi && $t['id'] != 7) {
                    $harga_tiket = $t['harga_tiket'];
                    echo " 
                        <table class='tujuan'>
                            <tr>
                                <td> Destinasi yang dituju </td>
                                <td> : </td>
                                <td><strong>".$t['nama']."</strong></td>
                            </tr>
                            <tr>
                                <td> Harga Tiket </td>
                                <td> : </td>
                                <td><strong> Rp. ".number_format($harga_tiket)." / Tiket</strong></td>
                            </tr>
                            <form action ='' method='post'>
                            <tr>
                                <td> Jumlah Tiket </td>
                                <td> : </td>
                                <td> <input name='jmlh_tiket' type='number' min='1' value='1'> <input name='destinasi' value='$destinasi' hidden> </td>
                            </tr>
                            <tr>
                                <td> <button type='submit' name='ok2'> OK </button>
                            </tr>
                        </table>
                    ";
                }else if($t['id'] == $destinasi && $t['id'] == 7){
                    echo " 
                    <table class='tujuan'>
                        <tr>
                            <td> Destinasi yang dituju </td>
                            <td> : </td>
                            <td><strong>".$t['nama']."</strong></td>
                        </tr>
                        <tr>
                            <td colspan='3'> 
                                <table class='pendopo'> 
                                    <thead>
                                        <th> No </th>
                                        <th> Nama </th>
                                        <th> Harga </th>
                                    </thead>
                                    <tbody>";
                                    $nop = 1;
                                    foreach ($pendopo as $p) {
                                        echo "<tr>";
                                        echo "<td>".$nop."</td>";
                                        echo "<td>".$p['nama']."</td>";
                                        echo "<td>Rp. ".number_format($p['harga'])."</td>";
                                        echo "</tr>";
                                        $nop++;
                                    }
                        echo "</tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>

                    <form action ='' method='POST'>
                        <td> Silahkan Pilih Menu : </td>
                        <td> : </td>
                        <td> 
                        <select name='menu'>";
                            echo " <option value='0'> -- PILIH MENU -- </option>";
                        foreach ($pendopo as $p) {
                            echo "<option value='".$p['id']."'>".$p['nama']."</option>";    
                        }
                    echo "</select> </td>";
                    echo "
                        <tr> 
                            <td> Jumlah yang dipesan </td>
                            <td> : </td>
                            <td> <input name='jmlh_pesanan' type='number' min='1' value='1'> <input name='destinasi' value='$destinasi' hidden> </td>
                        </tr>
                        <tr> 
                            <td> <button type='submit' name='ok2'> OK </button></td>
                        </tr>
                    ";
                }
            }
        }

        if (isset($_POST['ok2'])) {
            $destinasi = $_POST['destinasi'];
            foreach ($tempat as $t) {
                if ($t['id'] == $destinasi && $t['id'] != 7) {
                    $harga_tiket = $t['harga_tiket'];
                    $jmlh_tiket = $_POST['jmlh_tiket'];
                    if ($jmlh_tiket >= 3 && $jmlh_tiket < 5 ) {
                        $diskon = $t['diskon1'];
                    }else if($jmlh_tiket >=5 && $jmlh_tiket < 10){
                        $diskon = $t['diskon2'];
                    }else if($jmlh_tiket >= 10){
                        $diskon =$t['diskon3'];
                    }else{
                        $diskon = 0;
                    }
                    if ($diskon != 0) {
                        $hitung = ($harga_tiket*$jmlh_tiket) * $diskon;
                        $total = ($harga_tiket*$jmlh_tiket) - $hitung;
                    }else{
                        $total = $harga_tiket * $jmlh_tiket;
                    }
                    echo "
                        <table class='invoice'> 
                            <thead> 
                                <th> No </th>
                                <th> Nama </th>
                                <th> Harga Tiket </th>
                                <th> Jumlah Tiket </th>
                                <th> Diskon </th>
                                <th> Total Biaya </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td>".$t['nama']."</td>
                                    <td>Rp. ".number_format($harga_tiket)."</td>
                                    <td>".$jmlh_tiket." Tiket </td>
                                    <td>".($diskon*100)." % </td>
                                    <td>Rp. ".number_format($total)."</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table class='bayar'> 
                            <tr> 
                                <td> Bayar </td>
                                <td> : </td>
                                <td> <input id='bayar' placeholder='Masukan Nominal'> </td>
                                <td> <button id='btn-bayar' onclick='hitung_harga($total)'>Bayar </button>
                            </tr>
                            <tr> 
                                <td> <h2> Kembalian </h2> </td>
                                <td> : </td>
                                <td id='kembalian'> Rp. 0 </td>
                            </tr> 
                        </table>
                        <div id='reset'></div>

                        
                    ";
                }else if($t['id'] == $destinasi && $t['id'] == 7){
                    $menu = $_POST['menu'];
                    foreach ($pendopo as $p) {
                        if ($p['id'] == $menu) {
                            $harga = $p['harga'];
                            $jmlh_pesanan = $_POST['jmlh_pesanan'];
                            if ($jmlh_pesanan >= 3 && $jmlh_pesanan < 5 ) {
                                $diskon = $p['diskon1'];
                            }else if($jmlh_pesanan >=5 && $jmlh_pesanan < 10){
                                $diskon = $p['diskon2'];
                            }else if($jmlh_pesanan >= 10){
                                $diskon =$p['diskon3'];
                            }else{
                                $diskon = 0;
                            }
                            if ($diskon != 0) {
                                $hitung = ($harga*$jmlh_pesanan) * $diskon;
                                $total = ($harga*$jmlh_pesanan) - $hitung;
                            }else{
                                $total = $harga * $jmlh_pesanan;
                            }
                            echo "
                                <table class='invoice'> 
                                    <thead> 
                                        <th> No </th>
                                        <th> Nama </th>
                                        <th> Harga </th>
                                        <th> Jumlah Pesanan </th>
                                        <th> Diskon </th>
                                        <th> Total Biaya </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td>".$p['nama']."</td>
                                            <td>Rp. ".number_format($harga)."</td>
                                            <td>".$jmlh_pesanan." Buah </td>
                                            <td>".($diskon * 100)." %</td>
                                            <td>Rp. ".number_format($total)."</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <table class='bayar'> 
                                    <tr> 
                                        <td> Bayar </td>
                                        <td> : </td>
                                        <td> <input id='bayar' placeholder='Masukan Nominal'> </td>
                                        <td> <button id='btn-bayar' onclick='hitung_harga($total)'>Bayar </button>
                                    </tr>
                                    <tr> 
                                        <td> <h2> Kembalian </h2> </td>
                                        <td> : </td>
                                        <td id='kembalian'> Rp. 0 </td>
                                    </tr> 
                                </table>
                                <div id='reset'></div>

                                
                            ";
                        }
                    }
                }
            }
        }
    ?>
    </div>


    <script>
        function hitung_harga(total){
            var input = document.getElementById('bayar').value;
            var akhir = (parseInt(input) - parseInt(total)) ;
            console.log(akhir);
            document.getElementById("kembalian").innerHTML='<h3> Rp. '+akhir+'</h3>';
            document.getElementById("reset").innerHTML='<a href="liburan.php" class="mulai-ulang"> Mulai Ulang </a>';
        }
    </script>
</body>
</html>