
<DOCTYPE html>
    <html>
        <head>
        <h2><td>Ibnu Wulida Fisyawal</td> <br></h2>
        <h2><td>12007825</td> <br></h2>
        <h2><td>Rpl X-2</td></h2>
        
        </head>
        <hr>

    <body>
       <form method="POST" netlify>
    
    <div>
        <label><b>Nama : </b></label>
        <input type="text" name="nama" placeholder="Masukkan nama">
    </div>     

    <div>
        <label><b>Nilai : </b></label>
        <input type="number" name="number" placeholder="Masukkan nama">
    </div>

    <div>
    <button type="submit" style="height: 30px; width: 200px">PENCET</button>
    </div>

</form>
    </body>
    </html>



<?php 

$nama=@$_POST['nama'];
$nilai=@$_POST['number'];


if ($nilai >= 70) {
    echo "$nama Dengan Nilai <b> $nilai </b> Dinyatakan";
   echo " <b>Lulus</b>  ";
}else{
    echo "$nama Dengan Nilai <b>     $nilai </b> ";
    echo " <b> Tidak Lulus</b>";
}
?>