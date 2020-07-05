<?php 


class Model 
{
    protected $db;

    public function __construct()
    {
        $this->db = DB::connToDB();
    }

    public function get_data()
    {
       return "Reciving Data...";
    }
}