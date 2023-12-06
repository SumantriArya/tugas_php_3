<?php

$matakulyah = [
    ["kode"=>"MK02","nama"=>"desain web","dosen"=>"lisa nuraini" ],
    ["kode"=>"MK03","nama"=>"PHP perogramming","dosen"=>"Nasrul" ],
    ["kode"=>"MK04","nama"=>"Database","dosen"=>"edo riansah" ],
];
?>
<table border="1" width="100%">
<thead>
    <tr><th>NO</th><th>kode MK</th><th>nama matakulyah</th>
    <th>dosen</th></tr>
</thead>
<tbody>
<?php
    $nomor =1;
        foreach($matakulyah as $row){
            echo'<td>'.$nomor.'</td>
            <td>'.$row['kode'].'</td>
            <td>'.$row['nama'].'</td>
            <td>'.$row['dosen'].'</td></tr>';
            $nomor++;//tambahkan nomer 1
        }


?>
</tbody>
</table>
</select>
</from>