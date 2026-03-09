<?php

$pembeli = [
    ["nama"=>"Pembeli 1","member"=>true,"belanja"=>200000],
    ["nama"=>"Pembeli 2","member"=>true,"belanja"=>570000],
    ["nama"=>"Pembeli 3","member"=>false,"belanja"=>120000],
    ["nama"=>"Pembeli 4","member"=>false,"belanja"=>90000]
];

echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>No</th>
        <th>Pembeli</th>
        <th>Kartu Member</th>
        <th>Total Belanja</th>
        <th>Diskon</th>
        <th>Biaya yang dikeluarkan</th>
      </tr>";

for($i=0;$i<count($pembeli);$i++){

    $diskon = 0;
    $member = $pembeli[$i]['member'];
    $belanja = $pembeli[$i]['belanja'];

    if($member){ 
        if($belanja > 500000){
            $diskon = 50000;
        }elseif($belanja > 100000){
            $diskon = 15000;
        }
    }else{
        if($belanja > 100000){
            $diskon = 5000;
        }
    }

    $totalBayar = $belanja - $diskon;

    echo "<tr>";
    echo "<td>".($i+1)."</td>";
    echo "<td>".$pembeli[$i]['nama']."</td>";
    echo "<td>".($member ? "Memiliki" : "Tidak Memiliki")."</td>";
    echo "<td>".$belanja."</td>";
    echo "<td>".$diskon."</td>";
    echo "<td>".$totalBayar."</td>";
    echo "</tr>";
}

echo "</table>";

?>