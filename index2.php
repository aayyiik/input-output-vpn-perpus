<?php

// $file = "mahasiswa/input/openvpn.log.0";

$file = fopen("mahasiswa/input/openvpn.log.0","r");

while(! feof($file)){
    $cekIn = null;
    $lineIn = fgets($file);
    if ($lineIn == null){
        break;
    }

    $cekIn = strstr( $lineIn, "BY VIRT:");
    if($cekIn != null){
        // echo $cekIn;
        // echo "<br/>";

            
            $pecah = explode(" ",$cekIn);
            $viaIn = trim($pecah[6]);
            

            $pecah2 = explode("/",$pecah[4]);
            $nim = $pecah2[0];

            $pecah3 = explode(":",$pecah2[1]);
            $ipSource = $pecah3[0];


            // echo "NIM : ".$nim."<br/>";
            // echo "IP  : ".$ipSource."<br/>";
            // echo "Via : ".$viaIn."<br/>";

            echo "<br/>";


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
            // echo "<br/>";
        
            
            $hasil = fopen('mahasiswa/output/filter.log.copy', "r"); 
            //$line = 1;
            $n = 0;
            while(! feof($hasil))
            {
              
                $cekOut = 1;
                $lineOut = fgets($hasil);
                if($lineOut == null){
                    break;
                } 
                $lineOut = explode(",",$lineOut);
                // var_dump($lineOut);
                // echo "size = ".sizeof($lineOut);

                if (sizeof($lineOut)>=18){   
                    if($lineOut[7] === "in"){
                        $viaOut = $lineOut[18];
                        if ($viaIn === $viaOut){
                            //echo "via : ".$via." / ".$lineOut[18];
                            //echo "<br>";
                            echo " NIM           : ".$nim." ||";
                            echo " IP            : ".$ipSource." ||";
                            echo " Via           : ".$viaIn." ||";
                            echo " Destination   : ".$lineOut[19]." ||";
                            //echo "ada";
                            echo "<br>";
                            break;
                        }                               
                    }
                }

        // $pecah = explode(" ", $cekIn);
    }
    fclose($hasil);
}

  }

fclose($file);


?>


