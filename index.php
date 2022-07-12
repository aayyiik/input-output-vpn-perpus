<?php

// $file = "mahasiswa/input/openvpn.log.0";

$file = fopen("mahasiswa/input/openvpn.log.0","r");

while(! feof($file)) {
    $cekIn = null;
    $lineIn = fgets($file);
    if ($lineIn == null){
        break;
    }

    $cekIn = strstr( $lineIn, "BY VIRT:");
    if($cekIn != null){
        // echo $cekIn;
        // echo "<br/>";

            
            $pecah=explode(" ",$cekIn);
            $final_array = array_unique($pecah); 
		    $final_string = implode(" ",$final_array); 
            var_dump($final_string) ;
            // echo "IP Address = ".$pecah[2]."<br/>";

            // if ($pecah[4] != null){
            //     $pecah2 = explode("/",$pecah[4]);
            //     echo "NIM = ".$pecah2[0]."<br/>";

            //     if($pecah2[1] != null){
            //         $pecah3 = explode(":",$pecah2[1]);
            //         echo "VPN = ".$pecah3[0]."<br/>";
            //     }
            // }
            // // echo "Menggunakan = ".$pecah[5]."<br/>";
            // echo "Via = ".$pecah[6]."<br/>";
        
            
    //         $hasil = fopen('mahasiswa/output/filter.log.copy', "r"); 
    //         //$line = 1;
    //         $n = 0;
    //         while(! feof($hasil))
    //         {
              
    //             $cekOut = 1;
    //             $lineOut = fgets($hasil);
    //             if($lineOut == null){
    //                 break;
    //             } 
    //             $lineOut = explode(",",$lineOut);
    //             // var_dump($lineOut);
    //             // echo "size = ".sizeof($lineOut);
    //             if (sizeof($lineOut)>=18){    
    //                 if($lineOut[7] === "in"){
    //                     $viaOut = $lineOut[18];
    //                     if ($pecah === $viaOut){
    //                         //echo "via : ".$via." / ".$lineOut[18];
    //                         //echo "<br>";
    //                         // echo "NIM = ".$pecah2[0]." ,dengan IP : ".$pecah[2]." ,via : ".$pecah[6];
    //                         echo " ,dengan tujuan : ".$lineOut[19];
    //                         //echo "ada";
    //                         echo "<br>";
    //                         break;
    //                     }                               
    //                 }
    //             }

    //     // $pecah = explode(" ", $cekIn);
    // }
    // fclose($hasil);
}

//   echo fgets($file). "<br />";
  }

fclose($file);

// explode pertama per baris
// explode kedua per garis miring
//explode ketiga per titik dua

// if(file_exists($file)){
//     $fopen = fopen($file,'r');

//     $fread = fread($fopen,filesize($file));
//     $parts = explode('via',$fread);
    
//     echo $fread;
//     echo "<br/>";
// }else{
//     echo "File tidak ada";
// }


// fclose($fopen);



// $file_handle = fopen("sample.txt", "rb");

// while (!feof($file) ) {
//     $line_of_text = fgets($file);
//     $parts = explode(':', $line_of_text);
//     echo "$parts[0] $parts[1]";
// }

// fclose($file);
?>