<?php
	$this->load->library('convert');
	$convert = new convert();
?>
  <!--<link rel='stylesheet' type='text/css' href='http://localhost/kimianew/themes/default/css/balloon.css'/>-->
    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Jumbotron -->
      <div class="main-slideshow">
        <div id="main-slideshow" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
           <?php
        	$has_beritaterbaru	= isset($ecordheadline) && is_array($ecordheadline) && count($ecordheadline);
        		$i = 1;
				if ($has_beritaterbaru) :
					foreach ($ecordheadline as $record) :
					$photo = $record->picture != "" ? $record->picture : "noimage.jpg";
					
				?>
            <!-- Slide No 1 -->
            <div class="item <?php echo $i==1 ? "active" :"";?>">
              <div class="jumbotron <?php echo $record->mode_headline; ?>">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <h1 class="animated slideInLeft"><?php echo $record->{"title".$language}; ?></h1>
                      <p class="lead animated slideInLeft delay-1"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></p>
                      <a class="btn btn-color animated slideInLeft delay-2" href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><?php echo lang('bf_read'); ?></a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                      <img class="img-responsive" src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>" alt="...">
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <?php	
            	$i++;
					endforeach;
				endif;
				?>
          </div>
          <!-- Controls -->
          <a class="slideshow-arrow slideshow-arrow-prev bg-hover-color" href="#main-slideshow" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="slideshow-arrow slideshow-arrow-next bg-hover-color" href="#main-slideshow" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div> <!-- / Slideshow -->

      <!-- Intro Text -->
      <div class="container intro">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-color"><?php echo lang('bf_welcome_message'); ?></h2>
            <p class="text-muted">
            <?php echo lang('bf_welcome_message_detil'); ?>
            </p>
          </div>
          
        </div> <!-- / .row -->
        <hr>
        
		<!-- slider produk -->
		<?php
		$hasproduct	= isset($recordproduct) && is_array($recordproduct) && count($recordproduct);
		if ($hasproduct) :
		?>
		   <ul class="bxslider">
		   <?php
			   foreach ($recordproduct as $record) :
		   ?>
			<li>
				<div class="portfolio-item">
					<a href="<?php echo base_url(); ?>produk/read/<?php echo $record->id; ?>">
					 <div class="portfolio-item-img">
					  <img src="<?php echo $this->settings_lib->item('site.urlpublic'); ?><?php echo $record->filename; ?>" class="img-responsive" alt="...">
					  </div>
					  <div class="mask">
					   <?php echo $record->nama_product; ?>
					  </div>
					</a>
				</div>
			</li>
		   <?php endforeach; ?>
		   </ul>
		<?php endif; ?>
		<!-- end slider produk -->
		 <!-- Features -->
        <h2 class="headline text-color">
          <span class="border-color"> <?php echo lang('bf_newresearch'); ?></span>
        </h2>
        <div class="row features">
        	<?php
        	$hasresearchnew	= isset($recordpenelitian) && is_array($recordpenelitian) && count($recordpenelitian);
				if ($hasresearchnew) :
					foreach ($recordpenelitian as $record) :
				?>
					<div class="col-sm-4">
					 <!-- Service Item #1 -->
					 <div class="services-item">
					   <i class="fa fa-flask fa-2x text-color"></i>
					   <div class="services-item-desc">
						 <h4 class="primary-font"><a href="<?php echo base_url(); ?>penelitian/view/<?php echo $record->id; ?>"><?php echo $record->judul; ?></h4>
						 <p class="text-muted">
						   PJ : <?php echo $record->pj; ?>
						 </p>
					   </div>
					 </div>
				   </div>
					 
				<?php
					endforeach;
				endif;
			?>
          
        </div> <!-- / .row -->
        
        <!-- Our Services -->
        <div class="row services">
          <div class="col-sm-4">
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-flask fa-2x text-color"></i>
              <div class="services-item-desc">
                <h4 class="primary-font"><?php echo lang('bf_kelompokbbo'); ?></h4>
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-flask fa-2x text-color"></i>
              <div class="services-item-desc">
                <h4 class="primary-font"><?php echo lang('bf_kelompokpkm'); ?></h4>
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-flask fa-2x text-color"></i>
              <div class="services-item-desc">
                <h4 class="primary-font"><?php echo lang('bf_kelompokpebl'); ?></h4>
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                </p>
              </div>
            </div>
          </div>
          
          
        </div> <!-- / .row -->

        <!-- Portfolio -->
        <h2 class="headline text-color">
          <span class="border-color"><?php echo lang('bf_berita_terbaru'); ?></span>
        </h2>
        <div class="row portfolio">
        <?php
        	$has_beritaterbaru	= isset($recordterbarus) && is_array($recordterbarus) && count($recordterbarus);
				if ($has_beritaterbaru) :
					foreach ($recordterbarus as $record) :
					$photo = $record->picture != "" ? $record->picture : "noimage.jpg";
				?>
					<div class="col-sm-4">
					 <!-- Portfolio Item #1 -->
					 <div class="portfolio-item">
					   <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>">
					   	<div class="portfolio-item-img">
						 <img src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>" class="img-responsive" alt="...">
						 </div>
						 <div class="mask">
						  <?php echo $record->display_name; ?> <span class="pull-right"><i class="fa fa-eye"></i> <?php echo $record->count_view; ?></span>
						 </div>
					   </a>
					   <div class="portfolio-desc">
						 <h3 class="primary-font"></h3>
						 <p class="text-muted">
						 	<a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><?php echo $record->{"title".$language} ?></a>
						   <!--Sed lacinia suscipit lacus non sodales. Pellentesque lacinia ornare justo eu tincidunt. Morbi ullamcorper sed ligula.-->
						 </p>
					   </div>
					 </div>
				   </div>
				<?php
					endforeach;
				endif;
				?>
        </div> <!-- / .row -->

       

        <!-- Blog Posts -->
        <h2 class="headline text-color">
          <span class="border-color"><?php echo lang('bf_profile_pegawai'); ?></span>
        </h2>
        <div class="row recent-blogs">
        <?php
        	$has_recordpegawais	= isset($recordpegawais) && is_array($recordpegawais) && count($recordpegawais);
				if ($has_recordpegawais) :
					foreach ($recordpegawais as $record) :
				?>
				<div class="col-sm-6">
				  <div class="recent-blog">
				  	<!-- <img src="<?php echo base_url(); ?>assets/images/noimage.jpg" alt="..."> -->
				  	<img 
						border="0"
						class="lazy media-object"
						width="100%"
						src="<?php echo base_url(); ?>assets/images/noimage.jpg"
						alt="<?php echo $record->nama; ?>"
						data-original="http://simpeg.bosdm.lipi.go.id/foto/<?php echo $record->nip; ?>.jpg" />
					<noscript>
						<img  
						 border="0"
						 src="http://simpeg.bosdm.lipi.go.id/foto/<?php echo $record->nip; ?>.jpg"  width="100%"/>
					 </noscript>
					<div class="recent-blog-desc">
					  <h3 class="primary-font">
						<a href="<?php echo base_url(); ?>emp/view/<?php echo $record->nip; ?>/<?php echo $convert->SeoUrl($record->nama); ?>"><?php echo $record->nama; ?> </a>
					  </h3>
					  <p class="text-muted"><?php echo $record->jabatan ?></p>
					  <p class="text-muted"><?php echo $record->jabatan_ft ?></p>
					  <p class="text-muted"><?php echo $record->jabatan_fu ?></p>
					  <br>
					</div>
				  </div>
				</div>
          <?php
					endforeach;
				endif;
				?>
        </div> <!-- / .row -->

      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->
    
 	<div class="container">
        <div class="row">
          <div class="col-sm-9">
			   <h2 class="headline text-color">
				 <span class="border-color">Foto</span>
			   </h2>
			   <div class="content">
				 <p>
				 <!-- slider foto -->
				 <?php
				 $hasfoto	= isset($recordgallerys) && is_array($recordgallerys) && count($recordgallerys);
				 if ($hasfoto) :
				 ?>
					<ul class="bxslider">
					<?php
						foreach ($recordgallerys as $record) :
					?>
					 <li>
						 <div class="portfolio-item">
							 <a href="#">
							  <div class="portfolio-item-img">
							   <img src="<?php echo $this->settings_lib->item('site.urlpublic'); ?><?php echo $record->filename; ?>" class="img-responsive" alt="<?php echo $recordvideo->judul; ?>">
							   </div>
							 </a>
						 </div>
					 </li>
					<?php endforeach; ?>
					</ul>
				 <?php endif; ?>
				 <!-- end slider produk -->
				 </p>
			   </div>
          </div>
          <div class="col-sm-3">
          		<h2 class="headline text-color">
				  <span class="border-color">Video</span>
				</h2>
				<div class="content">
				  <p>
				  	<div class="isotope-item">
				 		<div class="portfolio-item">
						 <video width="100%" controls>
							<source src="<?php echo $this->settings_lib->item('site.urlpublic'); ?><?php echo $recordvideo->filename; ?>" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						  </video>
						<div class="mask">
							<?php echo $recordvideo->judul; ?> <span class="pull-right">
						</span>
					 </div>
					 </div>
					</div>
				  </p>
				</div>
          </div>
        </div>
	</div>