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
class news extends Front_Controller
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
		$keyword = $this->input->get('key');
		$this->load->library('pagination');
		$this->berita_model->where("category = '2'");
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
		$this->berita_model->where("category = '2'");
		$recordberitas = $this->berita_model->limit($limit, $offset)->all_news($keyword);
        Template::set('recordberitas', $recordberitas);
        
        $this->berita_model->where("category != '1'");
        $recordpopular = $this->berita_model->limit(10)->find_populer("");
        Template::set('recordpopular', $recordpopular);
        
        Template::set('mainmenu', "news");
        Template::set('key', $keyword);
		Template::render();
	}//end index()
	public function pengumuman()
	{
		$this->load->model('berita/berita_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		// All news
		$keyword = $this->input->get('key');
		$this->load->library('pagination');
		//$this->berita_model->where("category != '1'");
		$total = $this->berita_model->count_all("5");

		$offset = $this->input->get('page');
		$limit = $this->settings_lib->item('site.list_limit');
		$this->pager['query_string_segment'] = "page"; 
		$this->pager['base_url'] 			= current_url()."?";
		$this->pager['total_rows'] 			= $total;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= TRUE;
		$this->pagination->initialize($this->pager);

        $recordberitas = $this->berita_model->limit(10)->find_all("5");
        Template::set('recordberitas', $recordberitas);
        
        Template::set('mainmenu', "news");
        Template::set('key', $keyword);
		Template::render();
	}//end index()
	public function event()
	{
		$this->load->model('berita/berita_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		// All news
		$keyword = $this->input->get('key');
		$this->load->library('pagination');
		//$this->berita_model->where("category != '1'");
		$total = $this->berita_model->count_all("3");

		$offset = $this->input->get('page');
		$limit = $this->settings_lib->item('site.list_limit');
		$this->pager['query_string_segment'] = "page"; 
		$this->pager['base_url'] 			= current_url()."?";
		$this->pager['total_rows'] 			= $total;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= TRUE;
		$this->pagination->initialize($this->pager);

        $recordberitas = $this->berita_model->limit(10)->find_all("3");
        Template::set('recordberitas', $recordberitas);
        
        Template::set('mainmenu', "news");
        Template::set('key', $keyword);
		Template::render();
	}//end index()
	public function read()
	{
		$this->load->model('berita/berita_model');
		$this->load->model('berita/foto_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		$id = $this->uri->segment(3);
		$p 	= $this->input->get('p');
		$id_berita = "";
		if($id == "" and $p == "")
        {
        	redirect('news');
        }else{
        	if($p != ""){
        		//$this->db->query('update berita set count_view = count_view+1 where berita.id = "'.$p.'"');
				$recordberita = $this->berita_model->cari_by("berita.id",$p);
				Template::set('recordberita', $recordberita);
        	}else{
        		$this->db->query('update berita set count_view = count_view+1 where seo_title = "'.$id.'"');
				$recordberita = $this->berita_model->cari_by("seo_title",$id);
				Template::set('recordberita', $recordberita);
        	}
        	
        }
        
		// berita terbaru
        if(!isset($recordberita->id))
        {
        	Template::set_view('home/not_pound404');
        }else{
        	$id_berita = $recordberita->id;
        }
        $this->berita_model->where("category != '1'");
        $recordpopular = $this->berita_model->limit(10)->find_populer($id_berita);
        // next berita
        $this->berita_model->where("category != '1'");
        $recordnext = $this->berita_model->limit(1)->find_next($id_berita);
        $nextseo_title = isset($recordnext[0]->seo_title) ? $recordnext[0]->seo_title : "";
        $this->berita_model->where("category != '1'");
        $recordback = $this->berita_model->limit(1)->find_back($id_berita);
		$backseo_title = isset($recordback[0]->seo_title) ? $recordback[0]->seo_title : "";

		// foto
		$datafoto = $this->foto_model->find_byberita($id_berita);
        Template::set('datafoto', $datafoto);

        Template::set('backseo_title', $backseo_title);
        Template::set('nextseo_title', $nextseo_title);
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
