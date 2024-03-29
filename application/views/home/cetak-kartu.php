<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Screening</title>
    <style>
        h2 {
            text-align: center;
            font-size: 30px;
            margin: 0;
        }

        h3 {
            margin: 0;
            margin-bottom: 10px;
            text-align: center;
            font-size: 28;
        }

        table th {
            text-align: left;
        }

        p {
            text-align: justify;
            margin-top: 0;
            margin-bottom: 2px;
        }

        li {
            text-align: justify;
            /* margin-top: 0; */
            margin-top: 8px;
        }

        .btn-success {
            background-color: greenyellow;
        }

        .btn-warning {
            background-color: yellow;
        }

        .btn-danger {
            background-color: red;
        }
    </style>

</head>

<body>
    <h2>Kartu Hasil Screening</h2>
    <h3>SMK Muhammadiyah Karangmojo</h3>

    <!-- <p> Yang bertanda Tangan dibawah ini:</p>
    <table id="tabel">
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th>Ahsan Fauzi, S.Pd</th>
        </tr>
        <tr>
            <th>NBM</th>
            <th>:</th>
            <th></th>
        </tr>
        <tr>
            <th>Jabatan</th>
            <th>:</th>
            <th>Ketua SATGAS COVID-19 SMK Muhammadiyah Karangmojo</th>
        </tr>
    </table> -->

    <!-- <p>Menerangkan Bahwa:</p> -->
    <table id="tabel">
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th><?= ucwords(strtolower($data['nama'])); ?></th>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <th><?= $data['alamat']; ?></th>
        </tr>
        <tr>
            <th>Status</th>
            <th>:</th>
            <th>
                <?php
                $kategori = $this->db->get_where('tbl_kategori', ['id' => $data['kategori']])->row_array();
                echo $kategori['nama'];
                ?>
            </th>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <th>
                <?php
                $kelas = $this->db->get_where('tbl_kelas', ['id' => $data['kelas']])->row_array();
                echo $kelas['kelas'];
                ?>
            </th>
        </tr>
        <tr>
            <th>Total Score</th>
            <th>:</th>
            <th>
                <?php
                $score = $data['p1'] + $data['p2'] + $data['p3'] + $data['p4'] + $data['p5'] + $data['p6'] + $data['p7']+ $data['p8']+ $data['p9']+ $data['p10'];
                // echo $score;
                if ($score <= 79) {
                    echo "<span class='btn btn-danger'>$score</span>";
                } else if ($score < 89) {
                    echo "<span class='btn btn-warning'>$score</span>";
                } else if ($score >= 90) {
                    echo "<span class='btn btn-success'>$score</span>";
                }
                ?>
            </th>
        </tr>
    </table>

    <p>
        Telah melakukan screening pada laman <a href="https://screening.smkmuhkarangmojo.sch.id">https://screening.smkmuhkarangmojo.sch.id</a> pada tanggal <?= tgl2($data['date']); ?> dengan rincian hasil sebagai berikut:
    </p>

    <ol>
        <li>
        Saya memiliki penyakit bawaan atau comorbid yang tidak terkontrol (seperti asma, diabetes, jantung, dll)
        </li>
        <p>
            Jawaban: <?php
                        $p1 = $data['p1'];
                        if ($p1 == 5) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p1</span>";
                        } ?>

        </p>
        <li>
        Saya sedang demam dengan suhu badan diatas 37,3 derajat Celcius
        </li>
        <p>
            Jawaban: <?php
                        $p1 = $data['p2'];
                        if ($p1 == 10) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p1</span>";
                        } ?>
        </p>
        <li>
        Saya sedang batuk
        </li>
        <p>
            Jawaban: <?php
                        $p3 = $data['p3'];
                        if ($data['p3'] == 10) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p3</span>";
                        } ?>
        </p>
        <li>
        Saya sedang sakit tenggorokan / nyeri saat menelan
        </li>
        <p>
            Jawaban: <?php
                        $p4 = $data['p4'];
                        if ($data['p4'] == 10) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p4</span>";
                        } ?>
        </p>
        <li>
        Saya sedang sesak napas / kesulitan berbicara
        </li>
        <p>
            Jawaban: <?php
                        $p5 = $data['p5'];
                        if ($p5 == 10) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p5</span>";
                        } ?>
        </p>
        <li>
        Saya sedang mengalami masalah pada indera penciuman/perasa
        </li>
        <p>
            Jawaban: <?php
                        $p6 = $data['p6'];
                        if ($p6 == 10) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p6</span>";
                        } ?>
        </p>
        <li>
        Dalam kurun waktu 14 hari terakhir saya mengalami sakit tertentu (seperti demam/batuk/sakit tenggorokan/sesak napas/dll)/batuk/sakit tenggorokan/sesak napas/dll)
        </li>
        <p>
            Jawaban: <?php
                        $p7 = $data['p7'];
                        if ($p7 == 10) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p7</span>";
                        } ?>
        </p>
        <li>
        Dalam kurun waktu 14 hari terakhir saya melakukan perjalanan ke luar kota/daerah dengan kategori zona merah
        </li>
        <p>
            Jawaban: <?php
                        $p7 = $data['p8'];
                        if ($p7 == 10) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p7</span>";
                        } ?>
        </p>
        <li>
        Dalam kurun waktu 14 hari terakhir, saya terdapat riwayat kontak (seperti bersentuhan/jabat tangan, mengobrol lama atau dalam satu ruangan) dengan orang yang sudah terkonfirmasi positif terinfeksi virus covid-19
        </li>
        <p>
            Jawaban: <?php
                        $p7 = $data['p9'];
                        if ($p7 == 15) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p7</span>";
                        } ?>
        </p>
        <li>
        Saya bersedia untuk mematuhi dan melaksanakan segala bentuk protokol kesehatan pencegahan covid-19 di lingkungan SMK Muhammadiyah Karangmojo
        </li>
        <p>
            Jawaban: <?php
                        $p7 = $data['p10'];
                        if ($p7 == 10) {
                            echo "<span class='btn btn-success'>Ya</span>";
                        } else {
                            echo "<span class='btn btn-danger'>$p7</span>";
                        } ?>
        </p>
    </ol>
    <p>Dengan kesimpulan sebagai berikut:</p>
    <p>
        <?php
        $waspada = "<i style='text-transform: uppercase;'><b>Maka Anda dinyatakan harus isolasi mandiri. Jangan bepergian, bekerja dan belajar dari rumah saja.</b></i>";
        $aman = "<i style='text-transform: uppercase;'><b>ANDA DINYATAKAN SEHAT, IN SYAA ALLAH. JIKA ANDA JUJUR MENGISI INSTRUMEN INI</b></i>";
        $info = "<i style='text-transform: uppercase;'><b>Info lebih lanjut hubungi SATGAS COVID Sekolah di nomor WA <a href='https://wa.me/6285729598484?text=Assamualaikum,%20saya%20butuh%20informasi%20mengenai%20hasil%20screening%20Saya...'>085729598484 (Pak Ahsan)</a> </b></i>";
        $info2 = "<i style='text-transform: uppercase;'><b>dan <a href='https://wa.me/6288225237456?text=Assamualaikum,%20saya%20butuh%20informasi%20mengenai%20hasil%20screening%20Saya...'>0882-2523-7456 (Bu Dwinana)</a></b></i>";

        if ($score <= 79) {
            echo $waspada . "<br/>" . $info . $info2;
        } else if ($score >= 90) {
            echo $aman . "<br/>" . $info . $info2;
        }
        ?>
    </p>
</body>

</html>