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
class pages extends Front_Controller
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
		$id = 'tentang-kami';
		$p 	= $this->input->get('p');
		$id_berita = "";
		 
		$this->db->query('update berita set count_view = count_view+1 where seo_title = "'.$id.'"');
		$recordberita = $this->berita_model->cari_by("seo_title",$id);
		Template::set('recordberita', $recordberita);
		// berita terbaru
		 
        Template::set('mainmenu', "about");
		Template::render();
	} 
	public function view()
	{

		$this->load->model('berita/berita_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		$id = $this->uri->segment(3);
		$id_berita = "";
		// berita terbaru
		$this->db->query('update berita set count_view = count_view+1 where id = "'.$id.'"');
		$recordberita = $this->berita_model->cari_by("berita.id",$id);
        Template::set('recordberita', $recordberita);
        if(!isset($recordberita->id))
        {
        	Template::set_view('home/not_pound404');
        }else{
        	$id_berita = $recordberita->id;
        }
        $this->berita_model->where("category = '1'");
        $recordpopular = $this->berita_model->find_halamanlain($id);
        Template::set('recordpopular', $recordpopular);
        
        Template::set('mainmenu', "about");
		Template::render();
	}
	public function researchgroup()
	{
		$this->load->model('berita/berita_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		$id = $this->uri->segment(3);
		$id_berita = "";
		// berita terbaru
		$this->db->query('update berita set count_view = count_view+1 where id = "'.$id.'"');
		$recordberita = $this->berita_model->cari_by("berita.id",$id);
        Template::set('recordberita', $recordberita);
        if(!isset($recordberita->id))
        {
        	Template::set_view('home/not_pound404');
        }else{
        	$id_berita = $recordberita->id;
        }
        $this->berita_model->where("category = '1'");
        $recordpopular = $this->berita_model->find_halamanlain($id);
        Template::set('recordpopular', $recordpopular);
        Template::set_view("pages/view");
        Template::set('mainmenu', "rg");
		Template::render();
	}
	public function penelitian()
	{
		$this->load->model('kegiatan/kegiatan_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		$years = $this->kegiatan_model->getyears();
		Template::set('years', $years);
		//$this->surat_izin_model->where('user',$this->current_user->id);
		$recordpenelitians = $this->kegiatan_model->find_all();
		
        Template::set('recordpenelitians', $recordpenelitians);
        
        Template::set('mainmenu', "penelitian");
		Template::render();
	}//end index()
	public function laporan()
	{
		$this->load->model('informasi_publik/informasi_publik_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		$records = $this->informasi_publik_model->find_all();
        Template::set('records', $records);
        
        Template::set('mainmenu', "about");
        Template::set('pages', "laporan");
		Template::render();
	}
	public function contact()
	{
		$this->load->library('users/auth');
		$this->set_current_user();
		
        Template::set('mainmenu', "about");
        Template::set('pages', "contact");
		Template::render();
	}
	public function keltian()
	{
		$this->load->model('berita/berita_model');
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
        $recordkeltians = $this->berita_model->find_keltian();
        Template::set('recordkeltians', $recordkeltians);

        Template::set('id_berita', $id_berita);
        Template::set('mainmenu', "Pages");
		Template::render();
	}
	public function about()
	{
		$this->load->model('berita/berita_model');
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
        $recordkeltians = $this->berita_model->find_keltian();
        Template::set('recordkeltians', $recordkeltians);

        Template::set('id_berita', $id_berita);
        Template::set('mainmenu', "about");
        Template::set('pages', $id);
		Template::render();
	}
	public function media()
	{
		$this->load->model('berita/berita_model');
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
        $recordkeltians = $this->berita_model->find_keltian();
        Template::set('recordkeltians', $recordkeltians);

        Template::set('id_berita', $id_berita);
        Template::set('mainmenu', "about");
        Template::set('pages', $id);
		Template::render();
	}
	public function gallery()
	{
		$this->load->library('users/auth');
		$this->set_current_user();
		 // gallery
        $this->load->model('galleri/galleri_model');
        $this->galleri_model->order_by("count_view","asc");
        $recordgallerys = $this->galleri_model->find_all("2");
        Template::set('recordgallerys', $recordgallerys);

        Template::set('mainmenu', "news");
		Template::render();
	}
	public function fasilitas()
	{
		$this->load->model('berita/berita_model');
		$this->load->library('users/auth');
		$this->set_current_user();
		$id = 'fasilitas';
		$p 	= $this->input->get('p');
		$id_berita = "";
		 
		$this->db->query('update berita set count_view = count_view+1 where seo_title = "'.$id.'"');
		$recordberita = $this->berita_model->cari_by("seo_title",$id);
		Template::set('recordberita', $recordberita);
	
        
		// berita terbaru
        if(!isset($recordberita->id))
        {
        	Template::set_view('home/not_pound404');
        }else{
        	$id_berita = $recordberita->id;
        	 
        }
        $recordkeltians = $this->berita_model->find_keltian();
        Template::set('recordkeltians', $recordkeltians);

        Template::set('id_berita', $id_berita);
        Template::set('mainmenu', "fasilitas");
        Template::set('pages', $id);
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
