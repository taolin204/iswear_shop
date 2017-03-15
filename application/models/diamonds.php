<?php

class Diamonds extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    function getAllDiamonds() 
    {
        //$query = $this->db->get("diamond");
        //echo $query->num_rows();
        $query = $this->db->query("select * from diamond");
        return $query->result();
    }


}
