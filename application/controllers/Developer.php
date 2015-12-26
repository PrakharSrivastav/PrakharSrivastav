<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller
{

    public function index()
    {
        $this->load->view('developer_home', array('title' => 'Prakhar Srivastav'));
    }

    public function about()
    {
        $this->load->view("about", array('title' => 'About'));
    }

    public function contact()
    {
        $this->load->view("contact", array('title' => 'Contact'));
    }

    public function work()
    {
        $this->load->view("work", array('title' => 'Works'));
    }

    public function work_details($work)
    {
        $this->load->view("works/" . $work, array('title' => $work));
    }

    public function send_message()
    {
        $post = $this->input->post();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', "Name", "trim|required|min_length[3]");
        $this->form_validation->set_rules('email', "Email-id", "trim|required|valid_email");
        $this->form_validation->set_rules('subject', "Subject", "trim|required|callback_check_subject");
        $this->form_validation->set_rules('message_content', "Message", "trim|required");
        $this->form_validation->set_rules('question', "Answer", "trim|required|numeric|callback_answer");

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view("contact", array('title' => 'Contact'));
        }
        else
        {

            $this->load->library('email');
            $this->email->clear();
            $config['protocol'] = 'mail';
            $config['mailtype'] = 'text';
            $config['smtp_host'] = 'p3plcpnl0203.prod.phx3.secureserver.net';
            $config['smtp_crypto'] = 'ssl';
            $config['smtp_user'] = 'hello@prakharsrivastav.com';
            $config['smtp_pass'] = 'Hafslund12';
            $config['smtp_port'] = 465;
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = false;

            $this->email->initialize($config);
            $this->email->subject($this->input->post("subject"));
            $this->email->message($this->input->post("message_content"));
            $this->email->to('hello@prakharsrivastav.com', 'srivprakhar@gmail.com', 'srivprakhar@live.com');
            $this->email->from($this->input->post("email"), $this->input->post("name"));
            $this->email->reply_to($this->input->post("email"), $this->input->post("name"));

            if ($this->email->send())
                $this->load->view("contact", array("success" => true, 'title' => 'Contact'));
            else
            {
                $this->load->view("contact", array('title' => 'Contact'));
            }
        }
    }

    public function answer($answer)
    {
        if ($answer != '4')
        {
            $this->form_validation->set_message('answer', 'You have provided a wrong answer');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function check_subject($subject)
    {
        if (trim($subject) === "What's your purpose" OR trim($subject) === "")
        {
            $this->form_validation->set_message('check_subject', 'Please select the purpose of contact from the dropdown menu');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}
