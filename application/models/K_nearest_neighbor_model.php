<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_nearest_neighbor_model extends CI_Model {

    public function Termfrequency_pengguna(){

        $ulasan = array();

        $this->db->from('objek_wisata__ulasan');
        $this->db->where('objek_wisata__post_id__objek_wisata__post', $this->uri->slash_segment(3));
        $q = $this->db->get();
		foreach($q->result() as $row){
			$ulasan[] = $row->stemmed__objek_wisata__ulasan;
		}
    
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
           
            $dokumen=array();
            $result=array();
            $term = array();
            $sumArray = array();

            for($x=0;$x<count($ulasan);$x++){
                $dokumen[$x]=array();
                $result[$x]=array();
            }

            foreach($t as $r => $z){
                $term[$z]=0;
            }
            
            foreach($ulasan as $sdx => $valuex){
                $inx = 0;
                foreach($valuex as $x => $y){
                    array_push($dokumen[$sdx], $x);
                    $inx++;
                }
            }
            
            for($d=0;$d<count($dokumen);$d++){
                $term_arr = $term;
                foreach($dokumen[$d] as $key => $value) {
                    if(array_search($value, $t)!=null){
                        $term_arr[$value]=1;
                    }
                }
            
                $result[$d]=$term_arr;
            }


            foreach ($result as $k=>$subArray) {
                foreach ($subArray as $id=>$value) {
                    if(!isset($sumArray[$id]))$sumArray[$id]=0;
                    $sumArray[$id]+=$value;
                }
            }

            // print_r($sumArray);
                   
            
            for($h=0;$h<count($result)-1;$h++){
                $aaaa = count($ulasan);
                error_reporting(0);
                foreach ($sumArray as $k => $v) {
                    foreach ($result[$h] as $key => $value) {
                        if($k==$key){
                            if($value==0){
                                $idf[$h][$key]=0;
                            }else{
                                $tmpIDF= $aaaa/$v;
                                $idf[$h][$key] = round(log10($tmpIDF), 3);
                            }
                        }
                    }
                }
            }

            $dokumen = array();
            for($h=0;$h<count($result)-1;$h++){
                foreach($idf[$h] as $x => $c){
                    $dokumen[$h][$x] = $c * $idf[count($idf)-1][$x]; 
                }
            }

            $skalar = array();
            for($h=0;$h<count($dokumen);$h++){
                $skalars = array_sum($dokumen[$h]);
                $skalar[$h] = round($skalars, 3);
            }
            
            error_reporting(0);
            foreach ($idf as $key => $value) {
                $sumArray = array_sum($value);
                $sumSQRT = sqrt($sumArray);
                $sqrt[] = round($sumSQRT, 3);
            }

            $aggg=0;
            foreach ($sqrt as $key => $value) {
                $a = $skalar[$aggg]/(end($sqrt)*$value);
                // echo "<pre>";
                //echo $value;
                // echo "<br>";
                $hasil[] = round($a, 3);
                arsort($hasil);
                $values = array_keys($hasil);
                // echo "</pre>";
                $aggg++;
            }

            $data = array();
            $id = $this->uri->segment(3);
            $this->db->from('objek_wisata__ulasan');
            $this->db->where('objek_wisata__post_id__objek_wisata__post', $id);
            $q = $this->db->get();
            foreach($q->result() as $row){
                if($row->ulasan_objek_wisata__ulasan == "1"){
                    $ulasana = "POSITIF";
                }elseif($row->ulasan_objek_wisata__ulasan == "0"){
                    $ulasana = "NEGATIF";
                }else{
                    $ulasana = "NETRAL";
                }
                $data[] = $ulasana;
            }
            
            $ini = $values[0];
            foreach ($data as $key => $value) {
                if($data[$ini] == "POSITIF"){
                    $itu = "1";
                }elseif($data[$ini] == "NEGATIF"){
                    $itu = "0";
                }else{
                    $itu = " ";
                }
            }

        // echo "<pre>";
        
        // echo "<strong>DOKUMEN</strong><br>";
        // print_r($ulasan);
        // echo "<hr>";
        // echo "<strong>TERM</strong><br>";
        // print_r($t);
        // echo "<hr>";
        // echo "<strong>Document Frequency</strong><br>";
        // for($d=0;$d<count($result);$d++){
        //     print_r($result[$d]);
           
        //  }    
        // echo "<hr>";
        // echo "<strong>Invers Document Frequency</strong><br>";
        // for($h=0;$h<count($result);$h++){
        //     print_r($idf[$h]);
        // }
        // echo "<hr>";
        // echo "<strong>Skalar</strong><br>";
        // // print_r($dokumen);
        // print_r($skalar);
        // echo "<hr>";
        // echo "<strong>SQRT</strong><br>";
        // print_r($sqrt);
        // echo "<hr>";
        // print_r($data);
        // echo "<hr>";
        // print_r($hasil);
        // echo "<hr>";
        // print_r($values[0]);
        // echo "<hr>";
        
        // echo $itu;
        
        // echo "</pre>";
        return $itu;
        
    }

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
           
            $dokumen=array();
            $result=array();
            $term = array();
            $sumArray = array();

            for($x=0;$x<count($ulasan);$x++){
                $dokumen[$x]=array();
                $result[$x]=array();
            }

            foreach($t as $r => $z){
                $term[$z]=0;
            }
            
            foreach($ulasan as $sdx => $valuex){
                $inx = 0;
                foreach($valuex as $x => $y){
                    array_push($dokumen[$sdx], $x);
                    $inx++;
                }
            }
            
            for($d=0;$d<count($dokumen);$d++){
                $term_arr = $term;
                foreach($dokumen[$d] as $key => $value) {
                    if(array_search($value, $t)!=null){
                        $term_arr[$value]=1;
                    }
                }
            
                $result[$d]=$term_arr;
            }


            foreach ($result as $k=>$subArray) {
                foreach ($subArray as $id=>$value) {
                    if(!isset($sumArray[$id]))$sumArray[$id]=0;
                    $sumArray[$id]+=$value;
                }
            }

            // print_r($sumArray);
                   
            
            for($h=0;$h<count($result)-1;$h++){
                $aaaa = count($ulasan);
                error_reporting(0);
                foreach ($sumArray as $k => $v) {
                    foreach ($result[$h] as $key => $value) {
                        if($k==$key){
                            if($value==0){
                                $idf[$h][$key]=0;
                            }else{
                                $tmpIDF= $aaaa/$v;
                                $idf[$h][$key] = round(log10($tmpIDF), 3);
                            }
                        }
                    }
                }
            }

            $dokumen = array();
            for($h=0;$h<count($result)-1;$h++){
                foreach($idf[$h] as $x => $c){
                    $dokumen[$h][$x] = $c * $idf[count($idf)-1][$x]; 
                }
            }

            $skalar = array();
            for($h=0;$h<count($dokumen);$h++){
                $skalars = array_sum($dokumen[$h]);
                $skalar[$h] = round($skalars, 3);
            }
            
            error_reporting(0);
            foreach ($idf as $key => $value) {
                $sumArray = array_sum($value);
                $sumSQRT = sqrt($sumArray);
                $sqrt[] = round($sumSQRT, 3);
            }

            $aggg=0;
            foreach ($sqrt as $key => $value) {
                $a = $skalar[$aggg]/(end($sqrt)*$value);
                // echo "<pre>";
                // echo $value;
                // echo "<br>";
                $hasil[] = round($a, 3);
                arsort($hasil);
                $values = array_keys($hasil);
                // echo "</pre>";
                $aggg++;
            }

            $data = array();
            $id = $this->uri->segment(3);
            $this->db->from('objek_wisata__ulasan');
            $this->db->where('objek_wisata__post_id__objek_wisata__post', $id);
            $q = $this->db->get();
            foreach($q->result() as $row){
                if($row->ulasan_objek_wisata__ulasan == "1"){
                    $ulasana = "POSITIF";
                }elseif($row->ulasan_objek_wisata__ulasan == "0"){
                    $ulasana = "NEGATIF";
                }else{
                    $ulasana = "NETRAL";
                }
                $data[] = $ulasana;
            }
            
            $ini = $values[0];
            foreach ($data as $key => $value) {
                $itu = $data[$ini];
            }

        // echo "<pre>";
        
        // echo "<strong>DOKUMEN</strong><br>";
        // print_r($ulasan);
        // echo "<hr>";
        // echo "<strong>TERM</strong><br>";
        // print_r($t);
        // echo "<hr>";
        // echo "<strong>Document Frequency</strong><br>";
        // for($d=0;$d<count($result);$d++){
        //     print_r($result[$d]);
           
        //  }    
        // echo "<hr>";
        // echo "<strong>Invers Document Frequency</strong><br>";
        for($h=0;$h<count($result);$h++){
            return $idf[$h]; 
        }
        // echo "<hr>";
        // echo "<strong>Skalar</strong><br>";
        // // print_r($dokumen);
        // print_r($skalar);
        // echo "<hr>";
        // echo "<strong>SQRT</strong><br>";
        // print_r($sqrt);
        // echo "<hr>";
        // print_r($data);
        // echo "<hr>";
        // print_r($hasil);
        // echo "<hr>";
        // print_r($values[0]);
        // echo "<hr>";
        
        // echo $itu;
        
        // echo "</pre>";
        
    }
}