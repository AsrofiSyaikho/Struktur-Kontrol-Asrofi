<?php
$nomor = 6212345678; // Type data INT
$alamat = "Jl. Ayonima 123 Kel. 2 RT03/07 Jakarta Raya"; // Type String
$list_buah = array('Semangka', 'Mangga', 'Pepaya', 'Sirsak', 'Durian', 'Jeruk', 'Leci', 'Anggur'); //Array String
$list_harga = array(25000, 30000, 50000); //array int
$status = false; // boolean
$stok = null; // type data null

?>
<h1 align="center" >Selamat Datang di Website Penjualan Saya!</h1>
<table align="center" border="1" cellpadding="20" cellspacing="0">
<tr bgcolor="aqua">   
        <td colspan="1" align="center"><font size="10">Jenis Buah </font></td>
        <td align="center"><font size="10">Harga</font></td>
                
</tr>

<tr>
        <td><?php echo $list_buah[0] ?></td>
           
                <td><?php echo " Rp " .$list_harga[1]. "<br>"; ?></td>
               
</tr>
<tr>
<td><?php echo $list_buah[1] ?></td>
            
                <td><?php echo " Rp " .$list_harga[0]. "<br>"; ?></td>
                
</tr>
<tr>
<td><?php echo $list_buah[2] ?></td>
            
                <td><?php echo " Rp " .$list_harga[0]. "<br>"; ?></td>
</tr>
<tr>
<td><?php echo $list_buah[3] ?></td>
            
                <td><?php echo " Rp " .$list_harga[1]. "<br>"; ?></td>
</tr>
<tr>
<td><?php echo $list_buah[4] ?></td>
            
                <td><?php echo " Rp " .$list_harga[2]. "<br>"; ?></td>
</tr>
<tr>
<td><?php echo $list_buah[5] ?></td>
           
                <td><?php echo " Rp " .$list_harga[0]. "<br>"; ?></td>
</tr>
<tr>
<td><?php echo $list_buah[6] ?></td>
        
                <td><?php echo " Rp " .$list_harga[1]. "<br>"; ?></td>
</tr>
<tr>
<td><?php echo $list_buah[7] ?></td>
          
                <td><?php echo $stok ?? "Stok Kosong" ?></td>
</tr>
<?php 
echo " Alamat Toko : " .$alamat. "<br>"; 
echo " Hubungi Kami : +" .$nomor. "<br>"; 
echo $status ? 'Status Toko : Buka' : 'Status Toko : Tutup';
?>