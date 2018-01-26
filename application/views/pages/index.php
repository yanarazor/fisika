<?php
	$this->load->library('convert');
	$convert = new convert();

?>
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-6" data-bg-img="<?php echo base_url(); ?>assets/images/header3.jpg">
      <div class="container pt-20 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"><?php echo lang('bf_tentangkami'); ?></h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_tentangkami'); ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: service-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-left">
            <div class="single-service">
              <h3 class="text-theme-colored line-bottom-theme-colored2 text-theme-colored"><?php echo lang('bf_tentangkami'); ?></h3>
              <?php echo html_entity_decode($recordberita->{"content".$language}); ?>
              <div class="row">
                <div class="col-md-6 mb-10">
                    <a href="<?php echo base_url(); ?>pages/about/sambutan-kapus">
                      <div class="col-md-12 service-box text-left p-10 mb-00 bg-silver-light hover-box-shadow">
                          <div class="col-md-3 p-0">
                            <img src="<?php echo base_url(); ?>assets/images/about_introduction.jpg"/>
                          </div>
                          <div class="col-md-9">
                            <h4 class="media-heading heading font-weight-600 "><?php echo lang('bf_sambutankapus'); ?></h4>
                              <p><?php echo lang('bf_sambutankapusdesc'); ?></p>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-md-6  mb-10">
                  <a href="<?php echo base_url(); ?>pages/about/visi-misi">
                  <div class="col-md-12 service-box text-left p-10  bg-silver-light hover-box-shadow">
                      <div class="col-md-3 p-0">
                        <img src="<?php echo base_url(); ?>assets/images/about_introduction.jpg"/>
                      </div>
                      <div class="col-md-9">
                        <h4 class="media-heading heading font-weight-600"><?php echo lang('bf_visimisi'); ?></h4>
                          <p><?php echo lang('bf_visimisidesc'); ?></p>
                      </div>
                  </div>
                </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6  mb-10">
                    
                    <a href="<?php echo base_url(); ?>pages/about/statistik-satker">
                      <div class="col-md-12 service-box text-left p-10 mb-10 bg-silver-light hover-box-shadow">
                          <div class="col-md-3 p-0">
                            <img src="<?php echo base_url(); ?>assets/images/about_introduction.jpg"/>
                          </div>
                          <div class="col-md-9">
                            <h4 class="media-heading heading font-weight-600"><?php echo lang('bf_statistiksatker'); ?></h4>
                              <p><?php echo lang('bf_statistiksatkerdesc'); ?></p>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-md-6  mb-10">
                  <a href="<?php echo base_url(); ?>pages/laporan">
                  <div class="col-md-12 service-box text-left p-10 bg-silver-light hover-box-shadow">
                      <div class="col-md-3 p-0">
                        <img src="<?php echo base_url(); ?>assets/images/about_introduction.jpg"/>
                      </div>
                      <div class="col-md-9">
                        <h4 class="media-heading heading font-weight-600"><?php echo lang('bf_laporan'); ?></h4>
                          <p><?php echo lang('bf_laporandesc'); ?></p>
                      </div>
                  </div>
                </a>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6  mb-10">
                    
                    <a href="<?php echo base_url(); ?>pages/about/struktur-organisasi">
                      <div class="col-md-12 service-box text-left p-10 mb-10 bg-silver-light hover-box-shadow">
                          <div class="col-md-3 p-0">
                            <img src="<?php echo base_url(); ?>assets/images/about_introduction.jpg"/>
                          </div>
                          <div class="col-md-9">
                            <h4 class="media-heading heading font-weight-600"><?php echo lang('bf_strukturorganisasi'); ?></h4>
                              <p><?php echo lang('bf_strukturorganisasidesc'); ?></p>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-md-6  mb-10">
                  <a href="<?php echo base_url(); ?>pages/contact">
                  <div class="col-md-12 service-box text-left p-10 bg-silver-light hover-box-shadow">
                      <div class="col-md-3 p-0">
                        <img src="<?php echo base_url(); ?>assets/images/about_introduction.jpg"/>
                      </div>
                      <div class="col-md-9">
                        <h4 class="media-heading heading font-weight-600"><?php echo lang('bf_sejarah'); ?></h4>
                          <p><?php echo lang('bf_sejarahdesc'); ?></p>
                      </div>
                  </div>
                </a>
                </div>
              </div>

              <div class="row">
                 
                <div class="col-md-6  mb-10">
                  <a href="<?php echo base_url(); ?>pages/contact">
                  <div class="col-md-12 service-box text-left p-10 bg-silver-light hover-box-shadow">
                      <div class="col-md-3 p-0">
                        <img src="<?php echo base_url(); ?>assets/images/about_introduction.jpg"/>
                      </div>
                      <div class="col-md-9">
                        <h4 class="media-heading heading font-weight-600"><?php echo lang('bf_kontakkami'); ?></h4>
                          <p><?php echo lang('bf_kontakkamidesc'); ?></p>
                      </div>
                  </div>
                </a>
                </div>
              </div>

               
                
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-right mt-sm-30 ml-40">
              <div class="widget">
                <div class="services-list">
                  <ul class="list list-border mt-0">
                    <li class="<?php echo (isset($pages) and $pages == "sambutan-kapus") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/sambutan-kapus"><?php echo lang('bf_sambutankapus'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "visi-misi") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/visi-misi"><?php echo lang('bf_visimisi'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>pages/about/statistik-satker"><?php echo lang('bf_statistiksatker'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>pages/laporan"><?php echo lang('bf_laporan'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>pages/about/struktur-organisasi"><?php echo lang('bf_strukturorganisasi'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>pages/about/sejarah"><?php echo lang('bf_sejarah'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "kontak-kami") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/contact"><?php echo lang('bf_kontakkami'); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>