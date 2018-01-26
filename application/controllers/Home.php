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
class Home extends Front_Controller
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
	public function index()
	{
		$this->load->model('berita/berita_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		$p 	= $this->input->get('p');
		if($p!=""){
			redirect("news/read/?p=".$p);
		}
		
        
        $ecordheadline = $this->berita_model->limit(5)->find_headline();
        Template::set('ecordheadline', $ecordheadline);

        $recordkeltians = $this->berita_model->limit(1)->find_keltian();
        Template::set('recordkeltians', $recordkeltians);
        
        //pegawai
        $this->load->model('pegawai/pegawai_model');
        $recordpegawai = $this->pegawai_model->limit(4)->find_index();
        Template::set('recordpegawais', $recordpegawai);
        if (isset($recordpegawai) && is_array($recordpegawai) && count($recordpegawai)) :
			foreach ($recordpegawai as $record) :
				$this->db->query('update pegawai set count_view = count_view+1 where id = "'.$record->id.'"');
			endforeach;
		endif;
		// product
		$this->load->model('product/product_model');
		$recordproduct = $this->product_model->find_all();
        Template::set('recordproduct', $recordproduct);
        // end product
        // penelitian terbaru
        $this->load->model('kegiatan/kegiatan_model');
        $recordpenelitian = $this->kegiatan_model->limit(6)->find_all(date("Y"));
        Template::set('recordpenelitian', $recordpenelitian); 
		
        // gallery
        $this->load->model('galleri/galleri_model');
        $this->galleri_model->order_by("count_view","asc");
        $recordvideo = $this->galleri_model->limit(1)->find_by("kategori","2");
        Template::set('recordvideo', $recordvideo);
        $kodevideo = isset($recordvideo->id) ? $recordvideo->id : ""; 
        

        $this->galleri_model->where("id != '".$kodevideo."'");
        $recordgallerys = $this->galleri_model->limit(2)->find_all("2");
        Template::set('recordgallerys', $recordgallerys);
        
        $this->db->query('update galleri set count_view = count_view+1 where id = "'.$kodevideo.'"');
        // end gallery
        Template::set('mainmenu', "");
		Template::render();
	}//end index()
	public function chlang()
	{
		$idlang = $this->uri->segment(3);
		$data = array('lang'		=> $idlang,);
		$this->session->set_userdata($data);
		exit;
	}
	
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
