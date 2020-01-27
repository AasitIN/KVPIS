<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->library('email',$config);
        $this->email->initialize($config); 
    }

    public function index() {
        $subject='Subject';
        $message='<div><b>Hi Xyz,</b><br><em>Click below to activate your account.</em></div>';
        $from=$this->config->item('smtp_user');
        $to='asita.kumar@uneecops.com';
         
        $this->email->set_newline("\r\n");
        $this->email->from($from,"KVS");
        $this->email->reply_to($from,'KVS');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Success! Mail has been sent successfully';
        } else {
            show_error($this->email->print_debugger());
        }
    }
/*
    function send() {
  
        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
    */
}