<?php

class Userhome extends CI_Controller{

    public function index()
    {
        $data['single_news'] =$this->db->order_by('id','DESC')->get('news')->row_array();
        $data['all_news'] =$this->db->order_by('id','DESC')->limit(5)->get('news')->result_array();
        $data['all_world'] =$this->db->where('status','Dunya')->order_by('id','DESC')->limit(6)->get('news')->result_array();
        $data['all_popular'] =$this->db->order_by('id','DESC')->limit(3)->get('news')->result_array();
        $data['all_header'] =$this->db->where('status','Siyasət')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headersosial'] =$this->db->where('status','Sosial')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headeriqti'] =$this->db->where('status','Iqtisadiyyat')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headeridman'] =$this->db->where('status','Idman')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headerdunya'] =$this->db->where('status','Dünya')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_adisiyaset'] =$this->db->where('status','Siyasət')->where('tip','adi')->order_by('id','DESC')->limit(3)->get('news')->result_array();
        $data['all_esassiyaset'] =$this->db->where('status','Siyasət')->where('tip','esas')->order_by('id','DESC')->get('news')->row_array();
        $data['all_esassosial'] =$this->db->where('status','Sosial')->where('tip','esas')->order_by('id','DESC')->get('news')->row_array();
        $data['all_adisosial'] =$this->db->where('status','Sosial')->where('tip','adi')->order_by('id','DESC')->limit(3)->get('news')->result_array();
        $data['all_esasiqtisadiyyat'] =$this->db->where('status','Iqtisadiyyat')->where('tip','esas')->order_by('id','DESC')->get('news')->row_array();
        $data['all_adiiqtisadiyyat'] =$this->db->where('status','Iqtisadiyyat')->where('tip','adi')->order_by('id','DESC')->limit(3)->get('news')->result_array();
        $data['all_esasworld'] =$this->db->where('status','Dunya')->where('tip','esas')->order_by('id','DESC')->get('news')->row_array();


        $this->load->view('front/index',  $data);
    }

    public function blog($id)
    {
        $data['all_header'] =$this->db->where('status','Siyasət')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headersosial'] =$this->db->where('status','Sosial')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headeriqti'] =$this->db->where('status','Iqtisadiyyat')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headeridman'] =$this->db->where('status','Idman')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headerdunya'] =$this->db->where('status','Dünya')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_popular']=$this->db->order_by('id','DESC')->limit(3)->get('news')->result_array();
        $data['all_news'] =$this->db->order_by('id','DESC')->limit(3)->get('news')->result_array();
        $data['all_world'] =$this->db->where('status','Dunya')->order_by('id','DESC')->limit(6)->get('news')->result_array();
        $data['read'] = $this->db->where('id',$id)->get('news')->row_array();
        $this->load->view('front/blog_detail',$data);
    }

    public function ads()
    {
        $data['all_header'] =$this->db->where('status','Siyasət')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headersosial'] =$this->db->where('status','Sosial')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headeriqti'] =$this->db->where('status','Iqtisadiyyat')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headeridman'] =$this->db->where('status','Idman')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headerdunya'] =$this->db->where('status','Dünya')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_popular'] =$this->db->order_by('id','DESC')->limit(3)->get('news')->result_array();
        $this->load->view('front/contact',$data);
    }

    public function list($status)
    {

        $data['all_header'] =$this->db->where('status','Siyasət')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headersosial'] =$this->db->where('status','Sosial')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headeriqti'] =$this->db->where('status','Iqtisadiyyat')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headeridman'] =$this->db->where('status','Idman')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_headerdunya'] =$this->db->where('status','Dünya')->order_by('id','DESC')->limit(4)->get('news')->result_array();
        $data['all_popular'] =$this->db->order_by('id','DESC')->limit(3)->get('news')->result_array();
        $data['all_news'] =$this->db->order_by('id','DESC')->limit(5)->get('news')->result_array();
        if ('Siyas%C9%99t'== $status ) {
            $data['searchsiyaset'] = $this->db->order_by('id', 'DESC')->where('status', 'Siyasət')->limit(6)->get('news')->result_array();
            $data['searchsiyasetesas'] = $this->db->order_by('id', 'DESC')->where('status', 'Siyasət')->where('tip', 'esas')->limit(4)->get('news')->result_array();
            $data['search'] = $this->db->where('status', 'Siyasət')->get('news')->row_array();
        }elseif ('%C4%B0qtisadiyyat'== $status){
            $data['searchsiyaset'] = $this->db->order_by('id', 'DESC')->where('status', 'Iqtisadiyyat')->limit(6)->get('news')->result_array();
            $data['searchsiyasetesas'] = $this->db->order_by('id', 'DESC')->where('status', 'Iqtisadiyyat')->where('tip', 'esas')->limit(4)->get('news')->result_array();
            $data['search'] = $this->db->where('status', 'Iqtisadiyyat')->get('news')->row_array();
        }elseif ('Sosial'== $status){
            $data['searchsiyaset'] = $this->db->order_by('id', 'DESC')->where('status', 'Sosial')->limit(6)->get('news')->result_array();
            $data['searchsiyasetesas'] = $this->db->order_by('id', 'DESC')->where('status', 'Sosial')->where('tip', 'esas')->limit(4)->get('news')->result_array();
            $data['search'] = $this->db->where('status', 'Sosial')->get('news')->row_array();
        }elseif ('D%C3%BCnya'== $status){
            $data['searchsiyaset'] = $this->db->order_by('id', 'DESC')->where('status', 'Dünya')->limit(6)->get('news')->result_array();
            $data['searchsiyaset'] = $this->db->order_by('id', 'DESC')->where('status', 'Dünya')->where('tip', 'esas')->limit(4)->get('news')->result_array();
            $data['search'] = $this->db->where('status', 'Dünya')->get('news')->row_array();
        };
        $data['all_esassiyaset'] =$this->db->where('status','Siyasət')->where('tip','esas')->order_by('id','DESC')->get('news')->row_array();
        $data['all_esassosial'] =$this->db->where('status','Sosial')->where('tip','esas')->order_by('id','DESC')->get('news')->row_array();
        $data['all_esasiqtisadiyyat'] =$this->db->where('status','Iqtisadiyyat')->where('tip','esas')->order_by('id','DESC')->get('news')->row_array();
        $data['all_esasworld'] =$this->db->where('status','Dunya')->where('tip','esas')->order_by('id','DESC')->get('news')->row_array();
        $this->load->view('front/category',$data);
    }








}