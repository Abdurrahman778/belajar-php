<?php 
    $data = [
        [
            "nama" => "Anton",
            "tahun" => 2008
        ],
        [
            "nama" => "Eko",
            "tahun" => 2001
        ],
        [
            "nama" => "Alex",
            "tahun" => 2004
        ],
        [
            "nama" => "Wawan",
            "tahun" => 2006
        ]
    ];

    foreach ($data as $value) {
        if ($value["tahun"] % 4 == 0) {
            echo $value["nama"] . " Lahir di tahun Kabisat <br>";
        } else {echo $value["nama"] . " BUKAN Lahir di Tahun kabisat <br>";}
    }
?>