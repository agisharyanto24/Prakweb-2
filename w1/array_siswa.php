<?php
// buatlah data nilai siswa dengan array asosiatif
$ns1 = ['id'=>1, 'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>1, 'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns3 = ['id'=>1, 'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
// simpan seluruh data variabel array asosiatif
// ke dalam array indexing
?>
<!-- codingan html -->
<h3 style="text-align: center;">Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach ($ar_nilai as $nilai){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<tr/>';
        $nomor++;
    }
    ?>
</tbody>
</table>    