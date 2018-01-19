<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * Home controller
 *
 * The base controller which displays the homepage of the Bonfire site.
 *
 * @package    Bonfire
 * @subpackage Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Contact extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');

        $this->load->library('installer_lib');
        if (! $this->installer_lib->is_installed()) {
            $ci =& get_instance();
            $ci->hooks->enabled = false;
            redirect('install');
        }
		Template::set('mainmenu', "contact");
        // Make the requested page var available, since
        // we're not extending from a Bonfire controller
        // and it's not done for us.
        $this->requested_page = isset($_SESSION['requested_page']) ? $_SESSION['requested_page'] : null;
	}

	//--------------------------------------------------------------------

	/**
	 * Displays the homepage of the Bonfire app
	 *
	 * @return void
	 */
	public function savepengaduan()
	{
		$message = "";
		$status = false;
		$this->load->model('pesan/pesan_model', null, true);
		if (isset($_POST['save']))
		{
			 
			if ($insert_id = $this->save_pesan())
			{
				//sending mail
				$subjek       = "Pesan Website";
				$Pesan        = $this->input->post('message');
				
				$this->load->library('emailer/emailer');
				$dataemail = array (
					'subject'	=> $subjek,
					'message'	=> "Telah dikirimkan sebuah Pesan dari Email '".$this->input->post("email")."' dengan isi : <br>".$Pesan,
				);
				$success_count = 0;
				$resultmail = FALSE;
				 
				$dataemail['to'] = $this->settings_lib->item('site.email_pengaduan');
				$resultmail = $this->emailer->send($dataemail,false);// di set false supaya langsung mengirimkan email dan tidak masuk antrian dulu
				$status = true;
				$message = "Pesan sudah terkirim.";
			}
			else
			{
				$message = "Pesan gagal terkirim.";
				$status = false;
				Template::set_message("Gagal save pesan". $this->pesan_model->error, 'error');
			}
		}
		$status_array = array( 'message' => $message, 'status' => $status);
		echo json_encode($status_array);
		exit;
	}
	private function save_pesan($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        
        $data = $this->pesan_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        $data['email']		= $this->input->post('email');
        $data['nama']		= $this->input->post('nama');
        $data['pesan']		= $this->input->post('pesan');
        $data['subject']		= $this->input->post('form_subject');
        $data['tlp']		= $this->input->post('form_phone');
		$data['tanggal']	= date("Y-m-d");
		
        $return = false;
        if ($type == 'insert') {
            $id = $this->pesan_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->pesan_model->update($id, $data);
        }

        return $return;
    }
	public function index()
	{
		$this->load->library('users/auth');
		$this->set_current_user();
		Template::render();
	}//end index()
	 
	//--------------------------------------------------------------------

	/**
	 * If the Auth lib is loaded, it will set the current user, since users
	 * will never be needed if the Auth library is not loaded. By not requiring
	 * this to be executed and loaded for every command, we can speed up calls
	 * that don't need users at all, or rely on a different type of auth, like
	 * an API or cronjob.
	 *
	 * Copied from Base_Controller
	 */
	protected function set_current_user()
	{
        if (class_exists('Auth')) {
			// Load our current logged in user for convenience
            if ($this->auth->is_logged_in()) {
				$this->current_user = clone $this->auth->user();

				$this->current_user->user_img = gravatar_link($this->current_user->email, 22, $this->current_user->email, "{$this->current_user->email} Profile");

				// if the user has a language setting then use it
                if (isset($this->current_user->language)) {
					$this->config->set_item('language', $this->current_user->language);
				}
            } else {
				$this->current_user = null;
			}

			// Make the current user available in the views
            if (! class_exists('Template')) {
				$this->load->library('Template');
			}
			Template::set('current_user', $this->current_user);
		}
	}
}
/* end ./application/controllers/home.php */
