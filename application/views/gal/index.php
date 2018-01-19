<link rel="stylesheet" href="<?php echo base_url(); ?>themes/default/css/lightbox/lightbox.min.css">
<?php
	$this->load->library('convert');
	$convert = new convert();
?>  
    <!-- Wrapper -->
    <div class="wrapper">
		<!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <h3 class="primary-font">Galeri</h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li class="active"><a href="#">Galeri</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="container">

        <div class="row">
          <div class="col-sm-12">
            <div class="btn-group portfolio__nav" id="filters">
              <a href="#" class="btn btn-color" data-filter="*">All</a>
              <a href="#" class="btn btn-color" data-filter=".cat-1"><span class="hidden-xs">Video</span></a>
              <a href="#" class="btn btn-color" data-filter=".cat-2"><span class="hidden-xs">Gambar</span></a>
            </div>
          </div>
        </div> <!-- / row -->

        <div class="row" id="isotope-container">
        	<?php
        	$has_records	= isset($records) && is_array($records) && count($records);
				if ($has_records) :
					foreach ($records as $record) :
					$photo = "noimage.jpg";
				   $mystring = $record->filename;
				   $findme   = '.MOV';
				   $pos = strpos($mystring, $findme);
				   if (!$pos === false) {
				   ?>
				   	<div class="isotope-item col-sm-4 col-md-3 cat-1">
				 		<div class="portfolio-item">
				   	<video width="100%" controls>
					   <source src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $record->filename; ?>" type="video/mp4">
					   <source src="mov_bbb.ogg" type="video/ogg">
					   Your browser does not support HTML5 video.
					 </video>
					  <div class="mask">
					   <?php echo $record->judul; ?> <span class="pull-right">
					   </span>
					 </div>
					 </div>
					</div>
					<?php
					}else{
					?>
				 <div class="isotope-item col-sm-4 col-md-3 cat-2">
				   <div class="portfolio-item">
					 <a href="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $record->filename; ?>" data-lightbox="example-set" data-title="<?php echo $record->judul; ?>">
					   <img src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $record->filename; ?>" class="img-responsive" alt="<?php echo $record->judul; ?>">
					   <div class="mask">
						 <?php echo $record->judul; ?> <span class="pull-right"> </span>
					   </div>
					 </a>
				   </div>
				 </div>
				 <?php } ?> 
			   <?php	
				   endforeach;
				endif;
			   ?>
          
        </div> <!-- / .row -->
        
      </div> <!-- / .container -->
    </div> <!-- / .wrapper -->
 
<script src="<?php echo base_url(); ?>themes/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>themes/default/js/jquery.sticky.js"></script>
<script src="<?php echo base_url(); ?>themes/default/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>themes/default/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>themes/default/js/isotope-custom.js"></script>
<script src="<?php echo base_url(); ?>themes/default/js/lightbox/lightbox-plus-jquery.min.js"></script>