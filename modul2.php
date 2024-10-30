<?php
    
    $buah_harga = [
        "apel" => 1,    // 1 dolar
        "pisang" => 0.5, // 0.5 dolar
        "mangga" => 1.5 // 1.5 dolar
    ];

    $input_buah = readline("Masukkan nama buah: ");
    
    function cekbuah($input_buah, $buah_harga){
        foreach($buah_harga as $buah => $harga){
            if($input_buah == $buah){
                return true;
            }
        }
        return false;
    }

    $buahtersedia = cekbuah($input_buah, $buah_harga);

    if($buahtersedia === true) {
        $input_jumlah_buah = (int)readline("Jumlah buah: ");
        $total_harga_dollar = $input_jumlah_buah * $buah_harga[$input_buah];   

        
        $conversion_rate = 15000; 
        $total_harga_rupiah = $total_harga_dollar * $conversion_rate; 

        $formatted_harga_rupiah = number_format($total_harga_rupiah, 0, ',', '.');

        echo "Total harga: Rp $formatted_harga_rupiah\n";
    } else {
        echo "Buah tidak tersedia\n";
    }
