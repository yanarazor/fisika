<script src="<?php echo base_url(); ?>themes/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/default/css/flipbook/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/default/css/flipbook/flipbook.style.css">
<script src="<?php echo base_url(); ?>themes/default/js/flipbook/flipbook.min.js"></script>
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
              <h3 class="primary-font">Informasi Publik!</h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li class="active"><a href="#"><?php echo lang('bf_kip'); ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
      
        <!-- Intro -->
        <div class="row intro">
          <div class="col-sm-12">

            <p class="text-muted">Informasi Publik adalah informasi yang dihasilkan, disimpan, dikelola, dikirim, dan/atau diterima oleh suatu badan publik yang berkaitan dengan penyelenggara dan penyelenggaraan negara dan/atau penyelenggara dan penyelenggaraan badan publik lainnya yang sesuai dengan Undang-Undang ini serta informasi lain yang yang berkaitan dengan kepentingan publik</p>
          </div>
        </div> <!-- / .row -->

        <hr>

        <!-- Our Products -->
        <div class="row">
          <div class="col-sm-12">
            <h3 class="headline first-child text-color">
              <span class="border-color">File Lampiran</span>
            </h3>
          </div>
        </div>
        <div class="row">
        	<?php
        	$has_records	= isset($records) && is_array($records) && count($records);
				if ($has_records) :
					foreach ($records as $record) :
					$photo = "noimage.jpg";
				?>
        	
          <div class="col-sm-3">
            <div class="shop-product">
              <a href="#" class="<?php echo $record->id; ?> "><i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:48px;color:red"></i></a>
              <a href="#" class="<?php echo $record->id; ?> "><h5 class="primary-font"><?php echo $record->nama; ?></h5></a>
              <p class="text-muted">
                <?php echo $record->keterangan; ?>
              </p>
              <p>
              </p>
              <a href="#" id="<?php echo $record->id; ?>" class="<?php echo $record->id; ?> btn btn-sm btn-color"><i class="fa fa-eye" style="font-size:14px;"></i> Baca</a>
            </div>
          </div>
           <?php	
			   endforeach;
		   	endif;
		   ?>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </div> <!-- / .wrapper -->

<script type="text/javascript">
	<?php
	if ($has_records) :
		  foreach ($records as $record) :
	  ?>
		$(".<?php echo $record->id; ?>").flipBook({
            pdfUrl:"<?php echo $this->settings_lib->item('site.urlpublic'); ?><?php echo $record->file_name; ?>",
			lightBox:true,zoomLevels:[0.9,1.5]
        });
     <?php	
		 endforeach;
	  endif;
	 ?>
</script>
