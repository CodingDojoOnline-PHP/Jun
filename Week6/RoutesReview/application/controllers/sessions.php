<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function new_session()
    {
        echo 'out';
    }
    public function destroy()
    {
        echo 'out';
    }
}
