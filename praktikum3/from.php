<?php
$submit = $_POST["submit"];
$nama_lengkap = $_POST["nama"];
$matkul = $_POST["matkul"];
$nilai_uts = $_POST["NilaiUts"];
$nilai_uas = $_POST["NilaiUas"];
$nilai_tugas = $_POST["NilaiTugas"];

$nilaiUas = 0.35 ;
$nilaiUts = 0.3 ;
$nilaiUas = 0.35 ;


    
    
    if ($nilai_uts >= 0 && $nilai_uts <= 35) {
        $nilai_ut = $nilai_uts * 0.003 ;
} else if ($nilai_uts >= 36 && $nilai_uts <= 55) {
    $nilai_ut = $nilai_uts * 0.003 ;     
} else if ($nilai_uts >= 56 && $nilai_uts <= 69) {
    $nilai_ut = $nilai_uts * 0.003 ;   
} else if ($nilai_uts >= 70 && $nilai_uts <= 84) {
    $nilai_ut = $nilai_uts * 0.003 ;   
} else if ($nilai_uts >= 85 && $nilai_uts <= 100) {
    $nilai_ut = $nilai_uts * 0.003 ;    
} else {
    $nilai_uts = " maaf nilai yang anda masukan salah"; 
}

  $nilai1 = "nilai anda " .$nilai_uts. " mendapatkan " .$nilai_ut ;

  if ($nilai_uas >= 0 && $nilai_uas <= 35) {
    $nilai_ua = $nilai_uas * 0.0035 ;
} else if ($nilai_uas >= 36 && $nilai_uas <= 55) {
    $nilai_ua = $nilai_uas * 0.0035 ;     
} else if ($nilai_uas >= 56 && $nilai_uas <= 69) {
    $nilai_ua = $nilai_uas * 0.0035 ;   
} else if ($nilai_uas >= 70 && $nilai_uas <= 84) {
    $nilai_ua = $nilai_uas * 0.0035 ;   
} else if ($nilai_uas >= 85 && $nilai_uas <= 100) {
    $nilai_ua = $nilai_uas * 0.0035 ;    
} else {
    $nilai_uas = " maaf nilai yang anda masukan salah"; 
}
    $nilai2 = "nilai anda " .$nilai_uas. " mendapatkan " .$nilai_ua ;


  if ($nilai_tugas >= 0 && $nilai_tugas <= 35) {
    $nilai_t = $nilai_tugas * 0.0035 ;
} else if ($nilai_tugas >= 36 && $nilai_tugas <= 55) {
    $nilai_t = $nilai_tugas * 0.0035 ;     
} else if ($nilai_tugas >= 56 && $nilai_tugas <= 69) {
    $nilai_t = $nilai_tugas * 0.0035 ;   
} else if ($nilai_tugas >= 70 && $nilai_tugas <= 84) {
    $nilai_t = $nilai_tugas * 0.0035 ;   
} else if ($nilai_tugas >= 85 && $nilai_tugas <= 100) {
    $nilai_t = $nilai_tugas * 0.0035 ;    
} else {
    $nilai_tugas = " maaf nilai yang anda masukan salah"; 
}
    $nilai3 = "nilai anda " .$nilai_tugas. " mendapatkan " .$nilai_t ;


    $jumlah = $nilai_ut + $nilai_ua + $nilai_t ;


  if ($jumlah >= 0 && $jumlah <= 0.35 ) {
      $grade = "E";
  } elseif ($jumlah >= 0.35 && $jumlah <= 0.55 ) {
      $grade = "D";
  } elseif ($jumlah >= 0.55 && $jumlah <= 0.69) {
    $grade = "C";
  } elseif ($jumlah >= 0.69 && $jumlah <= 0.84) {
    $grade = "B";
  } elseif ($jumlah >= 0.84 && $jumlah <= 1) {
    $grade = "A";
} else {
    $grade = "Anda TIDAK ADA NILAI NYA !!";
  }
// - menggunakan if else 
//    if ($grade == "A") {
//        $predikat = "Sangat Memuaskan";
//    } elseif ( $grade == "B") {
//        $predikat = "Memuaskan";
//    } elseif ($grade == "C") {
    //        $predikat = "Cukup";
    //    } elseif ( $grade == "D") {
        //        $predikat = "Kurang";
        //    } elseif ($grade == "E") {
            //        $predikat = "Sangat Kurang";
//    } else {
//        $predikat = "TIDAK ADA !";
//    }

// - menggunakan switch
    switch ($grade) {
        case $grade == "A" ;
            $predikat = "Sangat Memuaskan";
            break; 
            case $grade == "B" ;
            $predikat = "Memuaskan";
            break; 
            case $grade == "C" ;
            $predikat = "Cukup";
            break; 
            case $grade == "D" ;
            $predikat = "Kurang";
            break; 
            case $grade == "E" ;
            $predikat = "Sangat Kurang";
            break;
            default;
            $predikat = "TIDAK ADA !"; 
        }
        
        // if(!isset($_POST["submit"]) 
        // ) {
        //   header("Location: form.html") ;
        //   exit;
        // }

        function kelulusan($jumlah) {
            if ($jumlah >= 0.55) {
                 return "LULUS!";
            }else {
                return "TIDAK LULUS!";
                
            }
        };

        $kelulusan = kelulusan($jumlah);

        
        
        
    


        echo "<h1>DATA NILAI</h1>" ;
echo "<br>Nilai UTS : " ." 30% "; 
echo "<br>Nilai UAS : " ." 35% "; 
echo "<br>Nilai Tugas / Praktikum : " ." 35% ";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>PROSES : " .$submit;
echo "<br>Nama Lengkap : " .$nama_lengkap;
echo "<br>Mata Kuliah : " .$matkul;
echo "<br>Nilai UTS : " .$nilai1;
echo "<br>Nilai UAS : " .$nilai2;
echo "<br>Nilai Tugas / Praktikum : " .$nilai3;
echo "<br>jumlah Rata - rata : " .$jumlah;
echo "<br>Grade : " .$grade;
echo "<br>Predikat : " .$predikat;
echo "<br>Dinyatakan : " .$kelulusan;


?>