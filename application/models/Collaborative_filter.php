<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collaborative_filter extends CI_Model {

    
    public function similarityDistance($preferences, $person1, $person2)
    {
        $similar = array();
        $sum = 0;
    
        foreach($preferences[$person1] as $key=>$value)
        {
            if(array_key_exists($key, $preferences[$person2]))
                $similar[$key] = 1;
        }
        
        if(count($similar) == 0)
            return 0;
        
        foreach($preferences[$person1] as $key=>$value)
        {
            if(array_key_exists($key, $preferences[$person2]))
                $sum = $sum + pow($value - $preferences[$person2][$key], 2);
        }
        
        return  1/(1 + sqrt($sum));     
    }
    
    
    public function matchItems($preferences, $person)
    {
        $score = array();
        
            foreach($preferences as $otherPerson=>$values)
            {
                if($otherPerson !== $person)
                {
                    $sim = $this->similarityDistance($preferences, $person, $otherPerson);
                    
                    if($sim > 0)
                        $score[$otherPerson] = $sim;
                }
            }
        
        array_multisort($score, SORT_DESC);
        return $score;
    
    }
    
    
    public function transformPreferences($preferences)
    {
        $result = array();
        
        foreach($preferences as $otherPerson => $values)
        {
            foreach($values as $key => $value)
            {
                $result[$key][$otherPerson] = $value;
            }
        }
        
        return $result;
    }
    
    
    public function getRecommendations($preferences, $person)
    {
        $total = array();
        $simSums = array();
        $ranks = array();
        $sim = 0;
        
        foreach($preferences as $otherPerson=>$values)
        {
            if($otherPerson != $person)
            {
                $sim = $this->similarityDistance($preferences, $person, $otherPerson);
            }
            
            if($sim > 0)
            {
                foreach($preferences[$otherPerson] as $key=>$value)
                {
                    if(!array_key_exists($key, $preferences[$person]))
                    {
                        if(!array_key_exists($key, $total)) {
                            $total[$key] = 0;
                        }
                        $total[$key] += $preferences[$otherPerson][$key] * $sim;
                        
                        if(!array_key_exists($key, $simSums)) {
                            $simSums[$key] = 0;
                        }
                        $simSums[$key] += $sim;
                    }
                }
                
            }
        }

            foreach($total as $key=>$value)
            {
                $ranks[] = preg_replace('/\D/', '', $key);
                //echo $ranks[$key] = $value / $simSums[$key];
                //array_multisort($ranks, SORT_DESC); 
            }

            //echo "'".implode(" ",$ranks)."',";

            $this->db->from('objek_wisata__post');
            $this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
            $this->db->where_in('id__objek_wisata__post', $ranks);
            $q = $this->db->get()->result();

            // foreach($q->result() as $row){
            //     $data[] = $row->thumbnail__objek_wisata__post;
            // }
           
    return $q;
        
    }
}