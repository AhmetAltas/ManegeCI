<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Paarden extends CI_Controller {
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
		$this->load->model('Paarden_model');
		
	}
	
	
	public function index() {


        $data['paarden'] = $this->Paarden_model->get_paarden();

        $this->load->view('header', $data);
        $this->load->view('paarden/paard/index', $data);
        $this->load->view('footer');
        }



	
	/**
	 *
	 * 
	 * @access public
	 * @return void
	 */
	public function add() {

		$data = new stdClass();

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('Paardennaam', 'Paardennaam', 'trim|required|alpha_numeric|is_unique[paarden.Paardennaam]', array('is_unique' => 'Deze naam bestaat al voor een ander paard, noem deze alstublieft anders!'));
		$this->form_validation->set_rules('beschrijving', 'Beschrijving', 'trim|required|is_unique[paarden.beschrijving]');
		
		if ($this->form_validation->run() === false) {

			$this->load->view('header');
			$this->load->view('paarden/admin/add/add', $data);
			$this->load->view('footer');
			
		} else {

			$Paardennaam = $this->input->post('Paardennaam');
			$beschrijving    = $this->input->post('beschrijving');
			
			if ($this->Paarden_model->addPaard($Paardennaam, $beschrijving)) {

				$this->load->view('header');
				$this->load->view('paarden/admin/add/add_success', $data);
				$this->load->view('footer');
				
			} else {

				$data->error = 'Er was een probleem tijdens het aanmaken van jou account, probeer het alstublieft opnieuw.';

				$this->load->view('header');
				$this->load->view('gebruiker/register/register', $data);
				$this->load->view('footer');
				
			}
			
		}
		
	}

        public function view()
        {
        $data['paarden'] = $this->Paarden_model->get_paarden();

        if (empty($data['paarden']))
        {
                show_404();
     
        }
        
		$this->load->view('header');
		$this->load->view('paarden/paard/index', $data);
		$this->load->view('footer');
        }

		
	/**
	 * 
	 * 
	 * @access public
	 * @return void
	 */
    public function edit($paarden_id){
    		
    		if (empty($paarden_id))
            {
                show_404();
            }

            $this->load->helper('form');
            $this->load->library('form_validation');

            //$data['title'] = 'Edit a books item';
            $data['paard_item'] = $this->Paarden_model->get_paard($paarden_id);     

		$this->form_validation->set_rules('Paardennaam', 'Paardennaam', 'required|alpha_numeric');
		$this->form_validation->set_rules('Beschrijving', 'Beschrijving', 'required|alpha_numeric');
		$this->form_validation->set_rules('Springsport', 'Springsport', 'required|alpha_numeric');
		
		if ($this->form_validation->run() === false) {

			$this->load->view('header', $data);
			$this->load->view('paarden/admin/edit/edit', $data);
			$this->load->view('footer');
			
		} else {

			$Paardennaam = $this->input->post('Paardennaam');
			$beschrijving = $this->input->post('Beschrijving');
			$Springsport = $this->input->post('Springsport');
			
			if ($this->Paarden_model->editPaard($Paardennaam, $beschrijving, $paarden_id, $Springsport)) {
				
				
				$paard    = $this->Paarden_model->get_paard($paarden_id);

				

				/*
				$_SESSION['gebruiker_id']      = (int)$gebruiker->id;
				$_SESSION['gebruikersnaam']     = (string)$gebruiker->gebruikersnaam;
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['is_confirmed'] = (bool)$gebruiker->is_confirmed;
				$_SESSION['is_admin']     = (bool)$gebruiker->is_admin;
				*/
				
				$this->load->view('header', $data);
				$this->load->view('paarden/admin/edit/edit_gelukt', $data);
				$this->load->view('footer');
				
			} else {


				$data->error = 'Er is iets fout gegaan, probeer het alstublieft opnieuw!';

				$this->load->view('header');
				$this->load->view('paarden/admin/edit', $data);
				$this->load->view('footer');
				
			}
		


		}
		
	}
	
	/**
	 * 
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			$this->load->view('header');
			$this->load->view('gebruiker/logout/logout_success', $data);
			$this->load->view('footer');
			
		} else {
			redirect('/');	
		}
		
	}
	        public function delete($paarden_id)
    {
 
        if (empty($paarden_id))
        {
            show_404();
        }
                
       $paard_item = $this->Paarden_model->get_paard($paarden_id);
        
        $this->Paarden_model->delete_paard($paarden_id);        
        redirect( base_url() . 'index.php/paarden/view');        
    }
	
}