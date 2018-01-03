<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tf_idf_model extends CI_Model {

    public function Termfrequency($ulasan){
    
        $t = implode(" ",$ulasan);
        $t = str_word_count($t, 1);
        $t = array_unique($t);
        sort($t);
        
        for($b=0; $b<count($ulasan); $b++){
            $c = $ulasan[$b];
  
            $c = explode(" ", $c);
            $c = array_filter($c); //menghapus element array yang kosong
            $c = array_values($c); //mengatur ulang index array
  
            $ulasan[$b] = $c;
            $ulasan[$b] = array_filter($ulasan[$b]); //menghapus element array yang kosong
            $ulasan[$b] = array_values($ulasan[$b]); //mengatur ulang index array
            $ulasan[$b] = array_count_values($ulasan[$b]);
        }
        
        $freqKata = array();
        
        foreach($t as $key => $value) {
            for($i=0; $i<count($ulasan); $i++){
                $segmenDocx = $ulasan[$i];
                foreach($segmenDocx as $sdx => $valuex){
                    
                    if($value==$sdx){
                        if(!isset($freqKata[$value]))$freqKata[$value]=0;
                        $freqKata[$value] += 1;
                        break;
                    }
                }
            }
        }
        $aaaa = count($ulasan);
        foreach ($freqKata as $key => $value) {
            $tmpIDF= $aaaa/$value;
            $idf[$key] = round(log10($tmpIDF), 3);
        }

        

        echo "<pre>";
        
        echo "<strong>DOKUMEN</strong><br>";
        print_r($ulasan);
        echo "<hr>";
        echo "<strong>TERM</strong><br>";
        print_r($t);
        echo "<hr>";
        echo "<strong>Document Frequency</strong><br>";
        print_r($freqKata);
        echo "<hr>";
        echo "<strong>Invers Document Frequency</strong><br>";
        print_r($idf);
        echo "<hr>";


        echo "</pre>";

        // //Start Table TF
        // echo "<br/>Tabel Term Frequensi<br/>";
        // echo "<table border='1'>";
        // echo "<thead align='center'>
        //         <tr>
        //         <td>Term</td>";
        // for($i=0;$i<count($ulasan);$i++){
        //   echo "<td>Dok. ".($i+1)."</td>";
        // }
        // echo "</tr>
        //       </thead>";
        // echo "<tbody>";
        // foreach($t as $wa => $value) {
        //   $countDF = 0;
        //   global $bin;
        //   $bin = array();
        //   echo "<tr>";
        //   echo "<td>".$value."</td>";
        //   for($i=0;$i<count($ulasan);$i++){
        //     echo "<td>";
        //         $segmenDocx = $ulasan[$i];
        //         global $freqKata;
        //         $cek = false;
                
        //         foreach($segmenDocx as $sdx => $valuex){
        //             if($value==$sdx){
        //                 $freqKata = $valuex;
        //                 break;
        //             } else {
        //                 $freqKata = 0;
        //             }
        //         }

        //         if($freqKata>0){
        //             echo $freqKata;
        //             $countDF++;
        //             $bin[] = $freqKata;
        //         }else{
        //             echo 0;
        //             $bin[] = 0;
        //         }

        //     echo "</td>";
        //   }

        // //   $TF->append(array($wa, $bin, $freqKata));
        // //   $DF->append(array($wa, $countDF));
        //   echo "</tr>";
        //   $countDF=0;
        // }

        // echo "</tbody>";
        // echo "</table>";
        // //End Table TF */

    }

}