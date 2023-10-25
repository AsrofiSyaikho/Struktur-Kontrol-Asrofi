<?php
$nama = "Asrofi Syaikho"; //Tipe Data String
$umur = 16; //Tipe data INT
$kelamin = "Laki-Laki"; //string
$sekolah = "SMKN 1 Jakarta";    //String
$tgllahir = "27 September 2007"; 
$jurusan = "Rekayasa Perangkat Lunak"; //TIpe data String  
$instagram = "a.rofoi"; //Tipe Data String
$NIS = 202221629;
?>
<h1 align="center" >Selamat Datang di Website biodata Saya!</h1>
<table align="center" border="1" cellpadding="20" cellspacing="0">
<tr bgcolor="aqua">   
        <td colspan="3" align="center"><font size="6">Tabel Biodata </font></td>
        <td align="center"><font size="6">Foto</font></td>
                
</tr>
 
<tr>
        <td>Nama</td>
            <td>:</td>
                <td><?php echo $nama ?></td>
                <td rowspan="8"><img src=./assets/rofi.jpeg width="275" height="300"></td>
</tr>
<tr>
        <td>Umur</td>
            <td>:</td>
                <td><?php echo $umur ?></td>
                
</tr>
<tr>
        <td>Jurusan</td>
            <td>:</td>
                <td><?php echo $jurusan ?></td>
</tr>
<tr>
        <td>Asal Sekolah</td>
            <td>:</td>
                <td><?php echo $sekolah ?></td>
</tr>
<tr>
        <td>Nomor Induk Siswa</td>
            <td>:</td>
                <td><?php echo $NIS ?></td>
</tr>
<tr>
        <td>Jenis Kelamin</td>
            <td>:</td>
                <td><?php echo $kelamin ?></td>
</tr>
<tr>
        <td>Tanggal Lahir</td>
            <td>:</td>
                <td><?php echo $tgllahir ?></td>
</tr>
<tr>
        <td>Instagram</td>
            <td>:</td>
                <td><?php echo $instagram ?></td>
</tr>