<?php
    $barang = [
        [
            'namaBarang' => 'Odol',
            'hargaBarang' => 18000,
            'jumlahBarang' => 1,
        ],
        [
            'namaBarang' => 'Sabun Mandi',
            'hargaBarang' => 5000,
            'jumlahBarang' => 3,
        ],
        [
            'namaBarang' => 'Aloe Vera Sheet Mask',
            'hargaBarang' => 15000,
            'jumlahBarang' => 4,
        ],
    ];

    $total = 0;
    foreach ($barang as $value) {
        $total += $value['hargaBarang'] * $value['jumlahBarang'];
        
    }
    echo "HARGA YANG HARUS KAU BAYAR ADALAH Rp." . $total;
?>