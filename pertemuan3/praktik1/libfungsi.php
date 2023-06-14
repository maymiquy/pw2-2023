<?php

    function winRate($jumlahMenang, $jumlahKalah) {
        // Menghitung winrate berdasarkan jumlah menang, jumlah kalah dan total match
        $totalMatch = $jumlahMenang + $jumlahKalah;
        $wr = $jumlahMenang / $totalMatch;

        return $wr;
    }

    function cek_tier($winRate) {
        // Menentukan tier berdasarkan fungsi winrate
        if ($winRate >= 0.7) {
            return 'Mythic';
        } elseif ($winRate >= 0.45) {
            return 'Legend';
        } elseif($winRate >= 0.2) {
            return 'Epic Abadi';
        } else {
            return 'LOL';
        }
    }

    function predikat($winRate) {
        // Menetukan predikat berdasarkan fungsi cek tier
        switch (cek_tier($winRate)) {
            case 'Mythic':
                return 'Sangat Memuaskan';
                break;
            case 'Legend':
                return 'Memuaskan';
                break;
            case 'Epic Abadi':
                return 'Mengecewakan';
                break;
            default:
                return 'Sangat Menyedihkan';
                break;
        }
    }

?>