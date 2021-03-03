







<DOCTYPE html>
    <html>
        <head>
        <h2><td>Ibnu Wulida Fisyawal</td> <br></h2>
        <h2><td>12007825</td> <br></h2>
        <h2><td>Rpl X-2</td></h2>
        
        </head>
        <hr>
          
        <form action="" method="POST">
            <thead>
            <tbody>       
                    <td><b>Masukkan Suhu<b></td>
                    <td>:</td>
                    <td><input type="number" name="suhu" placeholder="Masukkan Suhu"></td>
                <tr>
                    <br><td><b>Pilih Jenis Suhu Ini Dibawah :</b></td></br>
                </tr>
                <tr>
                    <td><b>Dari</b></td>
                    <td>:</td>
                    <td>
                        <select name="dari">
                            <option value=""></option>
                            <option value="reamur">Reamur</option>
                            <option value="fahrenheit">Fahrenheit</option>
                            <option value="celcius">Celcius</option>
                        </select>
                    </td>

                    <td>
                        <td>Ke</td>
                        <td>:</td>
                        <select name="ke">
                            <option value=""></option>
                            <option value="reamur">Reamur</option>
                            <option value="fahrenheit">Fahrenheit</option>
                            <option value="celcius">Celcius</option>
                        </select>
                    </td>
</tr>

<div>
    <button type="submit" style="height: 30px; width: 200px">PENCET</button>
</div>



<?php 

$suhu=@$_POST['suhu'];
$dari=@$_POST['dari'];
$ke=@$_POST['ke'];

if ( $dari == "celcius" && $ke == "reamur" ) {
  $eksekusi= 4/5 * $suhu;
    
}
if ($dari == "celcius" && $ke == "fahrenheit" ) {
    $eksekusi= (9/5) * $suhu +3;    
}

echo "Hasil Dari $suhu  $dari Ke $ke ";
echo " = ";
echo " $eksekusi ";
echo " $ke ";





?>