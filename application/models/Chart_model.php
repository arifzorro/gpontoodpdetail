<?php
/**
 * Created by PhpStorm.
 * User: arfzorro
 * Date: 1/1/2019
 * Time: 8:11 AM
 */

Class Chart_model extends CI_Model{

    public $title;
    public $content;
    public $date;
    public $table="logbook";

    public function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
    }

    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    public function fetch_data(){
        $query=$this->db->query("select * from ".$this->table);
        $data=array();
        $recodrs=$query->result();
        $data['records']=$query->result_array();
        //dd($recodrs);
       //dd($data['records']);
        return  $data['records'];
    }
}