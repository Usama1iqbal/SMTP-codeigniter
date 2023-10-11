<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('email');

        // Load email configuration
        $this->config->load('email', TRUE);
        $email_config = $this->config->item('email');

        // Initialize email with the configuration
        $this->email->initialize($email_config);
    }

    public function sendEmail() {
        // Set email parameters
        $this->email->from('ovextechnologies@outlook.com', 'Shehendi');
        $this->email->to('usamaiqbal117@gmail.com');
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using CodeIgniter library');

        // Send the email
        if ($this->email->send()) {
            echo 'Email sent successfully.';
        } else {
            echo 'Error: ' . $this->email->print_debugger();
        }
    }
}
?>
