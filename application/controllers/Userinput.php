<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userinput extends CI_Controller {

	public function index()
	{
	    $this->load->model('query');
	    $post=$this->query->getPost();
		$this->load->view('videoout', array('post'=>$post));
	}

	public function create()
	{
		$this->load->view('userinput');
	}

	public function save()
    {
       $this->form_validation->set_rules('title', 'Title', 'required');
       $this->form_validation->set_rules('description', 'Description', 'required');
       $this->form_validation->set_rules('youtube_link', 'Video Link', 'required');

       if ($this->form_validation->run()){
           $data = $this->input->post();
           unset($data['submit']);
           $this->load->model('query');
           if($this->query->addPost($data)){
               $this->session->set_flashdata('msg', 'Post saved successfully !');
           }else{
               $this->session->set_flashdata('msg', 'Post failed to save !');
           }
           return redirect('userinput');

       }else{
           $this->load->view('userinput');
       }
    }
}
