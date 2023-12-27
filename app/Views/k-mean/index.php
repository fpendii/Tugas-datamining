<?php
// Menyimpan data ke dalam variable Array
$jumlahdata = count($dataset);
$i = 0;
foreach ($dataset as $rowDataset) {
    $id[$i] = $rowDataset['Data'];
    $lat[$i] = $rowDataset['Latitude'];
    $lng[$i] = $rowDataset['Longitude'];
    $i++;
}

// Menentukan nilai k dan batas maksimal iterasi
$niali_K = 3;
$maxIterasi = 1000;

// Inisialisasi Centroid
// acak indeks dari 0 sampai 
$min = 0;
$max = $jumlahdata - 1;
for($K = 1; $K <= $niali_K;$K++){
    if($K == 1){
        $acak[$K] = rand($min, $max);
        $pusatLat[$K] = $lat[$acak[$K]];
        $pusatLang[$K] = $lng[$acak[$K]];
    }
}
?>

<h1>Aplikasi Penentuan Lokasi Posko Covid-19</h1>
<div class="container-xxl">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataset as $rowDataset) : ?>
                        <tr>
                            <td><?php echo $rowDataset['Data'] ?></td>
                            <td><?php echo $rowDataset['Latitude'] ?></td>
                            <td><?php echo $rowDataset['Longitude'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col">
        </div>
    </div>
</div>