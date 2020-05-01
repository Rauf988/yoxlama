<?php

class Rauf_admin_model extends CI_Model{

    public function insert($data)
    {
        $this->db->insert('admin',$data);
    }

    public function getAll()
    {
       return $this->db->order_by('id','DESC')->get('news')->result_array();
    }

    public function regAct($data)
    {
        $this->db->insert('users',$data);
        return $this->db->insert_id();
    }

    public function news($data)
    {
        $this->db->insert('news',$data);
    }

    public function delete($id)
    {
        $this->db->where('id',$id)->delete('news');
    }

    public function profileupt($id)
    {
        $this->db->where('id',$id)->get("admin")->update();
    }


    public function lang()
    {
        $this->db->select('tbl_order.*,tbl_user.fullname');
        $this->db->from('news_language');
        $this->db->join('news', 'news_id = language_id','left');
        $query = $this->db->get();

        return $query->result();
    }

}