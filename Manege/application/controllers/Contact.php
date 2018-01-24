<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Contact extends CI_Controller {
	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('contact_model');
		
	}

	
	
	public function index() {
		
		$this->load->view('header');
        $this->load->view('paarden/contact/contact');
        $this->load->view('footer');
	}
}