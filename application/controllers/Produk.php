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
class produk extends Front_Controller
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
		// All news
		$keyword = $this->input->get('keyword');
		$this->load->library('pagination');
		$total = $this->berita_model->count_all_news($keyword);

		$offset = $this->input->get('page');
		$limit = $this->settings_lib->item('site.list_limit');
		$this->pager['query_string_segment'] = "page"; 
		$this->pager['base_url'] 			= current_url()."?";
		$this->pager['total_rows'] 			= $total;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= TRUE;
		$this->pagination->initialize($this->pager);
		
		//$this->surat_izin_model->where('user',$this->current_user->id);
		$recordberitas = $this->berita_model->limit($limit, $offset)->all_news($keyword);
		
        Template::set('recordberitas', $recordberitas);
        
        Template::set('mainmenu', "news");
		Template::render();
	}//end index()
	 
	public function read()
	{
		$this->load->model('product/product_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		$id = $this->uri->segment(3);
		$id_berita = "";
		// berita terbaru
		$this->db->query('update product set count_view = count_view+1 where id = "'.$id.'"');
		$recordberita = $this->product_model->find($id);
        Template::set('recordberita', $recordberita);
        if(!isset($recordberita->id))
        {
        	
        	Template::set_view('home/not_pound404');
        }else{
        	$id_berita = $recordberita->id;
        }
        $recordpopular = $this->product_model->find_other($id_berita);
        Template::set('recordpopular', $recordpopular);
        Template::set('mainmenu', "news");
		Template::render();
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
