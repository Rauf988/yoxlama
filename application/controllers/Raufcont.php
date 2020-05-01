<?php

class Raufcont extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rauf_admin_model');
        date_default_timezone_set('Asia/Baku');
    }

    public function index()
    {
        $this->load->view("admin/login");
    }

    public function regAct()
    {
        $name       = strip_tags($this->input->post('name'));
        $email      = strip_tags($this->input->post('email'));
        $password   = strip_tags($this->input->post('pass'));

            $data=array(
                'name'      =>$name,
                'email'     =>$email,
                'password'  =>md5($password),
            );


        if(!empty($name) && !empty($email) && !empty($password)){

            $this->Rauf_admin_model->insert($data);

            $this->session->set_userdata('accden','Ugurla qeydiyyata alindi');

            redirect('Raufcont/index');



        }else{

            $this->session->set_userdata('accden','Fill the gaps');
            redirect(base_url('Raufcont/index'));

        }


    }

    public function loginAct()
    {
         $aemail = strip_tags($this->input->post('aemail'));
         $apass  = strip_tags($this->input->post('apass'));


        if (!empty($aemail) && !empty($apass)){

            $result = $this->db
                ->where('email',($aemail))
                ->where('password',md5($apass))
                ->get('admin')
                ->row_array();

            if ($result){

                $_SESSION['admin_users'] = TRUE;

                $_SESSION['admin_info'] = $result;

                redirect('Raufcont/dashboard');





            }else{

                $this->session->set_userdata('accden','Email or password is invalid');
                redirect(base_url('Raufcont/index'));

            }


        }else{

            $this->session->set_userdata('accden','Enter an email and password');
            redirect(base_url('Raufcont/index'));

        }
    }

    public function logOut()

    {
        if(isset($_SESSION['admin_info'])){
            $this->session->unset_userdata('admin_info');
            $this->session->unset_userdata('admin_users');

            redirect('cpdash');

        }
    }

    public function dashboard()
    {
        $data['allNews'] = $this->Rauf_admin_model->getAll();
        $this->load->view('admin/admin_dashboard',$data);

    }

    public function admin_profile()
    {
        $this->load->view('admin/admin_profile');
    }

    public function profilUpt()

    {
        $name = strip_tags($this->input->post('name'));


            $data= array('name'=>$name,);

        $data=array(
            'name'      =>$name,


        );



            $this->db->where('id',$_SESSION['admin_info']['id'])->update('admin');

            redirect(base_url('Raufcont/admin_profile'));




    }

    public function news()
    {
        $this->load->view('admin/addNews');
    }

    public function addNewsAct()
    {
        $title  = strip_tags($this->input->post('title'));
        $desc   = strip_tags($this->input->post('desc'));
        $status = strip_tags($this->input->post('status'));
        $tip    = strip_tags($this->input->post('tip'));



        $config['upload_path']    = 'uploads/';
        $config['allowed_types']  = 'jpg|jpeg|png|gif';
        $config['file_name']      = $_FILES['images']['name'];
        $config['max_size'] = '10000';


        $this->upload->initialize($config);

        if(!empty($title) && !empty($desc) && !empty($status) && !empty($tip)  && $this->upload->do_upload('images')){
            $uploadData = $this->upload->data();
            $pictures = $uploadData['file_name'];

            $data=array(
                'title'      =>$title,
                'description'=>$desc,
                'date'       => date('Y-m-d h:i:s'),
                'status'     =>$status,
                'image'      =>$pictures,
                'tip'        =>$tip,
            );


            $this->Rauf_admin_model->news($data);

            $this->session->set_userdata('success', 'ugurla yuklendi');

            redirect("Raufcont/news");

        }else{

            $this->session->set_userdata('accden', 'Yukleme ugursuz');

            redirect("Raufcont/news");

        }
    }

    public function del($id)
    {
        $this->Rauf_admin_model->delete($id);


        $this->session->set_userdata('success','ugurla silindi');

        redirect('Raufcont/dashboard');


    }




    
}


