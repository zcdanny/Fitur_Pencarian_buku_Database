<?php

    $data_buku = [
        [
            "judul" => "IKAN TERBANG",
            "penulis" => "Ramanda",
            "harga" => "Rp 250.000,-",
            "cover" => "ikan.png"
        ],

        [
            "judul" => "Buaya Darat",
            "penulis" => "Danny",
            "harga" => "Rp 950.000,-",
            "cover" => "buaya.png"
        ],

        [
            "judul" => "7 Harimau auu",
            "penulis" => "Dannymau",
            "harga" => "Rp 850.000,-",
            "cover" => "harimau.png"
        ],

        [
            "judul" => "10 Kucing miauu",
            "penulis" => "Danmau",
            "harga" => "Rp 350.000,-",
            "cover" => "kucing.png"
        ],
    ];

    if($_POST){
        $item_cari = $_POST['input_judul'];
        $array_hasil_pencarian = array();

        $i=0;
        foreach($data_buku as $item){
            if(strstr($item['judul'], $item_cari)) {
                $array_hasil_pencarian[$i]['judul'] = $item 
                ['judul'];
                $array_hasil_pencarian[$i]['penulis'] = $item 
                ['penulis'];
                $array_hasil_pencarian[$i]['harga'] = $item 
                ['harga'];
                $array_hasil_pencarian[$i]['cover'] = $item 
                ['cover'];
                $i++;
            }
        }
        
        if (empty($item_cari) || count($array_hasil_pencarian) == 0 ){
            $paramBooks = "";
        } else{
            $paramBooks = json_encode
            ($array_hasil_pencarian);
        }

        header("Location: index.php?books=" . 
        $paramBooks);
    }