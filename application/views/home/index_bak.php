<?php
	$this->load->library('convert');
	$convert = new convert();
?>
  
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

        <!-- Features -->
        <h2 class="headline text-color">
          <span class="border-color"> <?php echo lang('bf_hasil_penelitian'); ?></span>
        </h2>
        <div class="row features">
          <div class="col-sm-6">
            <h3 class="primary-font first-child">PENELITIAN PENGEMBANGAN TEKNOLOGI BERSIH.</h3>
            <p class="text-muted">
              1. Tarzan Sembiring - Peneliti (P2 Kimia) <br>
              2. Hari Rom Haryadi - Peneliti (P2 Kimia) <br>
              3. Evita Boes - Peneliti (P2 Kimia) <br>
              4. Tjandrawati - Peneliti (P2 Kimia) <br>
              5. Neni Sintawardani - Peneliti (P2 Kimia).
            </p>
          </div>
          <div class="col-sm-6">
            <img src="<?php echo base_url(); ?>assets/images/uploaded/imac.png" class="img-responsive" alt="...">            
          </div>
        </div> <!-- / .row -->
        <div class="divider"></div>
        <div class="row features last">
        	
          <div class="col-sm-6">
            <div class="border-bottom"><img src="<?php echo base_url(); ?>assets/images/uploaded/browser-cut.png" class="img-responsive" alt="..."></div>
          </div>
          <div class="col-sm-6">
            <h3 class="primary-font">PENELITIAN PENGUASAAN TEKNOLOGI BAHAN BAKU OBAT DARI BIOTA LAUT, MIKROBA DAN HERBAL TERSTANDAR</h3>
            <p class="text-muted">
            1. Muhammad Hanafi - Peneliti (P2 Kimia) <br>
            2. Linar Zalinar Udin - Peneliti (P2 Kimia) <br>
            3. Akhmad Darmawan - Peneliti (P2 Kimia) <br>
            4. Rizna Triana Dewi - Peneliti (P2 Kimia)
            </p>
          </div>
        </div> <!-- / .row -->

        <!-- Blog Posts -->
        <h2 class="headline text-color">
          <span class="border-color"><?php echo lang('bf_artikel_terbaru'); ?></span>
        </h2>
        <div class="row recent-blogs">
        <?php
        	$has_beritaterbaru	= isset($recordterbarus) && is_array($recordterbarus) && count($recordterbarus);
				if ($has_beritaterbaru) :
					foreach ($recordterbarus as $record) :
					$photo = $record->picture != "" ? $record->picture : "noimage.jpg";
				?>
				<div class="col-sm-6">
				  <div class="recent-blog">
					<img src="<?php echo base_url(); ?>assets/images/noimage.jpg" alt="...">
					<div class="recent-blog-desc">
					  <h3 class="primary-font">
						<a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"> <?php echo $record->{"title".$language} ?> </a>
					  </h3>
					  <hr>
					  <p class="text-muted"><?php echo $record->display_name ?></p>
					  <p class="desc"> <?php echo strip_tags(html_entity_decode($record->{"content".$language})) ?></p>
					  <a class="btn btn-lg btn-color" href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><?php echo lang('bf_read'); ?>...</a>
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

   